<?php
/**
 * The template used for rendering a request form.
 *
 * Allows the user to fill in the image use policy as a <fieldset>.
 * The request image can be sent as a GET parameter, e.g.
 * /request?image=cerebellum would prefill in the "Image name:" field.
 *
 * @package WordPress
 * @subpackage Brainbow
 * @since Brainbow 1.0
 */
?>

<header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</header>
<section class="request-form">
    <form action="#" method="post">
        <?php the_content(); ?>
        <fieldset>
            <legend>Basics</legend>
            <label>Name:</label>
            <input type="text" required><br>
            <label>Email:</label>
            <input type="email" required><br>
        </fieldset>
        <fieldset>
            <legend>Image</legend>
            <label>Image name:</label>
            <input type="text" value="<?php echo $_GET['image']; ?>"/>
            <label>Reason for request:</label>
            <textarea></textarea>
        </fieldset>
        <div style='text-align:center;'>
            <input type="submit" value="submit request" />
        </div>
    </form>
</section>
