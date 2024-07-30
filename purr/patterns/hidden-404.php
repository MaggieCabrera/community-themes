<?php
/**
 * Title: 404
 * Slug: purr/hidden-404
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Nothing Here', 'purr' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'It looks like nothing was found at this location. Maybe try a search?', '404 page message', 'purr' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
