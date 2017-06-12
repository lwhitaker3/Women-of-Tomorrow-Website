<?php
/**
 * Template Name: Chapter Mentors
 */
?>

<?php $location = get_field('chapter_location');?>

<?php get_template_part('templates/page', 'intro'); ?>

<div class="background">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/page', 'header'); ?>
    <?php endwhile; ?>
  </div>

	<?php
		// get repeater field data
		$repeater = get_field('mentor');
		// vars
		$order = array();
		// populate order
		foreach( $repeater as $i => $mentor ) {
			$order[ $i ] = $mentor['mentor_name'];
		}
		// multisort
		array_multisort( $order, SORT_ASC, $repeater );
		// loop through repeater
		if( $repeater ):
	?>

	<div class="container">
	  <div class="row card-row">

		<?php foreach( $repeater as $i => $mentor ): ?>

	    <?php if( $mentor['mentor_photo']): ?>
				<div class="col-lg-3 col-md-4">
					<div class="display-card mentor">
						<div class="image-wrapper">
							<?php if( $mentor['mentor_photo']): ?>
								<img src="<?php echo $mentor['mentor_photo']['url']; ?>" alt="<?php echo $mentor['mentor_photo']['alt'] ?>" />
							<?php endif; ?>
						</div>
							<?php if( $name ): ?>
								<?php if( $mentor['mentor_name'] ): ?>
									<h3><?php echo $mentor['mentor_name']; ?></h3>
								<?php endif; ?>
								<div class="line-decoration"></div>
							<?php endif; ?>
							<?php if( $mentor['mentor_company'] ): ?>
			          <p><?php echo $mentor['mentor_company']; ?></p>
			        <?php endif; ?>
			        <?php if( $mentor['mentor_position'] ): ?>
			          <p class="position"><?php echo $mentor['mentor_position']; ?></p>
			        <?php endif; ?>
							<?php if( $mentor['mentor_linkedin'] ): ?>
								<a href="<?php echo $mentor['mentor_linkedin']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							<?php endif; ?>
							<?php if( $mentor['mentor_portfolio'] ): ?>
								<a href="<?php echo $mentor['mentor_portfolio']; ?>"><i class="fa fa-briefcase" aria-hidden="true"></i></a>
							<?php endif; ?>
							<?php if( $mentor['mentor_link'] ): ?>
								<a href="<?php echo $link; ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
							<?php endif; ?>
						</div>
					</div>

	  <?php endif; ?>

		<?php endforeach; ?>

	  </div>

		<div class="row card-row">

		<?php foreach( $repeater as $i => $mentor ): ?>

	    <?php if( !$mentor['mentor_photo']): ?>
				<div class="col-lg-3 col-md-4">
					<div class="display-card mentor">
							<?php if( $name ): ?>
								<?php if( $mentor['mentor_name'] ): ?>
									<h3><?php echo $mentor['mentor_name']; ?></h3>
								<?php endif; ?>
								<div class="line-decoration"></div>
							<?php endif; ?>
							<?php if( $mentor['mentor_company'] ): ?>
			          <p><?php echo $mentor['mentor_company']; ?></p>
			        <?php endif; ?>

			        <?php if( $mentor['mentor_position'] ): ?>
			          <p class="position"><?php echo $mentor['mentor_position']; ?></p>
			        <?php endif; ?>
							<?php if( $mentor['mentor_linkedin'] ): ?>
								<a href="<?php echo $mentor['mentor_linkedin']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							<?php endif; ?>
							<?php if( $mentor['mentor_portfolio'] ): ?>
								<a href="<?php echo $mentor['mentor_portfolio']; ?>"><i class="fa fa-briefcase" aria-hidden="true"></i></a>
							<?php endif; ?>
							<?php if( $mentor['mentor_link'] ): ?>
								<a href="<?php echo $link; ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
							<?php endif; ?>
						</div>
					</div>

	  <?php endif; ?>

		<?php endforeach; ?>

	  </div>

	</div>
	<?php endif; ?>


</div>
