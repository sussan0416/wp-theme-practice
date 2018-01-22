<?php if ( have_comments() ) : ?>
<div id="comments">
<h3>Comments</h3>
<ul>
<?php wp_list_comments([
    'format' => 'html5'
]); ?>
</ul>
</div>
<?php endif; ?>

<?php
comment_form([
    'title_reply' => 'Leave a Comment',
    'label_submit' => '送信',
    'format' => 'html5'
    ]); ?>
<p>トラックバックURL: <?php trackback_url(); ?></p>