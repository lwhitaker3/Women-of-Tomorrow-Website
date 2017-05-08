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

<div class="background">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/page', 'header'); ?>
    <?php endwhile; ?>
  </div>
  <div class="container our_offices">
    <div class="row card-row">


      <?php while( have_rows('location_contact_information', 'option') ): the_row();
        $image = get_sub_field('image');
        $location = get_sub_field('location');
        $address = get_sub_field('address');
        $phone = get_sub_field('phone');
        $email = get_sub_field('email');
        $map = get_sub_field('map_shortcode');

      ?>


      <div class="col-lg-4">
        <div class="display-card">
          <div class="image-wrapper">
            <?php echo do_shortcode($map); ?>
          </div>
          <?php if( $location ): ?>
            <h3><?php echo $location; ?></h3>
          <?php endif; ?>
          <div class="line-decoration"></div>
          <?php if( $address ): ?>
            <p class="contact-info"><i class="fa fa-map-marker"></i> <?php echo $address ?></p>
          <?php endif; ?>
          <?php if( $phone ): ?>
            <p class="contact-info"><i class="fa fa-phone"></i> <?php echo $phone ?></p>
          <?php endif; ?>
          <?php if( $email ): ?>
            <p class="contact-info"><i class="fa fa-envelope"></i><a href="mailto:<?php echo $email ?>"> <?php echo $email ?></a></p>
          <?php endif; ?>
        </div>
      </div>
    <?php endwhile; ?>
    </div>
  </div>
</div>


<div class="container connect_section container_spacing">
  <div class="row">
    <div class="col-lg-12">
      <h2 class="centered">Connect With Us</h2>
      <div class="heading-underline line-decoration"></div>
    </div>
  </div>
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
