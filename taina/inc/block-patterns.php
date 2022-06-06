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

    $block_patterns = array(
        'title-and-description',
        'banner-text-overlay',
        'banner-boxed-column',
        'collection-header-thumb-cover',
        'collection-header-cover',
        'collection-header-thumbnail',
        'post-author-box',
        'post-categories-list',
        'post-tags-list',
        'widgets-sidebar',
        'widgets-footer',
        'header',
        'header-alt',
        'collections-grid',
        'collections-list'
    );

    /**
	 * Filters the theme block patterns.
	 * @param array $block_patterns List of block patterns by name.
	 */
    $block_patterns = apply_filters( 'taina_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'taina/' . $block_pattern,
			require $pattern_file
		);
	}
}