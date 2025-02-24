<?php

// Author: David Komarek
// Date: 2021-09-30



function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


function theme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 50,
        'width'       => 50,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'theme_setup');


function my_theme_setup(){
    add_theme_support('post-thumbnails');
}

function register_my_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu'),
        )
    );
}
add_action('after_setup_theme', 'register_my_menus');


function custom_breadcrumbs() {
    $separator = ' » ';
    $home_title = 'Home';

    if (!is_front_page()) {
        echo '<nav class="breadcrumbs">';
        echo '<a href="' . home_url() . '">' . $home_title . '</a>' . $separator;

        if (is_category() || is_single()) {
            $category = get_the_category();
            if (!empty($category)) {
                echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->name . '</a>' . $separator;
            }
            if (is_single()) {
                echo '<span>' . get_the_title() . '</span>';
            }
        } elseif (is_page()) {
            echo '<span>' . get_the_title() . '</span>';
        } elseif (is_archive()) {
            echo '<span>' . post_type_archive_title('', false) . '</span>';
        } elseif (is_search()) {
            echo '<span>Výsledky hledání pro "' . get_search_query() . '"</span>';
        }
        echo '</nav>';
    }
}




add_action('after_setup_theme', 'my_theme_setup');
