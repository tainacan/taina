<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'taina',
		array( 'label' => esc_html__( 'Tainá', 'taina' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Large Text.
	register_block_pattern(
		'taina/title-and-description',
		array(
			'title'         => esc_html__( 'Title and description', 'taina' ),
			'categories'    => array( 'taina', 'headings'),
			'viewportWidth' => 980,
			'content'       => '<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group">
                                <!-- wp:heading {"className":"is-style-taina-detached"} -->
                                <h2 class="is-style-taina-detached">' .  esc_html__( 'Section title', 'taina' ) . '</h2>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"className":"is-style-taina-detached","fontSize":"small"} -->
                                <p class="has-small-font-size is-style-taina-detached">' . esc_html__( 'Section description or subtitle, which may have one or more lines to provide an introduction of what is going to be talked about.', 'taina' ) . '</p>
                                <!-- /wp:paragraph --></div>
                                <!-- /wp:group -->'
		)
	);

}