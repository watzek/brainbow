<?php
/**
 * Template Name: IIIF Gallery
 * Template Post Type: page
 *
 * The template for rendering a gallery of IIIF images.
 *
 * @package WordPress
 * @subpackage Brainbow
 * @since Brainbow 1.0
 */

get_header(); ?>

<div id="primary">
	<main id="main" class="site-main" role="main">

		<?php
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', 'gallery');
        endwhile;
        ?>

	</main>
</div>

<?php get_footer(); ?>
