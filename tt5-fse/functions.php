<?php
/**
 * Enqueue style.css file.
 */
if ( ! function_exists( 'tt5_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 */
	function tt5_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'tt5-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'tt5-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'tt5_styles' );
add_action( 'enqueue_block_editor_assets', 'tt5_styles' );