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