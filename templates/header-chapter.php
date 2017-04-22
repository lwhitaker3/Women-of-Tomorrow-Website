<?php
// vars
$location = get_field('chapter_location');
if( $location ): ?>

<header class="banner">

  <nav class="navbar navbar-light navbar-toggleable-md bg-faded">
    <!-- <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <?php
      $image = get_field('logo', 'option');
      if( !empty($image) ): ?>
      	<a href= "<?php echo get_home_url(); ?>" class="brand"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php else: ?>
        <a href= "<?php echo get_home_url(); ?>" class="brand"><?php bloginfo("name")?></a>
    <?php endif; ?>

      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav']);
        endif;
      ?>
        <a class="donate-button" href="<?php the_field('donate_button', 'option'); ?>">Donate Now</a>

  </nav>


  <nav class="navbar navbar-toggleable-md navbar-light bg-faded" id="primary_navigation">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="<?php esc_url( home_url( '/' )); ?>" class="brand"><?php echo $location ?></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
          <?php
          // Set up the objects needed
          $my_wp_query = new WP_Query();
          $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => '-1'));

          // Get the page as an Object
          $chapter_home =  get_page_by_title(get_field('chapter_location'));

          $args = array(
            'post_parent' => $chapter_home->ID,
            'post_type'   => 'any',
            'order'       => 'ASC',
            'orderby'     => 'title',
            'numberposts' => -1,
            'post_status' => 'any'
          );

          $pages = get_children( $args );
          foreach ( $pages as $page ) {
            $option = $page->post_title;
            $link = get_post_permalink($page->ID);
            $output = "<a class='nav-item nav-link' href='". $link . "'>" . $option . "</a>";
            echo $output;
          }
          ?>
      </div>
    </div>
  </nav>


</header>

<?php endif; ?>

<?php
// vars
$location = get_field('chapter_location');
if( ! $location ): ?>

<header class="banner">

  <nav class="navbar fixed-top navbar-toggleable-md navbar-light bg-faded" id="primary_navigation">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php
      $image = get_field('logo', 'option');
      if( !empty($image) ): ?>
      	<a href= "<?php echo get_home_url(); ?>" class="brand"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php else: ?>
        <a href= "<?php echo get_home_url(); ?>" class="brand"><?php bloginfo("name")?></a>
    <?php endif; ?>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav']);
        endif;
        ?>
      </div>
      <a class="donate-button" href="<?php the_field('donate_button', 'option'); ?>">Donate Now</a>

    </div>
  </nav>
</header>

<?php endif; ?>
