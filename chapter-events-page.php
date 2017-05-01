<?php
/**
 * Template Name: Chapter Events
 */
?>

<?php $location = get_field('chapter_location');?>

<?php get_template_part('templates/page', 'intro'); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#upcoming" role="tab">Upcoming Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#past" role="tab">Past Events</a>
        </li>
      </ul>

      <?php
      $upcomingquery = new WP_Query( array( 'post_type' => 'event', 'orderby'=> 'date_clause',  'order' => 'ASC', 'meta_query' => array('relation'=>'AND', 'date_clause'=> array('key' => 'event_date', 'value' => date('Ymd'), 'compare' => '>=', 'type' => 'DATE'), 'location_clause'=> array('key' =>'chapter_location', 'value' => $location)) ));
      $pastquery = new WP_Query( array( 'post_type' => 'event', 'orderby'=> 'date_clause',  'order' => 'DESC', 'meta_query' => array('relation'=>'AND', 'date_clause'=> array('key' => 'event_date', 'value' => date('Ymd'), 'compare' => '<', 'type' => 'DATE'), 'location_clause'=> array('key' =>'chapter_location', 'value' => $location)) ));
       ?>


      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="upcoming" role="tabpanel">
          <?php
          if ( $upcomingquery->have_posts() ) :
          while ( $upcomingquery->have_posts() ) : $upcomingquery->the_post();
          ?>


              <?php get_template_part('templates/events'); ?>


          <?php endwhile; wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
        <div class="tab-pane" id="past" role="tabpanel">
          <?php
          if ( $pastquery->have_posts() ) :
          while ( $pastquery->have_posts() ) : $pastquery->the_post();
          ?>


              <?php get_template_part('templates/events'); ?>


          <?php endwhile; wp_reset_postdata(); ?>
          <?php endif; ?>

        </div>
      </div>


    </div>
    <div class="col-lg-4">
      <h2>Featured Event</h2>
      <div class="featured_event_wrapper">
        <?php $eventimage = get_field('event_photo');
        if( !empty($eventimage) ): ?>
        	<img src="<?php echo $eventimage['url']; ?>" alt="<?php echo $eventimage['alt']; ?>" />
        <?php endif; ?>
        <p><?php the_field('event_name'); ?></p>
        <p><?php the_field('event_date'); ?></p>
        <p><?php the_field('event_description'); ?></p>
      </div>
    </div>
  </div>
</div>
