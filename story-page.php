<?php
/**
 * Template Name: Our Story
 */
?>


<?php get_template_part('templates/page', 'intro'); ?>



<div class="container">

  <div class="row intro-story">
    <div class="col-md-6 story-image-wrapper">
      <?php
        $intro_image = get_field('intro_image_story');

        if( !empty($intro_image) ): ?>

        	<img src="<?php echo $intro_image['url']; ?>" alt="<?php echo $intro_image['alt']; ?>" />

        <?php endif; ?>
    </div>
    <div class="col-md-6">
      <p><?php the_field('who_we_are_text'); ?></p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="line-container"><h2>Our History</h2></div>
    </div>
  </div>

  <div class="row history-info">
    <div class="col-md-4 story-image-wrapper">
      <?php
        $history_image_1 = get_field('our_history_image_1');

        if( !empty($history_image_1) ): ?>

          <img src="<?php echo $history_image_1['url']; ?>" alt="<?php echo $history_image_1['alt']; ?>" />

        <?php endif; ?>
    </div>
    <div class="col-md-4 story-image-wrapper">
      <?php
        $history_image_2 = get_field('our_history_image_2');

        if( !empty($history_image_2) ): ?>

          <img src="<?php echo $history_image_2['url']; ?>" alt="<?php echo $history_image_2['alt']; ?>" />

        <?php endif; ?>
    </div>
    <div class="col-md-4 story-image-wrapper">
      <?php
        $history_image_3 = get_field('our_history_image_3');

        if( !empty($history_image_3) ): ?>

          <img src="<?php echo $history_image_3['url']; ?>" alt="<?php echo $history_image_3['alt']; ?>" />

        <?php endif; ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <p><?php the_field('our_history_text'); ?></p>
    </div>
  </div>
</div>

<?php if( have_rows('timeline') ): ?>

  <div class="timeline_wrapper">
    <div class="container">
      <section id="cd-timeline" class="cd-container">

      	<?php while( have_rows('timeline') ): the_row();
      		// vars
          $title = get_sub_field('event_title');
      		$date = get_sub_field('event_date');
      		$text = get_sub_field('event_text');
      		$event_image = get_sub_field('image');
      		?>

          <div class="cd-timeline-block">
      			<div class="cd-timeline-img">
              <img src="<?php echo $event_image['url']; ?>" alt="<?php echo $event_image['alt'] ?>" />
      			</div> <!-- cd-timeline-img -->

      			<div class="cd-timeline-content">
      				<h2><?php echo $title; ?></h2>
      				<p><?php echo $text; ?></p><span class="cd-date"><?php echo $date; ?></span>
      			</div> <!-- cd-timeline-content -->
      		</div> <!-- cd-timeline-block -->
	      <?php endwhile; ?>
      </section>
    </div>
  </div>

<?php endif; ?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="line-container"><h2>Our Founders</h2></div>
    </div>
  </div>

  <div class="row history-info">
    <div class="col-md-4 story-image-wrapper">
      <?php
        $founder_image_1 = get_field('founder_image_1');

        if( !empty($founder_image_1) ): ?>

          <img src="<?php echo $founder_image_1['url']; ?>" alt="<?php echo $founder_image_1['alt']; ?>" />

        <?php endif; ?>
    </div>
    <div class="col-md-4 story-image-wrapper">
      <?php
        $founder_image_2 = get_field('founder_image_2');

        if( !empty($founder_image_2) ): ?>

          <img src="<?php echo $founder_image_2['url']; ?>" alt="<?php echo $founder_image_2['alt']; ?>" />

        <?php endif; ?>
    </div>
    <div class="col-md-4 story-image-wrapper">
      <?php
        $founder_image_3 = get_field('founder_image_3');

        if( !empty($founder_image_3) ): ?>

          <img src="<?php echo $founder_image_3['url']; ?>" alt="<?php echo $founder_image_3['alt']; ?>" />

        <?php endif; ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <p><?php the_field('founder_text'); ?></p>
    </div>
  </div>
</div>
