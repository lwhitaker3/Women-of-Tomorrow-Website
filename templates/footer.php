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

<footer class="content-info">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <h3>Women of Tomorrow</h3>

        <div>
          <p><i class="text_icon fa fa-phone"></i> <?php echo $phone ?></p>
        </div>

        <div>
          <p><i class="text_icon fa fa-envelope"></i><a href="mailto:<?php echo $email ?>"> <?php echo $email ?></a></p>
        </div>


      </div>
      <div class="col-lg-3">
        <h3>Links</h3>
        <?php if (has_nav_menu('footer_menu')) :
          wp_nav_menu(['theme_location' => 'footer_menu', 'menu_class' => 'footer-nav']);
        endif; ?>


      </div>
      <div class="col-lg-4">
        <h3>Join Us for a Better Tomorrow!</h3>
        <p>Sign up for our newsletter to recieve updates and stay involved</p>
        <a class="btn btn-primary" href="<?php the_field('newsletter_link', 'option'); ?>">Subscribe to Newsletter</a>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="social-icons">
          <?php if ($facebook): ?>
            <a href="<?php echo $facebook ?>"><i class="social fa fa-facebook"></i></a>
          <?php endif; ?>
          <?php if ($twitter): ?>
            <a href="<?php echo $twitter ?>"><i class="social fa fa-twitter"></i></a>
          <?php endif; ?>
          <?php if ($instagram): ?>
            <a href="<?php echo $instagram ?>"><i class="social fa fa-instagram"></i></a>
          <?php endif; ?>
          <?php if ($youtube): ?>
            <a href="<?php echo $youtube ?>"><i class="social fa fa-youtube"></i></a>
          <?php endif; ?>
          <?php if ($linkedin): ?>
            <a href="<?php echo $linkedin ?>"><i class="social fa fa-linkedin"></i></a>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="copyright">
          <p>© 2016 - Women of Tomorrow</p>
        </div>
      </div>
    </div>

  </div>
</footer>
