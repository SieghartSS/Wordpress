<?php
function my_text_theme_setup() {
    // Title otomatis
    add_theme_support('title-tag');
    // Menu navigasi
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-text-theme')
    ));
}
add_action('after_setup_theme', 'my_text_theme_setup');

// Tambah CSS reset bawaan WP
function my_text_theme_enqueue() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_text_theme_enqueue');
