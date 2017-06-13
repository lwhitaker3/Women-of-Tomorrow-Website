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
        <a class="card_link" href="<?php the_field('donate_button', 'option'); ?>">
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

    <?php if( have_rows('ways_to_get_involved') ): ?>

	     <div class="row card-row cards_row">

	      <?php while( have_rows('ways_to_get_involved') ): the_row();

    		// vars
          $title = get_sub_field('title');
      		$image2 = get_sub_field('image');
      		$content = get_sub_field('info_about_getting_involved');
      		$link = get_sub_field('link');

    		?>

        <?php if( empty($link)): ?>


          <div class="col-lg-6">
            <div class="display-card">
              <div class="image-wrapper">
                <?php if( !empty($image2) ): ?>
                	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
                <?php endif; ?>
              </div>
              <h3><?php echo $title; ?></h3>
              <div class="line-decoration"></div>
              <p class="card_text"><?php echo $content; ?></p>
            </div>
          </div>

        <?php else: ?>

          <div class="col-lg-6">
            <?php if( $link ): ?>
              <a class="card_link" href="<?php echo $link; ?>">
                <?php endif; ?>
                <div class="card_wrapper">
                  <div class="card_image_wrapper">
                    <?php if($image2): ?>
                      	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
                    <?php endif; ?>
                  </div>
                  <h3><?php echo $title; ?></h3>
                  <div class="line-decoration"></div>
                  <p class="card_text"><?php echo $content; ?></p>
                  <div class="btn btn-secondary">Learn More</div>
                </div>
                <?php if( $link ): ?>
              </a>
            <?php endif; ?>
          </div>

        <?php endif; ?>


        <?php endwhile; ?>
        </div>
        <?php endif; ?>

  </div>

</div>
