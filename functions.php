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
	wp_enqueue_style( 'MontserratAndMulishFonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,600,600i,700,700i,800,900,900i|Mulish:400,400i,600i,700,700i&display=swap'  );

	// If the Tainacan plugin is enabled, enqueues style related to it
	if ( defined ('TAINACAN_VERSION') ) {
		wp_enqueue_style( 'taina-style-tainacan', get_template_directory_uri() . '/assets/css/tainacan.css', array('taina-style'), wp_get_theme()->get( 'Version' ) );
	}

}
add_action( 'wp_enqueue_scripts', 'taina_scripts' );

/**
 * Editor-side styles and scripts
 */
function taina_enqueue_block_editor_assets_scripts() {

	/**
	 * Editor styles
	 */
	wp_enqueue_style( 'taina-editor-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'enqueue_block_editor_assets', 'taina_enqueue_block_editor_assets_scripts' );


/* Block styles */
require get_template_directory() . '/inc/block-styles.php';

/* Block patterns */
require get_template_directory() . '/inc/block-patterns.php';
