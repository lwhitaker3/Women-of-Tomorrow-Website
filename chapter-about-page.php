<?php
/**
 * Template Name: Chapter About Page
 */
?>

<?php get_template_part('templates/page', 'intro'); ?>

<div class="container">
  <div class="row about_cards">

    <div class="col-lg-4">
      <div class="about_card_wrapper">
        <div class="about_card_image_wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png">

        </div>
        <h3>Schools</h3>
        <p><?php the_field('our_story_text'); ?></p>
        <p><a class="btn btn-secondary" href="#" role="button">Learn More</a></p>
      </div>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4">
      <div class="about_card_wrapper">
        <div class="about_card_image_wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png">
        </div>
        <h3>Team</h3>
        <p><?php the_field('our_mission_text'); ?></p>
        <p><a class="btn btn-secondary" href="#" role="button">Learn More</a></p>
      </div>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4">
      <div class="about_card_wrapper">
        <div class="about_card_image_wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png">
        </div>
        <h3>Sponsors</h3>
        <p><?php the_field('our_team_text'); ?></p>
        <p><a class="btn btn-secondary" href="#" role="button">Learn More</a></p>
      </div>
    </div><!-- /.col-lg-4 -->

  </div>
</div>
