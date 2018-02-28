<?php
/**
 * Template Name: Request Form
 * Template Post Type: page
 *
 * The template for displaying the request form.
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
            get_template_part('template-parts/request', 'form');
        endwhile;
        ?>

	</main>
</div>

<?php get_footer(); ?>
