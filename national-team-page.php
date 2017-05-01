<?php
/**
 * Template Name: National Team
 */
?>


<?php get_template_part('templates/page', 'intro'); ?>


<?php if( have_rows('board_member_info') ): ?>

<div class="container">

  <div class="row board_cards">
    <div class="col-lg-12">
      <h2>National Board</h2>
    </div>

	<?php while( have_rows('board_member_info') ): the_row();

		// vars
		$image = get_sub_field('photo');
		$name = get_sub_field('name');
		$position = get_sub_field('position');

		?>

		<div class="col-lg-4">
      <div class="board_card_wrapper">
        <div class="board_card_image_wrapper">
    			<?php if( $image ): ?>
    				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
          <?php endif; ?>
        </div>
    			<?php if( $name ): ?>
            <h3><?php echo $name; ?></h3>
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
<div class="container nat_team_cards">

  <div class="row">
    <div class="col-lg-12">
      <h2>National Staff</h2>
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
  		    <div class="col-md-4">
            <div class="nat_team_card_image_wrapper">
      			     <?php if( $image ): ?>
      				    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-8">
      			<?php if( $name ): ?>
              <h3><?php echo $name; ?></h3>
      			<?php endif; ?>
            <?php if( $position ): ?>
              <p><?php echo $position; ?></p>
            <?php endif; ?>
            <?php if( $bio ): ?>
              <p><?php echo $bio; ?></p>
            <?php endif; ?>
          </div>
      </div>
	<?php endwhile; ?>



<?php endif; ?>

</div>
