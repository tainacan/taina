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


        // Quotes with big commas around
		register_block_style(
			'core/quote',
			array(
				'name'  => 'taina-quoted',
				'label' => esc_html__( 'Quoted', 'taina' ),
			)
		);

		// Post template where the clickable area is the whole post item
		register_block_style(
			'core/post-template',
			array(
				'name'  => 'taina-cards',
				'label' => esc_html__( 'Cards', 'taina' ),
			)
		);

		// Search bar with a collapsable input
		register_block_style(
			'core/search',
			array(
				'name'  => 'taina-collapsable-search',
				'label' => esc_html__( 'Collapsable', 'taina' ),
			)
		);

		// Columns vertical align
		register_block_style(
			'core/group',
			array(
				'name'  => 'taina-group-align-items_stretch',
				'label' => esc_html__( 'Stretch vertically', 'taina' ),
			)
		);
	}
	add_action( 'init', 'taina_register_block_styles' );
}
