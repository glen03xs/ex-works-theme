<?php
	/*Template Name: Blog Main*/ 
?>

<?php
get_header(); ?>
   <!--PAGE TITLE AND BREADCRUMBS-->
	<section>
		<div class="page-header">
			<div class="container">     
				<div class="page-title">
					<h2>Ex-works Blog</h2>
					<div class="red-accent"></div> <!--Red Accent -->
					<ul class="breadcrumbs">
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
						<li><a>Blog</a></li>
					</ul> <!--end breadcrumbs-->
				</div> <!--end page-title-->
			</div> <!--end container-->
		</div> <!--end pages-header-->
	</section>
<div class="container">
<div class="row">
	<div class="col-md-8 col-xs-12">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else : 

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
</div> <!-- end row -->
</div> <!-- end container -->
<?php
get_sidebar();
get_footer();
