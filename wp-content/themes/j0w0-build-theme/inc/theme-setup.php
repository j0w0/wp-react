<?php

function j0w0_theme_setup() {
    // enable theme features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // navigation menus
    register_nav_menus([
        'primary' => 'Primary Navigation',
    ]);
}
add_action('after_setup_theme', 'j0w0_theme_setup');

function j0w0_enqueue_scripts() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // wp-scripts optimized code
    wp_enqueue_script('j0w0-global', get_stylesheet_directory_uri() . '/build/global/global.js', ['jquery', 'wp-element'], rand(), true);
    wp_enqueue_style('j0w0-global', get_stylesheet_directory_uri() . '/build/global/global.css');

    // wp-scripts react code
    if (is_page_template('templates/template-react-app.php')) {
        wp_enqueue_script('j0w0-react', get_stylesheet_directory_uri() . '/build/apps/index.js', ['wp-element'], rand(), true);
        wp_enqueue_style('j0w0-react', get_stylesheet_directory_uri() . '/build/apps/index.css');
    }
}
add_action('wp_enqueue_scripts', 'j0w0_enqueue_scripts');
