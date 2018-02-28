<?php
/**
 * The template used for rendering a IIIF viewer.
 *
 * @package WordPress
 * @subpackage Brainbow
 * @since Brainbow 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <div class="uv"
            data-config="http://manifests.brainbow.watzek.cloud/uv-config.json"
            data-uri="<?php get_the_content() ?>"
            style="height:777px;">
         </div>
        <script type="text/javascript" id="embedUV" src="http://universalviewer.io/uv/lib/embed.js"></script>
        <script type="text/javascript">/* wordpress fix */</script>
    </div>
</article>
