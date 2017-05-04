<?php
/**
 * Template Name: Chapter Home Page
 */
?>

<!-- <?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?> -->

<?php

$image = get_field('chapter_main_image');

if( !empty($image) ): ?>

	<div class="full-width-image" data-parallax="scroll" data-image-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>

<?php endif; ?>


<div class="container">
    <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-12">
      <div class="line-container"><h2>Our Chapter</h2></div>
      <div class="intro-text"><?php the_field('chapter_intro'); ?></div>
    </div>
  </div>
  <div class="row photo_gallery">
    <div class="col-sm-12">
      <?php
        $images = get_field('gallery');
        if( $images ): ?>
            <div class="grid">
              <div class="grid-sizer"></div>
                <?php foreach( $images as $image ): ?>
                  <?php if($i==0): ?>
                    <div class="grid-item-width2">
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                    <?php $i++; ?>
                  <?php elseif($i==4): ?>
                    <div class="grid-item-width2">
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                    <?php $i++; ?>
                  <?php elseif($i==5):?>
                    <div class="grid-item">
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                    <?php $i==0; ?>
                  <?php else:?>
                    <div class="grid-item">
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                    <?php $i++; ?>
                  <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        </div>
    </div>
  </div>
</div>
