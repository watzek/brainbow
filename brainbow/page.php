<?php
/**
 * The template for displaying pages.
 * Removes the sidebar and comments from the twentysixteen version.
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
            get_template_part('template-parts/content', 'page');
        endwhile;
        ?>

	</main>
</div>

<?php get_footer(); ?>
