<?php
  do_action('get_header');
  get_template_part('templates/header-chapter');
?>

<div class="header-image-wrapper">
  <?php $image = get_field('page_hero_image');
  if( !empty($image) ): ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  <?php endif; ?>
  <div class="header-overlay"></div>
</div>

<div class="breadcrumbs-wrapper">
  <div class="container">
    <div class="breadcrumbs">
      <?php custom_breadcrumbs(); ?>
    </div>
  </div>
</div>
