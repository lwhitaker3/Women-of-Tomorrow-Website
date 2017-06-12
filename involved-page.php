<?php
/**
 * Template Name: Get Involved
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

    <div class="row cards_row padding-bottom-0">
      <div class="col-lg-12">
        <a href="#" class="card_link">
          <div class="card_wrapper">
            <div class="card_image_wrapper">
              <?php
                $image1 = get_field('donate_image');
                if( !empty($image1) ): ?>
                  <img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
              <?php endif; ?>
            </div>
            <h3>Donate</h3>
            <div class="line-decoration"></div>
            <p class="card_text"><?php the_field('donate_text'); ?></p>
            <div class="btn btn-secondary">Donate Now</div>
          </div>
        </a>
      </div><!-- /.col-lg-4 -->
    </div>

    <div class="row card-row">
      <div class="col-lg-6">
        <div class="display-card">
          <div class="image-wrapper">
            <?php  $image2 = get_field('sponsor_event_image');
            if( !empty($image2) ): ?>
            	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
            <?php endif; ?>
          </div>
          <h3>Sponsor an Event</h3>
          <div class="line-decoration"></div>
          <p class="card_text"><?php the_field('sponsor_event_text'); ?></p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="display-card">
          <div class="image-wrapper">
            <?php  $image3 = get_field('sponsor_field_trip_image');
            if( !empty($image3) ): ?>
              <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
            <?php endif; ?>
          </div>
          <h3>Sponsor a Field Trip</h3>
          <div class="line-decoration"></div>
          <p class="card_text"><?php the_field('sponsor_field_trip_text'); ?></p>
        </div>
      </div>
    </div>

    <div class="row card-row">
      <div class="col-lg-6">
        <div class="display-card">
          <div class="image-wrapper">
            <?php  $image2 = get_field('sponsor_event_image');
            if( !empty($image2) ): ?>
            	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
            <?php endif; ?>
          </div>
          <h3>Sponsor an Event</h3>
          <div class="line-decoration"></div>
          <p class="card_text"><?php the_field('sponsor_event_text'); ?></p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="display-card">
          <div class="image-wrapper">
            <?php  $image3 = get_field('sponsor_field_trip_image');
            if( !empty($image3) ): ?>
              <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
            <?php endif; ?>
          </div>
          <h3>Sponsor a Field Trip</h3>
          <div class="line-decoration"></div>
          <p class="card_text"><?php the_field('sponsor_field_trip_text'); ?></p>
        </div>
      </div>
    </div>

  </div>

</div>
