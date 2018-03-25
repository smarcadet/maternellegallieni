<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/build/css/styles.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
function my_theme_enqueue_script() {
    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/build/js/scripts.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_script' );
