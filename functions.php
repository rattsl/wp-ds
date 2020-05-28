<?php

function my_scripts() {
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'javascript',get_template_directory_uri().'/js/cafe.js',array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

add_theme_support( 'post-thumbnails' ); 

?>