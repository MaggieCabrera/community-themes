<?php
/**
 * Title: Footer
 * Slug: purr/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A Footer section.
 */
?>

<!-- wp:group {"style":{"border":{"top":{"color":"#f2f2f2","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:#f2f2f2;border-top-width:1px">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"30px"}}}} -->
	<div class="wp-block-group" style="padding-top:80px;padding-bottom:30px">
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">
			<?php
				/* Translators: WordPress link. */
				$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'purr' ) ) . '" rel="nofollow">WordPress</a>';
				echo sprintf(
					/* Translators: Designed with WordPress */
					esc_html__( 'Proudly Powered by %1$s', 'purr' ),
						$wordpress_link
				);
			?>

		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
