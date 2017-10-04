<?php
/*
 * Template Name: Gallery
 * The template for displaying links to all the images
 *
 *
 */

get_header(); ?>

<div class="gallery">
        <?php

        $my_wp_query = new WP_Query();
        $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => '-1'));
        $gallery = get_page_by_title('gallery');
        $all_images = get_page_children($gallery->ID, $all_wp_pages);

        foreach ($all_images as $image_page) {
            $manifest = json_decode(file_get_contents($image_page->post_title), true);
            $thumbnail = $manifest['thumbnail']['@id'];
            $title = $manifest['label'];
            $link = $image_page->guid;
            echo "<div class='gallery-listing'>
                <a href='$link'>
                    <div class='gallery-preview' id='$title'>
                        <img src='$thumbnail' />
                    </div>
                </a>
                <div class='gallery-title'>$title</div>
                <div class='gallery-controls'>
                    <a href='$link'><button>View</button></a>
                    <a class='request-link' href='/request?image=$title'><button>Request</button></a>
                </div>
            </div>";
        }
        ?>
</div>

<?php get_footer(); ?>
