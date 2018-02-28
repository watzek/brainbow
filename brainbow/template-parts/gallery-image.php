<?php
/**
 * The template used for rendering a IIIF viewer.
 *
 * @package WordPress
 * @subpackage Brainbow
 * @since Brainbow 1.0
 */
?>

<?php
    $manifest_uri = get_the_content();
    $manifest = json_decode(file_get_contents($manifest_uri), true);
    $thumbnail = $manifest['thumbnail']['@id'];
    $title = $manifest['label'];
?>

<figure class="gallery-listing d-flex flex-row">
    <div class="gallery-preview">
        <img src="<?php echo $thumbnail; ?>" />
    </div>
    <figcaption>
        <div class="gallery-title">
            <?php echo get_the_title(); ?>
        </div>
        <div class="gallery-controls">
            <a href="<?php echo $post->guid; ?>"><button>view</button></a>
            <a class="request-link" href="/request?image=<?php echo $title; ?>"><button>request</button></a>
        </div>
        <p class="gallery-info">
            <?php echo $manifest['description']; ?>
        </p>
    </figcaption>
</figure>
