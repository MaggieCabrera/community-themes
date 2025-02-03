<?php
/**
 * Title: Homepage
 * Slug: darken/homepage
 * Categories: Banners, Posts
 */
?>
<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
<main class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"200px","height":"200px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"right","className":"is-style-rounded"} -->
<figure class="wp-block-image alignright size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-img.png" alt="" class="" style="object-fit:contain;width:200px;height:200px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"32px"}}} -->
<h5 class="wp-block-heading" style="font-size:32px"><?php esc_html_e('Hi , I am','darken'); ?></h5>
<!-- /wp:heading -->

<!-- wp:heading {"level":1,"align":"full","style":{"spacing":{"margin":{"left":"-10px"}}}} -->
<h1 class="wp-block-heading alignfull" style="margin-left:-10px"><?php esc_html_e('Digital Designer ','darken'); ?><br>&amp; <?php esc_html_e('Developer.','darken'); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->


<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"border":{"color":"#adadad","width":"1px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}}} -->
<div class="wp-block-column has-border-color" style="border-color:#adadad;border-width:1px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/strategy-img.jpg" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"className":"heading-dot"} -->
<h5 class="wp-block-heading heading-dot"><?php esc_html_e('Strategy','darken'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"color":"#adadad","width":"1px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}}} -->
<div class="wp-block-column has-border-color" style="border-color:#adadad;border-width:1px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/design-img.jpg" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"className":"heading-dot","style":{"typography":{"fontSize":"32px"}}} -->
<h5 class="wp-block-heading heading-dot" style="font-size:32px"><?php esc_html_e('Design','darken'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"color":"#adadad","width":"1px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}}} -->
<div class="wp-block-column has-border-color" style="border-color:#adadad;border-width:1px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/development-img.jpg" alt="" class=""/></figure>

<!-- /wp:image -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5,"className":"heading-dot","style":{"typography":{"fontSize":"32px"}}} -->
<h5 class="wp-block-heading heading-dot" style="font-size:32px"><?php esc_html_e('Development','darken'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('My passion is turning ideas into reality, and I take pride in producing quality work that balances form, function, and creativity.','darken'); ?></h3>
<!-- /wp:heading -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div id="works" class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Works','darken'); ?></h2>
<!-- /wp:heading -->

<!-- wp:pattern {"slug":"darken/blog-post"} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"secondary-color","className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-x-small-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-secondary-color-color has-text-color has-link-color wp-element-button" href="/blog" style="padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('View All Works','darken'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
