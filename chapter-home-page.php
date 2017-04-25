<?php
/**
 * Template Name: Chapter Home Page
 */
?>

<!-- <?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?> -->


<div class="full-width-image" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png"></div>

<div class="container">
    <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-12">
      <h2>Our Chapter</h2>
      <p>The Women of Tomorrow mission is to inspire, motivate and empower young women to live up to their full potential through a unique mentoring program with highly accomplished professional women and scholarship opportunities.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <?php
        $images = get_field('gallery');
        if( $images ): ?>
            <div class="grid">
              <div class="grid-sizer"></div>
                <?php foreach( $images as $image ): ?>
                  <?php if($i==0): ?>
                    <div class="grid-item-width2">
                      <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                    <?php $i++; ?>
                  <?php elseif($i==4): ?>
                    <div class="grid-item-width2">
                      <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                    <?php $i++; ?>
                  <?php elseif($i==5):?>
                    <div class="grid-item">
                      <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                    <?php $i==0; ?>
                  <?php else:?>
                    <div class="grid-item">
                      <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                    <?php $i++; ?>
                  <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div class="grid">
          <!-- <div class="grid-sizer"></div>
          <div class="grid-item-width2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="" />
          </div>
          <div class="grid-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="" />
          </div>
          <div class="grid-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="" />
          </div>
          <div class="grid-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="" />
          </div>
          <div class="grid-item-width2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="" />
          </div>
          <div class="grid-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="" />
          </div>
          <div class="grid-item-width2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="" />
          </div>
          <div class="grid-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="" />
          </div>
          <div class="grid-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="" />
          </div>
          <div class="grid-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="" />
          </div>
          <div class="grid-item-width2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="" />
          </div>
          <div class="grid-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="" />
          </div> -->
          <!-- <div class="grid-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="" />
          </div>
          <div class="grid-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="" />
          </div>
          <div class="grid-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="" /> -->
          </div>
        </div>
    </div>
  </div>
</div>
