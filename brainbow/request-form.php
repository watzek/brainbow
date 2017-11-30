<?php
/*
 * Template Name: Request
 * The template for an image request form
 *
 *
 */

get_header(); ?>

<div class="request-form">
    <form action="#" method="post">
        <fieldset>
            <legend>
                Image Use
            </legend>
            <div>
                Wikipedia encourages users to upload their own images. All user-created images must be licensed under a free license, such as the GFDL and/or an acceptable Creative Commons license, or released into the public domain, which removes all copyright and licensing restrictions. When licensing an image, it is common practice to multi-license under both GFDL and a Creative Commons license.
                Such images can include photographs which you yourself took. The legal rights for images generally lie with the photographer, not the subject. Simply re-tracing a copyrighted image or diagram does not necessarily create a new copyright—copyright is generated only by instances of "creativity", and not by the amount of labor which went into the creation of the work. Photographs of three-dimensional objects almost always generate a new copyright, though others may continue to hold copyright in items depicted in such photographs. Photographs of two-dimensional objects such as paintings in a museum often do not (see the section on the "public domain" below). If you have questions in respect to this, please ask the regulars at Wikipedia talk:Copyrights.
            </div>
        </fieldset>
        <fieldset>
            <legend>
                Basics
            </legend>
            <label>Name:</label>
            <input type="text" required><br>
            <label>Email:</label>
            <input type="email" required><br>
        </fieldset>
        <fieldset>
            <legend>
                Image
            </legend>
            <label>Image name:</label>
            <input type="text" value="<?php echo $_GET['image']; ?>"/>
            <label>Reason for request:</label>
            <textarea></textarea>
        </fieldset>
        <div style='text-align:center;'>
            <input type="submit">
        </div>
    </form>
</div>

<?php get_footer(); ?>
