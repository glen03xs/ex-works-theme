<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ex-works
 */

get_header(); ?>

	<!-- PAGE TITLE AND BREADCRUMBS -->
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


	<div class="blog-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="single-post">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'single', get_post_type() );

							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</div> <!--single-post-->
					<hr>
				</div><!--end col-lg-8-->
				<div class="col-lg-4">
				<?php get_sidebar(); ?>
				</div> <!-- end col-lg-4 -->
			</div> <!--end row-->
		</div> <!--end container-->
	</div> <!--end blog-page--> 



<?php

get_footer();
