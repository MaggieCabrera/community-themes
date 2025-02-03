<?php
/**
 * Title: footer
 * Slug: darken/footer
 * Inserter: no
 */
?>

<!-- wp:group {"metadata":{"name":"Footer Clip"},"className":"footer-clip","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"3em"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"backgroundColor":"secondary","textColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group footer-clip has-white-color has-secondary-background-color has-text-color has-background has-link-color" style="margin-top:3em;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><!-- wp:paragraph {"fontSize":"x-large"} -->
<p class="has-x-large-font-size"><?php esc_html_e('Contact . Contact . Contact . Contact . Contact . Contact . Contact .','darken'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"630px","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-link-color"><?php esc_html_e('Get in touch with us today and let\'s bring your vision to life!','darken'); ?></h4>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"80%","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('Contact us now to discuss your project and discover how we can create an extraordinary online experience together.','darken'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textDecoration":"underline"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:600;text-decoration:underline"><a href="mailto:info@example.com"><?php esc_html_e('info@example.com','darken'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('999-000-0000','darken'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Bottom Footer"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"border":{"top":{"color":"var:preset|color|primary","width":"1px"},"right":{},"bottom":{},"left":{}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary);border-top-width:1px;padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:20px;padding-bottom:50px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('© Copyright 2025.','darken'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","className":"p-links"} -->
<p class="has-text-align-left p-links"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Proudly Powered by %1$sWordPress%2$s', 'darken' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?> <?php esc_html_e('Designed by Community.','darken'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->