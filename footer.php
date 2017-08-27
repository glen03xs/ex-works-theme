<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ex-works
 */

?>

	</div><!-- #content -->

</div><!-- #page -->

	<footer>
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<?php get_sidebar('footer-1'); ?>

					<div class="col-md-4 col-sm-6">
						<?php get_sidebar('footer-2'); ?>
					</div> <!--end col-md-4-->
					<div class="col-md-4 col-sm-6">
						<?php get_sidebar('footer-3'); ?>
					</div> <!--end col-md-6-->
				</div> <!--end row-->
			</div> <!--end container-->
		</div> <!--end footer-top-->
		<div class="footer-bottom text-center">
			<div class="container">
				<p>&copy; Copyright <?php print date( 'Y' ) ?> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >Ex-works Cargo Services</a></p?
			</div> <!--end -->
		</div> <!--end footer-bottom-->
	</footer>



<?php wp_footer(); ?>

</body>
</html>
