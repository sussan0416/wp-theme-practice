<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ページタイトル</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>

<?php if(have_posts()):
while(have_posts()): the_post(); ?>

<article <?php post_class(); ?>>

<h1><?php the_title(); ?></h1>

<div class="postinfo">
<time datetime="<?php echo get_the_date( 'c' ); ?>">
<?php echo get_the_date(); ?>
</time>

<?php if( has_category() ): ?>
<span><i class="icon-folder-open"></i>
<?php the_category(', '); ?>
</span>
<?php endif; ?>

<?php the_tags(
    '<span><i class="icon-tag"></i>',
    ', ',
    '</span>'
); ?>
</div>

<?php the_content(); ?>

<div class="navlink">
<span class="navlink-prev">
<?php previous_post_link('%link', '<i class="icon-chevron-sign-left"></i> %title'); ?>
</span>

<span class="navlink-next">
<?php next_post_link('%link', '%title <i class="icon-chevron-sign-right"></i>'); ?>
</span>
</div>

<?php comments_template(); ?>

</article>
<?php endwhile; endif; ?>

<?php wp_footer(); ?>
</body>
</html>