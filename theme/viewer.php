<?php
/*
 * Template Name: Viewer
 * The template for displaying a mirador viewer
 *
 *
 */

get_header();
global $post;
$image_title = $post->post_name;
?>

<!-- <div class="mirador-wrapper">
    <div id="viewer"></div>
    <script type="text/javascript">
    Mirador({
      id: "viewer",
      buildPath: "<?= get_stylesheet_directory_uri(); ?>/mirador/",
      data: [{
          "manifestUri": "<?php the_title(); ?>",
          "location": "Lewis & Clark College"
      }],
      mainMenuSettings: {
          show: false,
      },
      saveSession: true,
      windowObjects: [
          {
              loadedManifest: "<?php the_title(); ?>",
              viewType: "ImageView",
              availableViews: ["ImageView"],
              bottomPanel: false,
              sidePanel: false,
              annotationLayer: true,
              annotationCreation: false,
              annotationState: 'annoOnCreateOff'
          }
      ]
    });
    </script>
</div> -->
<div class="uv"
     data-locale="en-GB:English (GB),cy-GB:Cymraeg"
     data-config="/config.json"
     data-uri="<?php the_title(); ?>"
     data-collectionindex="0"
     data-manifestindex="0"
     data-sequenceindex="0"
     data-canvasindex="0"
     data-zoom="-1.0064,0,3.0128,1.3791"
     data-rotation="0"
     style="height:777px; background-color: #000">
 </div>
<script type="text/javascript" id="embedUV" src="http://universalviewer.io/uv/lib/embed.js"></script>
<script type="text/javascript">/* wordpress fix */</script>
<!-- <div id="controls">
    <button>View details</button>
    <button>Toggle annotations</button>
    <a href="/request?image=<?= $image_title; ?>"><button>Request this image</button></a>
</div> -->

<?php get_footer(); ?>
