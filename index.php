<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ex-works
 */

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

<div class="blog-page">		
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div id="primary" class="post-list">
					<div class="post-item">
						<main id="main" class="site-main">

						<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile; ?>

							<?php else : 

								get_template_part( 'template-parts/content', 'none' );

							endif; ?>
					
						</main><!-- #main -->
					</div> <!--end post-item-->
				</div><!-- #primary -->
				<?php ex_works_numbered_pagination() ?>
			</div> <!-- end col-md-8 -->
			<div class="col-lg-4">
					<?php get_sidebar(); ?>
			</div> <!-- end col-lg-4 -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</div> <!--end blog-page--> 
<?php
get_footer();
