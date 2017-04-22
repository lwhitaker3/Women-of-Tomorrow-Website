<?php
/**
 * Template Name: Events
 */
?>

<?php $location = get_field('chapter_location');
echo $location;
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>

<h2>Upcoming Events</h2>

<?php
if ( get_query_var('paged') ) $paged = get_query_var('paged');
if ( get_query_var('page') ) $paged = get_query_var('page');

$query = new WP_Query( array( 'post_type' => 'event', 'paged' => $paged ) );

if ( $query->have_posts() ) : ?>

	<?php while ( $query->have_posts() ) : $query->the_post();

  $today = date('Ymd');
  $date = get_field('event_date', false, false);
  $eventlocation = get_field('chapter_location');
  echo $eventlocation;
  ?>


  <?php if ( $date >= $today && $eventlocation == $location) : ?>

		<div class="entry">

      <?php get_template_part('templates/events'); ?>

		</div>

    <?php endif; ?>

	<?php endwhile; wp_reset_postdata(); ?>
	<!-- show pagination here -->
<?php else : ?>
	<!-- show 404 error here -->
<?php endif; ?>
