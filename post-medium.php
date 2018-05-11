<article <?php post_class(); ?>>

<a href="<?php the_permalink(); ?>">

<?php if ( has_post_thumbnail() ): ?>
    <?php the_post_thumbnail( 'thumbnail' ); ?>
<?php else: ?>
    <?php preg_match( '/wp-image-(\d+)/s', $post->post_content, $thumb ); ?>
    <?php if ($thumb): ?>
        <?php echo wp_get_attachment_image( $thumb[1], 'thumbnail' ); ?>
    <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/thumb.jpg" alt=""> 
    <?php endif; ?>
<?php endif; ?>

<h1><?php the_title(); ?></h1>

<div class="postinfo">
<time datetime="<?php echo get_the_date( 'c' ); ?>">
<?php echo get_the_date(); ?>
</time>
</div>

<?php the_excerpt(); ?>

</a>
</article>