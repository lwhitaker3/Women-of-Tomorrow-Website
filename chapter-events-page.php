<?php
/**
 * Template Name: Events
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
      $query = new WP_Query( array( 'post_type' => 'event') );
      if ( $query->have_posts() ) : ?>


      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="upcoming" role="tabpanel">
          <?php while ( $query->have_posts() ) : $query->the_post();
          $today = date('Ymd');
          $date = get_field('event_date', false, false);
          $eventlocation = get_field('chapter_location');
          ?>
          <?php if ( $date >= $today && $eventlocation == $location) : ?>

            <div class="entry">

              <?php get_template_part('templates/events'); ?>

            </div>

          <?php endif; ?>
          <?php endwhile; wp_reset_postdata(); ?>

        </div>
        <div class="tab-pane" id="past" role="tabpanel">

          <?php while ( $query->have_posts() ) : $query->the_post();
          $today = date('Ymd');
          $date = get_field('event_date', false, false);
          $eventlocation = get_field('chapter_location');
          ?>
          <?php if ( $date < $today && $eventlocation == $location) : ?>

            <div class="entry">

              <?php get_template_part('templates/events'); ?>

            </div>

          <?php endif; ?>
          <?php endwhile; wp_reset_postdata(); ?>

        </div>
      </div>


    </div>
    <div class="col-lg-4">
      <h2>Featured Event</h2>
    </div>
  </div>
</div>




	<!-- show pagination here -->
<?php else : ?>
	<!-- show 404 error here -->
<?php endif; ?>
