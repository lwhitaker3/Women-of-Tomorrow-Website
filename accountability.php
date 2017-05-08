<?php
/**
 * Template Name: Accountability
 */
?>

<?php get_template_part('templates/page', 'intro'); ?>

<div class="background">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/page', 'header'); ?>
    <?php endwhile; ?>
  </div>
  <div class="container container_spacing_bottom">
    <div class="row">
      <div class="col-lg-12">

        <?php if( have_rows('forms') ): ?>

        	<ul class="accountability-list">

          	<?php while( have_rows('forms') ): the_row();

          		// vars
          		$title = get_sub_field('form_title');
          		$file = get_sub_field('file');
          		?>

          		<li>


                <?php
                  if( $file ): ?>
                    <a href="<?php echo $file['url']; ?>"><i class="icon-file-pdf" aria-hidden="true"></i><?php echo $title; ?></a>
                <?php endif; ?>

          		</li>

          	<?php endwhile; ?>

        	</ul>

        <?php endif; ?>

      </div>
    </div>
  </div>
</div>
