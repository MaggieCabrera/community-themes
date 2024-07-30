<?php
/**
 * Term functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Purr
 * @since Purr 1.0
 */

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'purr_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Purr 1.0
	 * @return void
	 */
	function purr_pattern_categories() {

		register_block_pattern_category(
			'sidebar',
			array(
				'label'       => _x( 'Sidebar', 'Block pattern category', 'purr' ),
				'description' => __( 'A collection of Sidebars.', 'purr' ),
			)
		);
	}
endif;

add_action( 'init', 'purr_pattern_categories' );
