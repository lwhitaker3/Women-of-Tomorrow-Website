<?php
  do_action('get_header');
  get_template_part('templates/header-chapter');
?>
<?php $hero_image = get_field('banner_image');
?>
<?php if ($hero_image):?>
  <div style="background-image: url('<?php echo $hero_image['url']; ?>')" class="header-image-wrapper">
    <div class="header-overlay"></div>
  </div>
<?php endif; ?>


<div class="breadcrumbs-wrapper">
  <div class="container">
    <div class="breadcrumbs">
      <?php custom_breadcrumbs(); ?>
    </div>
  </div>
</div>
