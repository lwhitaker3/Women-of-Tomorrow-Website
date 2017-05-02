<?php $location = get_field('chapter_location');?>

<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <h1 class="event-title"><?php the_title(); ?></h1>
      <?php
      $image = get_field('main_event_image');
      if( !empty($image) ): ?>
        <div class="main-image-wrapper">
      	   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
      <?php endif; ?>
      <div class="row">
        <div class="col-lg-8">

          <div class="event_description">
            <h4>Event Description</h4>
            <?php the_field('event_description'); ?>
          </div>



        </div>

        <div class="col-lg-4">
          <div class="event_overview">
            <p><i class="fa fa-calendar-o" aria-hidden="true"></i>Date<br><span><?php the_field('event_date'); ?></span></p>
            <p><i class="fa fa-clock-o" aria-hidden="true"></i>Time<br><span><?php the_field('event_time'); ?></span></p>
            <?php $address = get_field('event_address');
              if( !empty($address) ):
              ?>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i><?php the_field('event_location'); ?><br><span><?php echo $address['address']; ?></span></p>

              <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">

          <?php

          $images = get_field('event_images');

          if( $images ): ?>
          <div class="event_gallery">
            <h4>Event Gallery</h4>
            <div class="grid">
              <div class="grid-sizer"></div>
                <?php foreach( $images as $image ): ?>
                  <div class="grid-item">
                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <p class="caption"><?php echo $image['caption']; ?></p>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>

    </div>
    <div class="col-lg-3">
      <h3 class="upcoming_events">Upcoming Events</h3>
      <?php
      $upcomingquery = new WP_Query( array( 'post_type' => 'event', 'orderby'=> 'date_clause',  'order' => 'ASC', 'meta_query' => array('relation'=>'AND', 'date_clause'=> array('key' => 'event_date', 'value' => date('Ymd'), 'compare' => '>=', 'type' => 'DATE'), 'location_clause'=> array('key' =>'chapter_location', 'value' => $location)) ));
      ?>
      <?php
      if ( $upcomingquery->have_posts() ) :
      while ( $upcomingquery->have_posts() ) : $upcomingquery->the_post();
      $date = get_field('event_date');
      $date = new DateTime($date);
      $time = get_field('event_time');
      ?>

      <div class="event_list">
        <div class='date_wrap'>
          <p class='day'><?php echo $date->format('j'); ?></p>
          <p class='month'><?php echo $date->format('M'); ?></p>
        </div>
        <div class="event-info-wrap">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="time"><?php echo $date->format('M j, Y'); if (!empty($time)):?> at <?php echo $time; endif;?></p>
        </div>
      </div>


      <?php endwhile; wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
