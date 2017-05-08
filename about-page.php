<?php
/**
 * Template Name: About Page
 */
?>


<?php get_template_part('templates/page', 'intro'); ?>

<div class="background">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/page', 'header'); ?>
    <?php endwhile; ?>
  </div>


  <div class="container">
    <div class="row cards_row">

      <div class="col-lg-4">
        <a href="<?php $url = site_url( '/about/our-story/' ); echo $url;?>" class="card_link">
          <div class="card_wrapper">
            <div class="card_image_wrapper">
              <?php
                $image = get_field('our_story_picture');
                if( !empty($image) ): ?>
                	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
            </div>
            <h3>Our Story</h3>
            <div class="line-decoration"></div>
            <p class="card_text"><?php the_field('our_story_text'); ?></p>
            <div class="btn btn-secondary">Learn More</div>
          </div>
        </a>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <a href="<?php $url = site_url( '/about/our-mission/' ); echo $url;?>" class="card_link">
          <div class="card_wrapper">
            <div class="card_image_wrapper">
              <?php
                $image = get_field('our_mission_picture');
                if( !empty($image) ): ?>
                	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
            </div>
            <h3>Our Mission</h3>
            <div class="line-decoration"></div>
            <p class="card_text"><?php the_field('our_mission_text'); ?></p>
            <div class="btn btn-secondary">Learn More</div>
          </div>
        </a>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <a href="<?php $url = site_url( '/about/our-team/' ); echo $url;?>" class="card_link">
          <div class="card_wrapper">
            <div class="card_image_wrapper">
              <?php
                $image = get_field('our_team_picture');
                if( !empty($image) ): ?>
                	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
            </div>
            <h3>Our Team</h3>
            <div class="line-decoration"></div>
            <p class="card_text"><?php the_field('our_team_text'); ?></p>
            <div class="btn btn-secondary" href="#" role="button">Learn More</div>
          </div>
        </a>
      </div><!-- /.col-lg-4 -->

    </div>
  </div>
</div>
