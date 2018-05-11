<?php get_header(); ?>

<section class="list">
<h1 class="list-title"><span>NEWS</span> お知らせ</h1>

<?php if(have_posts()):
the_post(); ?>

<?php get_template_part( 'post', 'large' ); ?>

<?php endif; ?>


<div class="colmuns">
<?php if(have_posts()):
while(have_posts()): the_post(); ?>

<?php get_template_part( 'post', 'small' )?>

<?php endwhile; endif; ?>
</div>

<?php if ($wp_query->max_num_pages > 1): ?>
<div class="navlink">
<span class="navlink-prev">
<?php next_posts_link('<i class="icon-chevron-sign-left"></i> 古い記事 '); ?>
</span>
<span class="navlink-next">
<?php previous_posts_link(' 新しい記事 <i class="icon-chevron-sign-right"></i>'); ?>
</span>
</div>
<?php endif; ?>

</section>

<?php get_footer(); ?>