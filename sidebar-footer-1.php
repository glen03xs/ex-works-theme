<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ex-works
 */

if ( ! is_active_sidebar( 'footer-1' ) ) {
	return;
}
?>

<div class="col-md-4 col-sm-12">
	<div id="footer-widgets" class=".footer-widgets widget-1">
		<?php dynamic_sidebar('footer-1'); ?>
	</div> <!--footer-widgets--> 
	
</div> <!--end col-md-3-->

