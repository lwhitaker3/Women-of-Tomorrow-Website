<?php
/**
 * Template Name: Locations
 */
?>

<?php $location = get_field('chapter_location');
echo $location;
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>


<?php if( have_rows('location_info') ): ?>

	<ul class="slides">

	<?php while( have_rows('location_info') ): the_row();

		// vars
		$image = get_sub_field('location_image');
		$location = get_sub_field('location');
		$link = get_sub_field('link');

		?>

		<li class="slide">

			<?php if( $link ): ?>
				<a href="<?php echo $link; ?>">
			<?php endif; ?>

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

			<?php if( $link ): ?>
				</a>
			<?php endif; ?>

		    <?php echo $location; ?>

		</li>

	<?php endwhile; ?>

	</ul>


<?php endif; ?>
