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


      <?php if( have_rows('sponsor_info') ): ?>
      <h3 class="position"><?php echo $level; ?></h3>
      <div class="row cards_row">


        <?php while( have_rows('sponsor_info') ): the_row();
          // vars
          $logo = get_sub_field('sponsor_logo');
          $content = get_sub_field('sponsor_name');
          $link = get_sub_field('sponsor_link');
        ?>

        <div class="col-lg-3 col-md-4 col-sm-6">
          <a class="card_link" href="<?php echo $link; ?>">
            <div class="card_wrapper">
              <div class="card_image_wrapper sponsors">
                <?php
                if( !empty($logo) ): ?>
                	<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                <?php endif; ?>
              </div>
              <h3 class="margin-bottom-50"><?php echo $content; ?></h3>
            </div>
          </a>
        </div>
        <?php endwhile; ?>
      </div>

      <?php endif; ?>

    <?php endwhile; ?>
  </div>
  <?php endif; ?>
</div>
