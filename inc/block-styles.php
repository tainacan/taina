<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 */
	function taina_register_block_styles() {

		// Titles can have a detached style.
		register_block_style(
			'core/heading',
			array(
				'name'  => 'taina-detached',
				'label' => esc_html__( 'Detached', 'taina' ),
			)
		);

        // Paragraphs, when used for subtitles, can have a detached style.
		register_block_style(
			'core/paragraph',
			array(
				'name'  => 'taina-detached',
				'label' => esc_html__( 'Detached', 'taina' ),
			)
		);
	}
	add_action( 'init', 'taina_register_block_styles' );
}
