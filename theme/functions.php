<?php

/**
 * Scripts & Styles
 */

function brainbow_enqueue_styles()
{
    $parent_style = 'twentysixteen-style';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style('mirador', get_stylesheet_directory_uri() . '/mirador/css/mirador-combined.css');
}

add_action('wp_enqueue_scripts', 'brainbow_enqueue_styles');
