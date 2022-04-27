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
                                        <!-- /wp:paragraph -->
                                    </div>
                                <!-- /wp:group -->'
		)
	);

    // Banner with big text overlay
    register_block_pattern(
        'taina/banner-text-overlay',
        array(
            'title'         => esc_html__( 'Banner with text overlay', 'taina' ),
			'categories'    => array( 'taina', 'headings'),
			'viewportWidth' => 1400,
            'content'       => '<!-- wp:cover {"url":"http://localhost/wp-content/uploads/2022/04/image-2-1280x854.png","id":184325,"dimRatio":50,"focalPoint":{"x":"0.66","y":"0.27"},"minHeight":464,"minHeightUnit":"px","isDark":true,"align":"full","style":{"color":{"duotone":["#262626","#d9560b"]}}} -->
                                    <div class="wp-block-cover alignfull is-dark" style="min-height:464px">
                                        <span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
                                        <img class="wp-block-cover__image-background wp-image-184325" alt="" src="http://localhost/wp-content/uploads/2022/04/image-2-1280x854.png" style="object-position:66% 27%" data-object-fit="cover" data-object-position="66% 27%"/>
                                        <div class="wp-block-cover__inner-container">
                                            <!-- wp:group {"layout":{"inherit":true}} -->
                                                <div class="wp-block-group">
                                                    <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"textColor":"background","className":"is-style-ctrls-titulo","fontSize":"x-large"} -->
                                                        <h2 class="has-text-align-left is-style-ctrls-titulo has-background-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:800">Título sobre a imagem</h2>
                                                    <!-- /wp:heading -->
                                                </div>
                                            <!-- /wp:group -->
                                        </div>
                                    </div>
                                <!-- /wp:cover -->'
        )
    );

     // Banner with boxed column
     register_block_pattern(
        'taina/banner-boxed-column',
        array(
            'title'         => esc_html__( 'Banner with boxed column', 'taina' ),
			'categories'    => array( 'taina', 'headings'),
			'viewportWidth' => 1400,
            'content'       => '<!-- wp:cover {"url":"http://localhost/wp-content/uploads/2022/04/image-2-1280x854.png","id":184325,"customGradient":"linear-gradient(0deg,rgb(255,255,255) 15%,rgba(255,255,225,0) 15%,rgba(255,255,255,0) 85%,rgb(255,255,255) 85%)","align":"full","style":{"color":{"duotone":["#262626","#d9560b"]}}} -->
                                    <div class="wp-block-cover alignfull"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgb(255,255,255) 15%,rgba(255,255,225,0) 15%,rgba(255,255,255,0) 85%,rgb(255,255,255) 85%)"></span>
                                        <img class="wp-block-cover__image-background wp-image-184325" alt="" src="http://localhost/wp-content/uploads/2022/04/image-2-1280x854.png" data-object-fit="cover"/>
                                        <div class="wp-block-cover__inner-container">
                                            <!-- wp:group {"layout":{"inherit":true}} -->
                                                <div class="wp-block-group">
                                                    <!-- wp:columns {"verticalAlignment":"center"} -->
                                                        <div class="wp-block-columns are-vertically-aligned-center">
                                                            <!-- wp:column {"verticalAlignment":"center","width":"380px","style":{"spacing":{"padding":{"top":"84px","right":"42px","bottom":"84px","left":"42px"},"blockGap":"1rem"}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":false}} -->
                                                                <div class="wp-block-column is-vertically-aligned-center has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:84px;padding-right:42px;padding-bottom:84px;padding-left:42px;flex-basis:380px">
                                                                    <!-- wp:heading {"level":5} -->
                                                                        <h5>Lorem ipsum dolor sit amet, const ectetuer apiscing</h5>
                                                                    <!-- /wp:heading -->
                                                                    
                                                                    <!-- wp:paragraph -->
                                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                    <!-- /wp:paragraph -->
                                                                </div>
                                                            <!-- /wp:column -->        
                                                            <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
                                                                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"></div>
                                                            <!-- /wp:column -->
                                                        </div>
                                                    <!-- /wp:columns -->
                                                </div>
                                            <!-- /wp:group -->
                                        </div>
                                    </div>
                                <!-- /wp:cover -->'
        )
    );
}