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
}

function brainbow_enqueue_scripts()
{
    wp_deregister_script('jquery'); // don't use built-in jquery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.1.1.min.js'); // use our own version of jquery
    wp_enqueue_script('brainbow-js', get_stylesheet_directory_uri() . '/brainbow.js');
}

add_action('wp_enqueue_scripts', 'brainbow_enqueue_styles');
add_action('wp_enqueue_scripts', 'brainbow_enqueue_scripts');

/**
 * Viewer shortcode
 */

function create_viewer($atts)
{
    // defaults
    $a = shortcode_atts(array(
        'config' => '',
        'fullscreen' => false,
        'jsonp' => null,
        'lightbox' => false,
        'locale' => 'en-US:English',
        'no_load' => false,
        'uri' => '',
        'style' => '',
        'collection_index' => '0',
        'manifest_index' => '0',
        'sequence_index' => '0',
        'canvas_index' => '0',
        'rotation' => '0',
        'zoom' => '',
        'xywh' => '',
    ), $atts);
    // template
    return "<div class=uv " .
        (!empty($a['config']) ? "data-config={$a['config']} " : "") .
        (!empty($a['fullscreen']) ? "data-fullscreen": "") .
        (!empty($a['jsonp']) ? "data-jsonp " : "") .
        (!empty($a['lightbox']) ? "data-lightbox " : "") .
        (!empty($a['locale']) ? "data-locale={$a['locale']} " : "") .
        (!empty($a['no_load']) ? "data-no-load " : "") .
        (!empty($a['uri']) ? "data-uri={$a['uri']} " : "") .
        (!empty($a['style']) ? "style={$a['style']} " : "") .
        (!empty($a['collection_index']) ? "data-collectionindex={$a['collection_index']} " : "") .
        (!empty($a['manifest_index']) ? "data-manifestindex={$a['manifest_index']} " : "") .
        (!empty($a['sequence_index']) ? "data-sequenceindex={$a['sequence_index']} " : "") .
        (!empty($a['canvas_index']) ? "data-canvasindex={$a['canvas_index']} " : "") .
        (!empty($a['rotation']) ? "data-rotation={$a['rotation']} " : "") .
        (!empty($a['zoom']) ? "data-zoom={$a['zoom']} " : "") .
        (!empty($a['xywh']) ? "data-xywh={$a['xywh']} " : "") .
     "></div>
     <script type='text/javascript' id='embedUV' src='http://universalviewer.io/vendor/uv/lib/embed.js'></script>
     <script type='text/javascript'>/* wordpress fix */</script>";
}

add_shortcode('viewer', 'create_viewer');
