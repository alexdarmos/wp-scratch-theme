<?php 

function add_scripts() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
}

add_action('wp_enqueue_scripts', 'add_scripts', PHP_INT_MAX);


?>