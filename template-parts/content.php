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
		<div class="post-img">
			<?php echo the_post_thumbnail('index-thumb'); ?>
		</div> <!--end post-img-->
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
		<div class="post-article">
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'ex_works' ); ?> <i class="fa fa-long-arrow-right"></i></a>
		</div><!--end post-article-->		
	</div> <!--end post-content-->
	<hr>
</article> <!--single-post-->







