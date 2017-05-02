<?php
/**
 * Template Name: About Page
 */
?>


<?php get_template_part('templates/page', 'intro'); ?>

<div class="container">
  <div class="row cards_row">

    <div class="col-lg-4">
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
        <p><?php the_field('our_story_text'); ?></p>
        <p><a class="btn btn-secondary" href="#" role="button">Learn More</a></p>
      </div>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4">
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
        <p><?php the_field('our_mission_text'); ?></p>
        <p><a class="btn btn-secondary" href="#" role="button">Learn More</a></p>
      </div>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4">
      <div class="card_wrapper">
        <div class="card_image_wrapper">
          <?php
            $image = get_field('our_mission_picture');
            if( !empty($image) ): ?>
            	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>
        <h3>Our Team</h3>
        <div class="line-decoration"></div>
        <p><?php the_field('our_team_text'); ?></p>
        <p><a class="btn btn-secondary" href="#" role="button">Learn More</a></p>
      </div>
    </div><!-- /.col-lg-4 -->

  </div>
</div>
