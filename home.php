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

<section class="list">
<h1 class="list-title"><span>NEWS</span> お知らせ</h1>

<?php if(have_posts()):
while(have_posts()): the_post(); ?>

<article <?php post_class(); ?>>

<a href="<?php the_permalink(); ?>">

<h1><?php the_title(); ?></h1>

<div class="postinfo">
<time datetime="<?php echo get_the_date( 'c' ); ?>">
<?php echo get_the_date(); ?>
</time>
</div>

<?php the_excerpt(); ?>

</a>
</article>

<?php endwhile; endif; ?>

</section>

<?php wp_footer(); ?>
</body>
</html>