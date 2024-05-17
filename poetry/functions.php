<?php
/**
 * Poetry functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Poetry
 * @since Poetry 1.0
 */


if ( ! function_exists( 'poetry_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Poetry 1.0
	 *
	 * @return void
	 */
	function poetry_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;

add_action( 'after_setup_theme', 'poetry_support' );

if ( ! function_exists( 'poetry_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Poetry 1.0
	 *
	 * @return void
	 */
	function poetry_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'poetry-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'poetry-style' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'poetry_styles' );
