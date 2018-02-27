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

/**
 * Gallery shortcode
 */

function create_gallery_thumbnail( $atts, $content = null ) {
    // defaults
    extract(shortcode_atts(array(
        'uri' => '',
        'page' => ''
    ), $atts));

    $manifest = json_decode(file_get_contents($uri), true);
    $thumbnail = $manifest['thumbnail']['@id'];
    $title = $manifest['label'];

    // template
    return "<div class='gallery-listing'>
        <a href='{$page}'>
            <div class='gallery-preview' id='{$manifest['label']}'>
                <img src='{$manifest['thumbnail']['@id']}' />
            </div>
        </a>
        <div class='gallery-title'>{$manifest['label']}</div>
        <div class='gallery-controls'>
            <a href='{$page}'><button>View</button></a>
            <a class='request-link' href='/request?image={$title}'><button>Request</button></a>
        </div>
    </div>";
}

add_shortcode('gallery_thumb', 'create_gallery_thumbnail');

/**
