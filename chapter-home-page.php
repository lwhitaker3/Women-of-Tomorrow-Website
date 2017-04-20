<?php
/**
 * Template Name: Chapter Home Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>



<?php
// Set up the objects needed
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => '-1'));

// Get the page as an Object
$chapter_home =  get_page_by_title('South Florida');


$args = array(
	'post_parent' => $chapter_home->ID,
	'post_type'   => 'any',
	'numberposts' => -1,
	'post_status' => 'any'
);
$pages = get_children( $args );
echo '<pre>' . print_r( $pages, true ) . '</pre>';
foreach ( $pages as $page ) {
  $option = $page->post_title;
  $link = get_post_permalink($page->ID);
  echo $link;
  echo $option;
}
?>

<select name="page-dropdown"
 onchange='document.location.href=this.options[this.selectedIndex].value;'>
 <option value="">
<?php echo esc_attr( __( 'Select page' ) ); ?></option>
 <?php
  $pages = get_pages();
  foreach ( $pages as $page ) {
  	$option = '<option value="' . get_page_link( $page->ID ) . '">';
	$option .= $page->post_title;
	$option .= '</option>';
	echo $option;
  }
 ?>
</select>
