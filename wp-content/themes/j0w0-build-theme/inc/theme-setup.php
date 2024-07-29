<?php

function j0w0_enqueue_scripts() {
    if (is_page_template('templates/template-react-app.php')) {
        // wp-scripts react code
        $inc  = require get_stylesheet_directory() . '/build/apps/index.asset.php';
        $deps = array_merge(
            $inc['dependencies'],
            ['wp-element']
        );

        wp_enqueue_script('j0w0-react', get_stylesheet_directory_uri() . '/build/apps/index.js', $deps, $inc['version'], true);
        wp_enqueue_style('j0w0-react', get_stylesheet_directory_uri() . '/build/apps/index.css');
    } else {
        // wp-scripts optimized code
        $inc  = require get_stylesheet_directory() . '/build/global/index.asset.php';
        $deps = array_merge(
            $inc['dependencies'],
            ['jquery', 'wp-element']
        );

        wp_enqueue_script('j0w0-global', get_stylesheet_directory_uri() . '/build/global/index.js', $deps, $inc['version'], true);
        wp_enqueue_style('j0w0-global', get_stylesheet_directory_uri() . '/build/global/index.css');
    }

    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'j0w0_enqueue_scripts');

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
