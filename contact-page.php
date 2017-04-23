<?php
/**
 * Template Name: Contact
 */
?>

<?php
$address = get_field('wot_headquarters_address', 'option');
$phone = get_field('wot_phone_number', 'option');
$email = get_field('wot_email_address', 'option');

$facebook = get_field('wot_facebook_link', 'option');
$twitter = get_field('wot_twitter_link', 'option');
$youtube = get_field('wot_youtube_link', 'option');
$linkedin = get_field('wot_linkedin_link', 'option');
$instagram = get_field('wot_instagram_link', 'option');
?>


<?php get_template_part('templates/page', 'intro'); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="row">
        <div class="col-sm-1">
          <i class="fa fa-map-marker"></i>
        </div>
        <div class="col-sm-11">
          <p> <?php echo $address ?></p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-1">
          <i class="fa fa-envelope"></i>
        </div>
        <div class="col-sm-11">
          <p><a href="mailto:<?php echo $email ?>"> <?php echo $email ?></a></p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-1">
          <i class="fa fa-phone"></i>
        </div>
        <div class="col-sm-11">
          <p> <?php echo $phone ?></p>
        </div>
      </div>

    </div>
    <div class="col-lg-6">
      <?php echo do_shortcode(get_field('map_short_code')); ?>
    </div>
  </div>
</div>

<?php if( have_rows('location_contact_information', 'option') ): ?>
  <div class="container our_offices">
    <h2>Our Offices</h2>
    <div class="row">


      <?php while( have_rows('location_contact_information', 'option') ): the_row();
        $image = get_sub_field('image');
        $location = get_sub_field('location');
        $address = get_sub_field('address');
        $phone = get_sub_field('phone');
        $email = get_sub_field('email');

      ?>

    <div class="col-lg-4">
      <div class="contact_card_wrapper">
        <div class="contact_card_image_wrapper">
          <?php if($image): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>
          <?php if( $location ): ?>
            <h2><?php echo $location; ?></h2>
          <?php endif; ?>
          <?php if( $address ): ?>
            <p><i class="fa fa-map-marker"></i> <?php echo $address ?></p>
          <?php endif; ?>
          <?php if( $phone ): ?>
            <p><i class="fa fa-phone"></i> <?php echo $phone ?></p>
          <?php endif; ?>
          <?php if( $email ): ?>
            <p><i class="fa fa-envelope"></i><a href="mailto:<?php echo $email ?>"> <?php echo $email ?></a></p>
          <?php endif; ?>
      </div>

    </div>
    <?php endwhile; ?>
  </div>
</div>
<?php endif; ?>


<div class="container connect_section">
  <h2>Connect With Us</h2>
  <div class="row">
    <div class="col-sm-12">

      <div class="icons">
        <?php if ($facebook): ?>
          <a href="<?php echo $facebook ?>"><i class="fa fa-facebook"></i></a>
        <?php endif; ?>
        <?php if ($twitter): ?>
          <a href="<?php echo $twitter ?>"><i class="fa fa-twitter"></i></a>
        <?php endif; ?>
        <?php if ($instagram): ?>
          <a href="<?php echo $instagram ?>"><i class="fa fa-instagram"></i></a>
        <?php endif; ?>
        <?php if ($youtube): ?>
          <a href="<?php echo $youtube ?>"><i class="fa fa-youtube"></i></a>
        <?php endif; ?>
        <?php if ($linkedin): ?>
          <a href="<?php echo $linkedin ?>"><i class="fa fa-linkedin"></i></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
