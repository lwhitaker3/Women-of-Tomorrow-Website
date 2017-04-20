<?php
/**
 * Template Name: Mentors Page
 */
?>

<!-- <?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?> -->

<div class="header-image">
  

</div>

<div class="breadcrumb"><?php get_breadcrumb(); ?></div>

<?php if( have_rows('mentor') ): ?>

	<div class="mentors">

	<?php while( have_rows('mentor') ): the_row();

		// vars
		$image = get_sub_field('mentor_photo');
		$name = get_sub_field('mentor_name');
		$company = get_sub_field('mentor_company');
    $position = get_sub_field('mentor_position');
    $linkedin = get_sub_field('mentor_linkedin');
    $portfolio = get_sub_field('mentor_portfolio');
    $link = get_sub_field('other_link_url');

	?>

    <?php if( $image ): ?>

	    <div class="mentor_card">


        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />


    		<?php if( $name ): ?>
    			<?php echo $name; ?>
    		<?php endif; ?>

        <?php if( $company ): ?>
          <?php echo $company; ?>
        <?php endif; ?>

        <?php if( $position ): ?>
          <?php echo $position; ?>
        <?php endif; ?>

        <?php if( $linkedin ): ?>
          <a href="<?php echo $linkedIn; ?>">Linked In</a>
        <?php endif; ?>

        <?php if( $portfolio ): ?>
          <a href="<?php echo $portfolio; ?>">Portfolio</a>
        <?php endif; ?>

        <?php if( $link ): ?>
          <a href="<?php echo $link; ?>">Link</a>
        <?php endif; ?>

		  </div>

    <?php endif; ?>

	<?php endwhile; ?>

</div>

<?php endif; ?>

<?php if( have_rows('mentor') ): ?>

	<div class="mentors_no_picture">

    <h2>Other Mentors</h2>

	<?php while( have_rows('mentor') ): the_row();

		// vars
		$image = get_sub_field('mentor_photo');
		$name = get_sub_field('mentor_name');
		$company = get_sub_field('mentor_company');
    $position = get_sub_field('mentor_position');
    $linkedin = get_sub_field('mentor_linkedin');
    $portfolio = get_sub_field('mentor_portfolio');
    $link = get_sub_field('other_link_url');

	?>

    <?php if( !$image ): ?>

	    <div class="mentor_card">


    		<?php if( $name ): ?>
    			<?php echo $name; ?>
    		<?php endif; ?>

        <?php if( $company ): ?>
          <?php echo $company; ?>
        <?php endif; ?>

        <?php if( $position ): ?>
          <?php echo $position; ?>
        <?php endif; ?>

        <?php if( $linkedin ): ?>
          <a href="<?php echo $linkedIn; ?>">Linked In</a>
        <?php endif; ?>

        <?php if( $portfolio ): ?>
          <a href="<?php echo $portfolio; ?>">Portfolio</a>
        <?php endif; ?>

        <?php if( $link ): ?>
          <a href="<?php echo $link; ?>">Link</a>
        <?php endif; ?>

		  </div>

    <?php endif; ?>

	<?php endwhile; ?>

</div>

<?php endif; ?>
