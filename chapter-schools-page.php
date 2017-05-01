<?php
/**
 * Template Name: Chapter Schools
 */
?>

<?php get_template_part('templates/page', 'intro'); ?>


<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <?php echo do_shortcode(get_field('map_short_code')); ?>
    </div>
  </div>
</div>
