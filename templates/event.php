<?php $location = get_field('chapter_location');?>

<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php echo $date ?>
      <?php echo $time ?>
      <?php the_field('event_description'); ?>

      <?php

      $images = get_field('event_images');
      $counter = 0;

      if( $images ): ?>
          <ul>
              <?php foreach( $images as $image ): ?>
                  <li>
                      <a href="<?php echo $image['url']; ?>">
                           <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                      </a>
                      <p><?php echo $image['caption']; ?></p>
                  </li>
              <?php endforeach; ?>
          </ul>
      <?php endif; ?>
    </div>
    <div class="col-lg-3">
      <h3>Upcoming Events</h3>
      <?php
      $upcomingquery = new WP_Query( array( 'post_type' => 'event', 'orderby'=> 'date_clause',  'order' => 'ASC', 'meta_query' => array('relation'=>'AND', 'date_clause'=> array('key' => 'event_date', 'value' => date('Ymd'), 'compare' => '>=', 'type' => 'DATE'), 'location_clause'=> array('key' =>'chapter_location', 'value' => $location)) ));
      ?>
      <?php
      if ( $upcomingquery->have_posts() ) :
      while ( $upcomingquery->have_posts() ) : $upcomingquery->the_post();
      ?>


          <?php get_template_part('templates/events'); ?>


      <?php endwhile; wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
