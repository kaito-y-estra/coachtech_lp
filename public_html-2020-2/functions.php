<?php
function twpp_enqueue_scripts() {
  wp_enqueue_script( 
    'main-script', 
    get_template_directory_uri() . '/js/main.js',
    array(),
    false,
    true
  );
}
add_action( 'wp_enqueue_scripts', 'twpp_enqueue_scripts' );?>