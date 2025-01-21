<?php
/**
 * Enqueue style.css file.
 */
if ( ! function_exists( 'darken_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 */
	function darken_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'darken-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'darken-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'darken_styles' );
add_action( 'enqueue_block_editor_assets', 'darken_styles' );