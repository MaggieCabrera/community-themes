<?php
/**
 * Term functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Term
 * @since Term 1.0
 */

/**
 * Register block styles.
 */
if ( ! function_exists( 'term_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Term 1.0
	 * @return void
	 */
	function term_block_styles() {

		register_block_style(
			'core/social-links',
			array(
				'name'         => 'social-rounded-icons',
                'label'        => __( 'Rounded icons', 'term' ),
				/*
				 * Styles for the rounded icon style of the Social Links block.
				 */
				'inline_style' => '
				.is-style-social-rounded-icons .wp-block-social-link {
					border-radius: 5px;
				}',
			)
		);

		register_block_style(
			'core/group',
			array(
				'name' => 'hover-effect',
				'label' => __( 'Hover effect', 'term'),
				'inline_style' => '
				.is-style-hover-effect {
					background-color: #EDECE8;
				}
				.is-style-hover-effect:hover {
					background-color: #131B1E;
				}
				.is-style-hover-effect:hover a,
				.is-style-hover-effect:hover p {
					color: #EDECE8;
				}
				.is-style-hover-effect:hover {
					transition: all 0.2s ease-in-out;
				}',
			)
		);

	}
endif;

add_action( 'init', 'term_block_styles' );