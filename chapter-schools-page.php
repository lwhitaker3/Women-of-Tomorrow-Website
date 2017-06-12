<?php
/**
 * Template Name: Chapter Schools
 */
?>
<?php $location = get_field('chapter_location');?>
<?php get_template_part('templates/page', 'intro'); ?>


<div class="background">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/page', 'header'); ?>
    <?php endwhile; ?>

    <div class="row">
      <div class="col-lg-12 margin-bottom-50">
        <?php if( $location): ?>
        <p>The schools we operate in across <?php echo $location; endif?>.</p>
        <?php echo do_shortcode(get_field('map_short_code')); ?>
      </div>
    </div>
  </div>


</div>
