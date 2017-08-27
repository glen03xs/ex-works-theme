<?php
 /*
  *  template file
  */
?>

<div class="admin-info-box">
    <div class="img-box">
        <?php
        $author_bio_avatar_size = apply_filters('tt_temptt_author_bio_avatar_size', 114);
        echo get_avatar(get_the_author_meta('user_email'), $author_bio_avatar_size);
        ?>
    </div>
    <div class="text-box">
        <h3><?php echo get_the_author(); ?></h3>

        <p> <?php the_author_meta('description'); ?></p>
		<p><a class="author-link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author"><?php printf( esc_html__( 'View all posts by %s', 'logiscargo' ), get_the_author() ); ?></a></p>
    </div>
</div>
