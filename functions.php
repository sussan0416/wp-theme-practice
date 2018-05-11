<?php

if ( !isset( $content_width ) ) {
    $content_width = 840;
}

// デフォルトスクリプト
function my_scripts() {
    if ( is_single() ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

// 概要の文字数
function my_length($length) {
    return 100;
}
add_filter('excerpt_mblength', 'my_length');

// 概要抜粋の省略記号
function my_more($more) {
    return '…';
}
add_filter('excerpt_more', 'my_more');

// アイキャッチ画像
add_theme_support( 'post-thumbnails' );

// ウィジェット
register_sidebar( array(
    'id' => 'column01',
    'name' => 'フッターカラム01',
    'description' => '1段目に表示するウィジェットを指定。',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widgettitle">',
    'after_title' => '</h1>'
) );

register_sidebar( array(
    'id' => 'column02',
    'name' => 'フッターカラム02',
    'description' => '2段目に表示するウィジェットを指定。',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widgettitle">',
    'after_title' => '</h1>'
) );

register_sidebar( array(
    'id' => 'column03',
    'name' => 'フッターカラム03',
    'description' => '3段目に表示するウィジェットを指定。',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widgettitle">',
    'after_title' => '</h1>'
) );

// 検索フォーム
add_theme_support( 'html5', array('search-form') );

// メインクエリの変更
function my_query($query) {
    if ( is_admin() || !$query->is_main_query() ) {
        return;
    }

    if ( $query->is_home() ) {
        $query->set('posts_per_page', '6');
    }
}

add_action( 'pre_get_posts', 'my_query' );