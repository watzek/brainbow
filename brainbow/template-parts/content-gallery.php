<?php
/**
 * The template part used for rendering a gallery of IIIF preview images.
 *
 * @package WordPress
 * @subpackage Brainbow
 * @since Brainbow 1.0
 */
?>

<header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</header>
<section class="iiif-gallery">
    <div class="container">
        <?php
        $images = new WP_Query([
            'post_type' => 'page',
            'meta_key' => '_wp_page_template',
            'meta_value' => 'iiif-image.php'
        ]);
        if ($images->have_posts()) {
            while ($images->have_posts()) {
                $images->the_post();
                get_template_part('template-parts/gallery', 'image');
            }
        }
        ?>
    </div>
</section>
