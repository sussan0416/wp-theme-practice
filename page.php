<?php get_header(); ?>

<div id="container">
<div id="content">

<?php if(have_posts()):
while(have_posts()): the_post(); ?>

<article <?php post_class(); ?>>

<h1><?php the_title(); ?></h1>

<?php the_post_thumbnail( 'full' ); ?>

<?php the_content(); ?>

</article>
<?php endwhile; endif; ?>

</div>

<div id="menu">
<aside>
<h1>ABOUT STUDIO</h1>
<ul>
<?php wp_list_pages(array('title_li' => '')); ?>
</ul>
</aside>
</div>

</div>

<?php get_footer(); ?>