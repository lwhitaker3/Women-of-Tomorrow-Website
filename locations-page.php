<?php
/**
 * Template Name: Locations
 */
?>

<?php get_template_part('templates/page', 'intro'); ?>

<?php if( have_rows('location_info') ): ?>

<div class="container">
  <div class="row cards_row">

    <?php while( have_rows('location_info') ): the_row();

      // vars
      $image = get_sub_field('location_image');
      $location = get_sub_field('location');
      $link = get_sub_field('link');

    ?>

    <div class="col-lg-4">
      <?php if( $link ): ?>
        <a class="card_link" href="<?php echo $link; ?>">
          <?php endif; ?>
          <div class="card_wrapper">
            <div class="card_image_wrapper">
              <?php if($image): ?>
                	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
            </div>
            <h3><?php echo $location; ?></h3>
            <div class="btn btn-secondary">Learn More</div>
          </div>
          <?php if( $link ): ?>
        </a>
      <?php endif; ?>
    </div><!-- /.col-lg-4 -->

    <?php endwhile; ?>

  </div>
</div>
<?php endif; ?>
