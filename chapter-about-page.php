<?php
/**
 * Template Name: Chapter About
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
        <a class="card_link" href="<?php the_field('school_link'); ?>">
          <div class="card_wrapper">
            <div class="card_image_wrapper">
              <?php
              $school_image = get_field('school_image');
              if( !empty($school_image) ): ?>
              	<img src="<?php echo $school_image['url']; ?>" alt="<?php echo $school_image['alt']; ?>" />
              <?php endif; ?>
            </div>
            <h3 class="margin-bottom-50">Schools</h3>
            <div class="btn btn-secondary">Learn More</div>
          </div>
        </a>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <a class="card_link" href="<?php the_field('team_link'); ?>">
          <div class="card_wrapper">
            <div class="card_image_wrapper">
              <?php
              $team_image = get_field('team_image');
              if( !empty($team_image) ): ?>
              	<img src="<?php echo $team_image['url']; ?>" alt="<?php echo $team_image['alt']; ?>" />
              <?php endif; ?>
            </div>
            <h3 class="margin-bottom-50">Team</h3>
            <div class="btn btn-secondary">Learn More</div>
          </div>
        </a>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <a class="card_link" href="<?php the_field('sponsors_link'); ?>">
          <div class="card_wrapper">
            <div class="card_image_wrapper">
              <?php
              $sponsors_image = get_field('sponsors_image');
              if( !empty($sponsors_image) ): ?>
              	<img src="<?php echo $sponsors_image['url']; ?>" alt="<?php echo $sponsors_image['alt']; ?>" />
              <?php endif; ?>
            </div>
            <h3 class="margin-bottom-50">Sponsors</h3>
            <div class="btn btn-secondary">Learn More</div>
          </div>
        </a>
      </div><!-- /.col-lg-4 -->



    </div>
  </div>
</div>
