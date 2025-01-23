<?php
/**
 * Title: 404
 * Slug: darken/404
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"dimensions":{"minHeight":"70vh"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="min-height:70vh"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"x-large"} -->
    <h1 class="wp-block-heading has-text-align-center has-x-large-font-size">
        <?php esc_html_e('Page Not Found','darken'); ?>
    </h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php esc_html_e('The page you are looking for does not exist, or it has been moved. Please try
            searching using the form below.','darken'); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php esc_html_e('Homepage','darken'); ?></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></main>
<!-- /wp:group -->