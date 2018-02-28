<?php
/**
 * The template part used for rendering a gallery of IIIF preview images.
 *
 * @package WordPress
 * @subpackage Brainbow
 * @since Brainbow 1.0
 */
?>

<?php
    $images = new WP_Query([
        'post_type' => 'page',
        'meta_key' => '_wp_page_template',
        'meta_value' => 'iiif-image.php'
    ]);
?>

<section class="iiif-gallery">
    <?php
    if ($images->have_posts()) {
        while ($images->have_posts()) {
            $images->the_post();
            get_template_part('template-parts/gallery', 'image');
        }
    }
    // foreach ($all_images as $image_page) {
    //     $manifest = json_decode(file_get_contents($image_page->post_title), true);
    //     $thumbnail = $manifest['thumbnail']['@id'];
    //     $title = $manifest['label'];
    //     $link = $image_page->guid;
    //     echo "<div class='gallery-listing'>
    //         <a href='$link'>
    //             <div class='gallery-preview' id='$title'>
    //                 <img src='$thumbnail' />
    //             </div>
    //         </a>
    //         <div class='gallery-title'>$title</div>
    //         <div class='gallery-controls'>
    //             <a href='$link'><button>View</button></a>
    //             <a class='request-link' href='/request?image=$title'><button>Request</button></a>
    //         </div>
    //     </div>";
    // }
    ?>
</section>
