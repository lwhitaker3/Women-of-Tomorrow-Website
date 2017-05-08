<?php
/**
 * Template Name: Front Page
 */
?>
<?php while (have_posts()) : the_post(); ?>
<?php endwhile; ?>

<?php

// check if the repeater field has rows of data
if( have_rows('home_carousel') ):?>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
    <div class="carousel-inner" role="listbox">
      <div class="carousel-overlay"></div>
 	    <?php while ( have_rows('home_carousel') ) : the_row();?>
        <?php $image = get_sub_field('image'); ?>
        <?php if($i==0): ?>
          <!-- // display a sub field value -->
          <div class="carousel-item active" style="background-image: url('<?php echo $image['url']; ?>')">
          </div>

          <?php $i++ ?>

        <?php else:?>
          <div class="carousel-item" style="background-image: url('<?php echo $image['url']; ?>')">
          </div>

        <?php endif?>


      <?php endwhile; ?>

      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-caption d-none d-md-block">
        <div class="caption-wrapper">
          <p>Women of Tomorrow</p>
          <h3><?php the_field('carousel_text_header'); ?></h3>
          <p><?php the_field('carousel_text'); ?></p>
        </div>
      </div>
    </div>
</div>

<?php else :?>

    // no rows found

<?php endif; ?>

<?php
  do_action('get_header');
  get_template_part('templates/header');
?>




<div class="container container_spacing">
  <div class="row page_intro_text">
    <div class="col-lg-10 offset-lg-1" >
      <p><?php the_field('who_we_are_text'); ?></p>
    </div>
  </div>
</div>

<div class="background">
  <div class="container container_spacing">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="centered">What Makes Us Unique</h2>
        <div class="heading-underline line-decoration"></div>
      </div>
    </div>

    <div class="row card-row">
      <div class="col-lg-4">
        <div class="display-card">
          <div class="image-wrapper">
            <?php  $uniquePhoto1 = get_field('what_makes_us_unique_photo_1');
            if( !empty($uniquePhoto1) ): ?>
            	<img src="<?php echo $uniquePhoto1['url']; ?>" alt="<?php echo $uniquePhoto1['alt']; ?>" />
            <?php endif; ?>
          </div>
          <h3><?php the_field('what_makes_us_unique_heading_1'); ?></h3>
          <div class="line-decoration"></div>
          <p class="card_text"><?php the_field('what_makes_us_unique_text_1'); ?></p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="display-card">
          <div class="image-wrapper">
            <?php  $uniquePhoto2 = get_field('what_makes_us_unique_photo_2');
            if( !empty($uniquePhoto2) ): ?>
              <img src="<?php echo $uniquePhoto2['url']; ?>" alt="<?php echo $uniquePhoto2['alt']; ?>" />
            <?php endif; ?>
          </div>
          <h3><?php the_field('what_makes_us_unique_heading_2'); ?></h3>
          <div class="line-decoration"></div>
          <p class="card_text"><?php the_field('what_makes_us_unique_text_2'); ?></p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="display-card">
          <div class="image-wrapper">
            <?php  $uniquePhoto3 = get_field('what_makes_us_unique_photo_3');
            if( !empty($uniquePhoto3) ): ?>
              <img src="<?php echo $uniquePhoto3['url']; ?>" alt="<?php echo $uniquePhoto3['alt']; ?>" />
            <?php endif; ?>
          </div>
          <h3><?php the_field('what_makes_us_unique_heading_3'); ?></h3>
          <div class="line-decoration"></div>
          <p class="card_text"><?php the_field('what_makes_us_unique_text_3'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="counter-section">
  <div class="container">
    <div class="row counter">
      <div class="number-box col-lg-4">
        <p class="number" id="number1count" data-counter-number="<?php the_field('counter_number_1'); ?>">0</p>
        <p><?php the_field('counter_number_1_text'); ?></p>
      </div>
      <div class="number-box col-lg-4">
        <p class="number" id="number2count" data-counter-number="<?php the_field('counter_number_2'); ?>">0</p>
        <p><?php the_field('counter_number_2_text'); ?></p>
      </div>
      <div class="number-box col-lg-4">
        <p class="number" id="number3count" data-counter-number="<?php the_field('counter_number_3'); ?>">0</p>
        <p><?php the_field('counter_number_3_text'); ?></p>
      </div>
    </div>
  </div>
</div>


<?php
$fullWidthImage = get_field('home_page_full_width_photo');
if( !empty($fullWidthImage) ): ?>
  <div class="full-width-image" data-parallax="scroll" data-image-src="<?php echo $fullWidthImage['url']; ?>"></div>
<?php endif; ?>

<div id="instafeed"></div>


<div class="container results_wrapper container_spacing">
  <div class="row">
    <div class="col-lg-12">
      <h2 class="centered">Our Program's Impact</h2>
      <div class="heading-underline line-decoration"></div>
    </div>
    <div class="middle">
      <div class="col-lg-6">
        <a id="videoLink" href="#0" class="video-hp" data-toggle="modal" data-target="#introVideo">
          <?php
          $videoThumbnail = get_field('video_thumbnail');
          if( !empty($videoThumbnail) ): ?>
          <div class="video-thumbnail"><img src="<?php echo $videoThumbnail['url']; ?>" alt="<?php echo $videoThumbnail['alt']; ?>" /></div>
          <?php endif; ?>
        </a>
        <div class="modal fade" id="introVideo" tabindex="-1" role="dialog" aria-labelledby="introductionVideo" aria-hidden="true" data-video-link="<?php the_field('homepage_video'); ?>">
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
        <?php if( have_rows('results') ): ?>

        	<div class="results">

        	<?php while( have_rows('results') ): the_row();

        		// vars
        		$title = get_sub_field('title');
        		$description = get_sub_field('result_information');

        	?>

        		<div class="result">
              <div class="result-icon"><i class="ti-check-box" aria-hidden="true"></i></div>
              <h3 class="result_title"><?php echo $title; ?></h3>
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
      <div class="col-md-8 offset-md-2">
          <div class="slider-for testimonial-quotes-wrapper">

            <?php while( have_rows('testimonial') ): the_row();
              // vars
              $quote = get_sub_field('quote');
            ?>
            <div><div class="quotation-mark-left"><i class="icon-quotes-left" aria-hidden="true"></i></div><p><?php echo $quote; ?></p><div class="quotation-mark-right"><i class="icon-quotes-right" aria-hidden="true"></i></div></div>
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

<?php

$sponsors = get_field('sponsors');

if( $sponsors ): ?>
<div class="sponsors-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="sponsors-slider">
          <?php foreach( $sponsors as $sponsor ): ?>
              <div><img src="<?php echo $sponsor['url']; ?>" alt="<?php echo $sponsor['alt']; ?>" /></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
