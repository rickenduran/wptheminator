<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbmails' );
add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'qoute', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links');
add_theme_support( 'custom-background');
add_theme_support( 'custom-header' );
add_theme_support( 'custom-header-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

//Load in CSS
function wptheminator_enqueue_styles() {

  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');

}
add_action( 'wp_enqueue_scripts', 'wptheminator_enqueue_styles') ;



?>
