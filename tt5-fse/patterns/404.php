<?php
/**
 * Title: 404
 * Slug: tt5-fse/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">
    <!-- wp:group {"align":"wide","style":{"dimensions":{"minHeight":"70vh"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide" style="min-height:70vh"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"x-large"} -->
    <h1 class="wp-block-heading has-text-align-center has-x-large-font-size">
            Page Not Found
        </h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">The page you are looking for does not exist, or it has been moved. Please try
            searching using the form below.</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/">Homepage</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->