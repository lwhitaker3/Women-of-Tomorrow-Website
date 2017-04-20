<header class="banner">

  <nav class="navbar fixed-top navbar-toggleable-md navbar-light bg-faded" id="primary_navigation">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      if ( has_custom_logo() ) {
        echo '<a href="'. esc_url( home_url( '/' )) .'" class="brand"> <img src="'. esc_url( $logo[0] ) .'"></a>';
      } else {
        echo '<a href="'. esc_url( home_url( '/' )) .'" class="brand">'. get_bloginfo("name") .'</a>';
      }
    ?>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav']);
        endif;
        ?>
        <a class="donate-button" href="<?php the_field('donate_button', 'option'); ?>">Donate Now</a>
      </div>
    </div>
  </nav>
</header>