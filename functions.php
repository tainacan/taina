<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook.
 */
if ( ! function_exists( 'taina_support' ) ) :
	function taina_support()  {

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
	add_action( 'after_setup_theme', 'taina_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function taina_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'taina-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	/**
	 * Typography from Google fonts
	 */
	wp_enqueue_style( 'MontserratAndMuliFonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,600,600i,700,700i,800,900,900i|Muli:400,400i,600i,700,700i&display=swap'  );

}

add_action( 'wp_enqueue_scripts', 'taina_scripts' );
