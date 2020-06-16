<?php

//----------cssの取得----------
function twpp_enqueue_styles() {
  wp_enqueue_style( 'main-style-sheet', get_template_directory_uri()."/style.css" );
  wp_enqueue_style( 'reset-style-sheet', get_template_directory_uri(). "/css/reset.css" );
  wp_enqueue_style( 'sp-style-sheet', get_template_directory_uri(). "/css/sp-style.css" );
}
add_action( 'wp_enqueue_scripts', 'twpp_enqueue_styles' );


//----------jsの取得----------
function twpp_enqueue_scripts() {
  wp_enqueue_script( 
    'main-script', 
    get_template_directory_uri() . '/js/main.js',
    array(),
    false,
    true
  );
}
add_action( 'wp_enqueue_scripts', 'twpp_enqueue_scripts' );





// ----------アイキャッチ画像を有効にする。----------
add_theme_support('post-thumbnails');

// ----------カスタム投稿タイプの追加----------



//ウィジェットの有効か
function my_theme_widgets_init() {
  register_sidebar( array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
  ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );

 