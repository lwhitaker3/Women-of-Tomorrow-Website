<?php
/**
 * Template Name: Mentors Page
 */
?>

<?php get_template_part('templates/page', 'intro'); ?>


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
if( $repeater ): ?>

<div class="container">
  <div class="row">

	<?php foreach( $repeater as $i => $mentor ): ?>

    <?php if( $mentor['mentor_photo']): ?>
    <div class="col-lg-3 col-md-4">
      <div class="mentor_card">
        <div class="mentor_card_image_wrapper">
          <img src="<?php echo $mentor['mentor_photo']['url']; ?>" alt="<?php echo $mentor['mentor_photo']['alt'] ?>" />
        </div>
        <?php if( $mentor['mentor_name'] ): ?>
          <h3><?php echo $mentor['mentor_name']; ?></h3>
        <?php endif; ?>

        <?php if( $mentor['mentor_company'] ): ?>
          <p><?php echo $mentor['mentor_company']; ?></p>
        <?php endif; ?>

        <?php if( $mentor['mentor_position'] ): ?>
          <p><?php echo $mentor['mentor_position']; ?></p>
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

  <div class="row">
    <h4>Not Pictured</h4>

	<?php foreach( $repeater as $i => $mentor ): ?>

    <?php if( !$mentor['mentor_photo']): ?>
    <div class="col-lg-3 col-md-4">
      <div class="mentor_card">
        <div class="mentor_card_image_wrapper">
          <img src="<?php echo $mentor['mentor_photo']['url']; ?>" alt="<?php echo $mentor['mentor_photo']['alt'] ?>" />
        </div>
        <?php if( $mentor['mentor_name'] ): ?>
          <h3><?php echo $mentor['mentor_name']; ?></h3>
        <?php endif; ?>

        <?php if( $mentor['mentor_company'] ): ?>
          <p><?php echo $mentor['mentor_company']; ?></p>
        <?php endif; ?>

        <?php if( $mentor['mentor_position'] ): ?>
          <p><?php echo $mentor['mentor_position']; ?></p>
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
