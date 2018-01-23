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