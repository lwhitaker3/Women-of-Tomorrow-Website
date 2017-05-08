<?php
/**
 * Template Name: National Team
 */
?>


<?php get_template_part('templates/page', 'intro'); ?>

<?php if( have_rows('board_member_info') ): ?>

<div class="background">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/page', 'header'); ?>
    <?php endwhile; ?>
  </div>

  <div class="container container_spacing_bottom">
    <div class="row">
      <div class="col-lg-12 margin-bottom-50">
        <h3>National Board</h3>
      </div>
    </div>

    <div class="row card-row">


  	<?php while( have_rows('board_member_info') ): the_row();

  		// vars
  		$image = get_sub_field('photo');
  		$name = get_sub_field('name');
  		$position = get_sub_field('position');

  		?>

  		<div class="col-lg-4">
        <div class="display-card">
          <div class="image-wrapper">
      			<?php if( $image ): ?>
      				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            <?php endif; ?>
          </div>
      			<?php if( $name ): ?>
              <h3><?php echo $name; ?></h3>
              <div class="line-decoration"></div>
      			<?php endif; ?>
            <?php if( $position ): ?>
              <p><?php echo $position; ?></p>
            <?php endif; ?>
          </div>
        </div>
  	   <?php endwhile; ?>



     <?php endif; ?>
    </div>
  </div>


  <?php if( have_rows('team_members') ): ?>
  <div class="container container_spacing_bottom">

    <div class="row">
      <div class="col-lg-12">
        <h3 class="margin-bottom-50">National Staff</h3>
      </div>
    </div>

  	<?php while( have_rows('team_members') ): the_row();

  		// vars
  		$image = get_sub_field('photo');
  		$name = get_sub_field('name');
  		$position = get_sub_field('position');
      $bio = get_sub_field('bio');

  		?>
      <div class="row">
		    <div class="col-md-12">
          <div class="display-rows">
            <div class="image_wrapper">
      			     <?php if( $image ): ?>
      				    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
              <?php endif; ?>
            </div>
            <div class="text-content">
        			<?php if( $name ): ?>
                <h3><?php echo $name; ?></h3>
                <div class="line-decoration"></div>
        			<?php endif; ?>
              <?php if( $position ): ?>
                <p class="position"><?php echo $position; ?></p>
              <?php endif; ?>
              <?php if( $bio ): ?>
                <p><?php echo $bio; ?></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
  	<?php endwhile; ?>



  <?php endif; ?>

  </div>
</div>
