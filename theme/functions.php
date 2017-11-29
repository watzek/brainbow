<?php

/**
 * Scripts & Styles
 */

function brainbow_enqueue_styles() {
    $parent_style = 'twentysixteen-style';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

function brainbow_enqueue_scripts() {
    wp_deregister_script('jquery'); // don't use built-in jquery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.1.1.min.js'); // use our own version of jquery
    wp_enqueue_script('brainbow-js', get_stylesheet_directory_uri() . '/brainbow.js');
}

add_action('wp_enqueue_scripts', 'brainbow_enqueue_styles');
add_action('wp_enqueue_scripts', 'brainbow_enqueue_scripts');
