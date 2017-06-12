<?php
/**
 * Template Name: Chapter Sponsors
 */
?>

<?php $location = get_field('chapter_location');?>

<?php get_template_part('templates/page', 'intro'); ?>

<div class="background">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/page', 'header'); ?>
    <?php endwhile; ?>
  </div>

  <?php if( have_rows('sponsors') ): ?>
  <div class="container container_spacing_bottom">


  	<?php while( have_rows('sponsors') ): the_row();
  		// vars
  		$level = get_sub_field('sponsor_level');
  	?>

      <div class="row">
		    <div class="col-md-12">

          <?php if( have_rows('sponsor_info') ): ?>

          <h3 class="position"><?php echo $level; ?></h3>

          <?php while( have_rows('sponsor_info') ): the_row();
            // vars
            $image = get_sub_field('sponsor_logo');
            $content = get_sub_field('sponsor_name');
            $link = get_sub_field('sponsor_link');
          ?>

          <li class="slide">

            <?php if( $link ): ?>
              <a href="<?php echo $link; ?>">
            <?php endif; ?>

              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
              <?php echo $content; ?>
            <?php if( $link ): ?>
              </a>
            <?php endif; ?>



          </li>
        <?php endwhile; ?>
        <?php endif; ?>

        </div>
      </div>
  	<?php endwhile; ?>

    </div>

  <?php endif; ?>
</div>
