<?php while (have_posts()) : the_post(); ?>
  <header class="banner">

    <nav class="navbar fixed-top navbar-toggleable-md navbar-light bg-faded main-navbar" id="primary_navigation">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <div id="nav-icon">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>
      <?php
        $image = get_field('logo', 'option');
        if( !empty($image) ): ?>
        	<a href= "<?php echo get_home_url(); ?>" class="brand"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
        <?php else: ?>
          <a href= "<?php echo get_home_url(); ?>" class="brand"><?php bloginfo("name")?></a>
      <?php endif; ?>
      <div class="collapse navbar-collapse menu-right" id="navbarNavAltMarkup">
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
  <div class="breadcrumbs-wrapper no-banner">
    <div class="container">
      <div class="breadcrumbs">
        <?php custom_breadcrumbs(); ?>
      </div>
    </div>
  </div>

  <div class="background">
    <div class="container">
        <?php get_template_part('templates/page', 'header'); ?>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <?php get_template_part('templates/content', 'page'); ?>

        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>
