<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ex-works
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post'); ?>>
	<div class="post-content">
		<div class="post-head">
			<?php get_template_part( 'template-parts/meta-date');?>
			<div class="post-title">
			<?php
				if ( is_singular() ) :
					the_title( '<h2 class="entry-title">', '</h2>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
				
				<?php ex_works_posted_by() ?>
			</div> <!--end post-title-->
		</div> <!--end post-head-->
		<div class="post-img">
			<?php echo the_post_thumbnail('single-thumb'); ?>
		</div> <!--end post-img-->
		<div class="post-article">
			<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ex-works' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ex-works' ),
					'after'  => '</div>',
				) );
			?>
		</div><!--end post-article-->
		



		<div class="post-footer">
			<?php get_template_part( 'template-parts/post-sharing');?>
			<div class="author-thumb">
				<a href="#">
					<img src="" alt="">
				</a>
			</div><!--end author-thumb-->
			<div class="author-info">
				
			</div> <!--end author-info-->

		</div><!--end post-footer-->
	</div> <!--end post-content-->
</article> <!--single-post-->







