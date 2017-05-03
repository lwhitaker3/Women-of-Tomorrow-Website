<?php
/**
 * Template Name: Our Mission
 */
?>


<?php get_template_part('templates/page', 'intro'); ?>

<div class="container">
  <div class="row page_intro_text">
    <div class="col-lg-10 offset-lg-1" >
      <p><?php the_field('mission_intro_text'); ?></p>
    </div>
  </div>
</div>

<div class="counter-section">
  <div class="container">
    <div class="row counter">
      <div class="number-box col-lg-4">
        <p class="number" id="number1count" data-counter-number="<?php the_field('counter_number_1_mission'); ?>"></p>
        <p><?php the_field('counter_number_1_text_mission'); ?></p>
      </div>
      <div class="number-box col-lg-4">
        <p class="number" id="number2count" data-counter-number="<?php the_field('counter_number_2_mission'); ?>"></p>
        <p><?php the_field('counter_number_2_text_mission'); ?></p>
      </div>
      <div class="number-box col-lg-4">
        <p class="number" id="number3count" data-counter-number="<?php the_field('counter_number_3_mission'); ?>"></p>
        <p><?php the_field('counter_number_3_text_mission'); ?></p>
      </div>
    </div>
  </div>
</div>

<?php
$fullWidthImage = get_field('mission_full_width_image');
if( !empty($fullWidthImage) ): ?>
  <div class="full-width-image" data-parallax="scroll" data-image-src="<?php echo $fullWidthImage['url']; ?>"></div>
<?php endif; ?>

<div class="container results_wrapper">
  <div class="row">
    <div class="col-lg-12">
      <div class="line-container"><h2>Mentee Benefits</h2></div>
    </div>
    <div class="middle">
      <div class="col-lg-6">
        <a id="videoLink" href="#0" class="video-hp" data-toggle="modal" data-target="#introVideo">
          <?php
          $videoThumbnail = get_field('mission_video_thumbnail');
          if( !empty($videoThumbnail) ): ?>
          <div class="video-thumbnail"><img src="<?php echo $videoThumbnail['url']; ?>" alt="<?php echo $videoThumbnail['alt']; ?>" /></div>
          <?php endif; ?>
        </a>
        <div class="modal fade" id="introVideo" tabindex="-1" role="dialog" aria-labelledby="introductionVideo" aria-hidden="true" data-video-link="<?php the_field('mission_video'); ?>">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item allowfullscreen"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <?php if( have_rows('mentee_benefits') ): ?>

        	<div class="results">

        	<?php while( have_rows('mentee_benefits') ): the_row();

        		// vars
        		$title = get_sub_field('title');
        		$description = get_sub_field('benefit_information');

        	?>

        		<div class="result">
              <div class="result-icon"><i class="fa fa-check-square-o" aria-hidden="true"></i></div>
              <p class="result_title"><?php echo $title; ?></p>
              <p class="result_description"><?php echo $description; ?></p>

        		</div>

        	<?php endwhile; ?>

        </div>

        <?php endif; ?>

      </div>
    </div>
  </div>
</div>

<?php if( have_rows('testimonial') ): ?>
<div class="testimonial-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2><div class="line-container"><h2>What People are Saying</h2></div>
      </div>
      <div class="col-md-8 offset-md-2">
          <div class="slider-for testimonial-quotes-wrapper">

            <?php while( have_rows('testimonial') ): the_row();
              // vars
              $quote = get_sub_field('quote');
            ?>
            <div><div class="quotation-mark-left"><i class="fa fa-quote-left" aria-hidden="true"></i></div><p><?php echo $quote; ?></p><div class="quotation-mark-right"><i class="fa fa-quote-right" aria-hidden="true"></i></div></div>
            <?php endwhile; ?>
          </div>
      </div>
      <div class="col-sm-12">
        <div class="slider slider-nav testimonial-people-wrapper">
          <?php while( have_rows('testimonial') ): the_row();
            // vars
            $name = get_sub_field('name');
            $position = get_sub_field('position');
          ?>
            <div class="slider-nav-item-wrapper">
              <p class="testimonial-name"><?php echo $name; ?></p>
              <p class="testimonial-position"><?php echo $position; ?></p>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
