<?php

// Author: David Komarek
// Date: 2021-09-30

function my_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function theme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    add_theme_support('post-thumbnails');

    add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    if (!isset($content_width)) {
        $content_width = 800;
    }
}
add_action('after_setup_theme', 'theme_setup');

function register_my_menus() {
    register_nav_menus(array(
        'primary'   => __('Primary Menu'),
        'footer'    => __('Footer Menu'),
    ));
}
add_action('after_setup_theme', 'register_my_menus');

function my_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'my_widgets_init');


function add_favicon() {
    echo '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/favicon.ico" />';
}
add_action('wp_head', 'add_favicon');

add_theme_support('title-tag');

function disable_unused_assets() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'disable_unused_assets', 100);
