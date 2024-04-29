<?php
/**
 * Template Name: React App
 */
?>

<?php get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        $post_id = get_the_ID(); ?>

        <h1>This is the PHP React Template!</h1>
        <p>This is server-side rendered PHP. Below is React.</p>

        <hr />

        <div
            id="react-app"
            data-post-id="<?= $post_id; ?>"
            data-app-name="example">
        </div>

    <?php }
    } ?>

<?php get_footer();
