<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook.
 */
if ( ! function_exists( 'taina_support' ) ) :
	function taina_support()  {
		// Enqueue editor styles (using minified version for consistency with Gutenberg editor).
		add_editor_style( 'style.min.css' );
	}
	add_action( 'after_setup_theme', 'taina_support' );
endif;

/**
 * Version string from the parent theme (Taina), for cache-busting parent assets.
 * wp_get_theme() alone uses the active theme; with a child active that mismatches get_template_directory_uri().
 */
function taina_get_parent_theme_version() {
	return wp_get_theme( get_template() )->get( 'Version' );
}

/**
 * Enqueue scripts and styles.
 */
function taina_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'taina-style', get_template_directory_uri() . '/style.min.css', array(), taina_get_parent_theme_version() );

	// If the Tainacan plugin is enabled, enqueues style related to it
	if ( defined ('TAINACAN_VERSION') ) {
		wp_enqueue_style( 'taina-tainacan-style', get_template_directory_uri() . '/tainacan.min.css', array(), taina_get_parent_theme_version() );
	}

}
add_action( 'wp_enqueue_scripts', 'taina_scripts' );

/**
 * Editor-side styles and scripts
 */
function taina_enqueue_block_editor_assets_scripts() {

	// Editor styles
	wp_enqueue_style( 'taina-editor-style', get_template_directory_uri() . '/style.min.css', array(), taina_get_parent_theme_version() );

	// If the Tainacan plugin is enabled, enqueues style related to it
	if ( defined ('TAINACAN_VERSION') ) {
		wp_enqueue_style( 'taina-tainacan-editor-style', get_template_directory_uri() . '/tainacan.min.css', array(), taina_get_parent_theme_version() );
	}
}
add_action( 'enqueue_block_editor_assets', 'taina_enqueue_block_editor_assets_scripts' );

/* Block filters */
require get_template_directory() . '/inc/block-filters.php';

/* Block styles */
require get_template_directory() . '/inc/block-styles.php';

/* Block banners */
require get_template_directory() . '/inc/block-banners.php';

/* Block patterns */
require get_template_directory() . '/inc/block-patterns.php';
