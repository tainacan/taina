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
			'viewportWidth' => 860,
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
            'content'       => '<!-- wp:cover {"url":"http://localhost/wp-content/uploads/2022/04/image-2-1280x854.png","id":184325,"dimRatio":0,"focalPoint":{"x":"0.66","y":"0.27"},"minHeight":464,"minHeightUnit":"px","isDark":true,"align":"full","style":{"color":{"duotone":["#262626","#A0303A"]}}} -->
                                    <div class="wp-block-cover alignfull is-dark" style="min-height:464px">
                                        <span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-dim-0"></span>
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
            'content'       => '<!-- wp:cover {"url":"http://localhost/wp-content/uploads/2022/04/image-2-1280x854.png","id":184325,"customGradient":"linear-gradient(0deg,rgb(255,255,255) 15%,rgba(255,255,225,0) 15%,rgba(255,255,255,0) 85%,rgb(255,255,255) 85%)","align":"full","style":{"color":{"duotone":["#262626","#A0303A"]}}} -->
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

    // Collection banner with thumbnail and cover
    register_block_pattern(
        'taina/banner-boxed-column',
        array(
            'title'         => esc_html__( 'Collection header (thumb and cover)', 'taina' ),
			'categories'    => array( 'taina', 'headings'),
			'viewportWidth' => 1400,
            'content'       => '<!-- wp:columns {"verticalAlignment":null,"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
                                <div class="wp-block-columns alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                    <!-- wp:column {"verticalAlignment":"top","width":"22%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
                                    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:22%">
                                        <!-- wp:image {"id":185610,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
                                            <figure class="wp-block-image size-large is-style-default"><img src="http://localhost/wp-content/uploads/2022/06/g312-1280x1280.png" alt="" class="wp-image-185610"/></figure>
                                        <!-- /wp:image -->
                                    </div>
                                    <!-- /wp:column -->    
                                    <!-- wp:column {"verticalAlignment":"top","width":"","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}},"layout":{"inherit":false}} -->
                                    <div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                        <!-- wp:cover {"url":"http://localhost/wp-content/uploads/2022/06/g74.png","id":185611,"focalPoint":{"x":"0.26","y":"0.50"},"customGradient":"linear-gradient(180deg,rgba(7,146,227,0) 79%,rgb(255,255,255) 79%)","contentPosition":"top left","style":{"color":{"duotone":["#262626","#A0303A"]},"spacing":{"padding":{"top":"0px","right":"0%","bottom":"0px","left":"0px"}}}} -->
                                        <div class="wp-block-cover has-custom-content-position is-position-top-left" style="padding-top:0px;padding-right:0%;padding-bottom:0px;padding-left:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(7,146,227,0) 79%,rgb(255,255,255) 79%)"></span><img class="wp-block-cover__image-background wp-image-185611" alt="" src="http://localhost/wp-content/uploads/2022/06/g74.png" style="object-position:26% 50%" data-object-fit="cover" data-object-position="26% 50%"/>
                                            <div class="wp-block-cover__inner-container">
                                                <!-- wp:image {"id":185611,"width":781,"height":244,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
                                                    <figure class="wp-block-image size-large is-resized is-style-default"><img src="http://localhost/wp-content/uploads/2022/06/g74-1280x400.png" alt="" class="wp-image-185611" width="781" height="244"/></figure>
                                                <!-- /wp:image -->
                                                
                                                <!-- wp:group {"style":{"spacing":{"blockGap":"1em"}},"backgroundColor":"background-alt","layout":{"inherit":true}} -->
                                                <div class="wp-block-group has-background-alt-background-color has-background">
                                                    <!-- wp:heading {"textColor":"primary","className":"is-style-ctrls-titulo"} -->
                                                        <h2 class="is-style-ctrls-titulo has-primary-color has-text-color">Viagens pelo mundo</h2>
                                                    <!-- /wp:heading -->
                                                    
                                                    <!-- wp:paragraph {"textColor":"foreground"} -->
                                                        <p class="has-foreground-color has-text-color">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, seddiam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper</p>
                                                    <!-- /wp:paragraph -->
                                                </div>
                                                <!-- /wp:group -->
                                            </div>
                                        </div>
                                        <!-- /wp:cover -->
                                    </div>
                                    <!-- /wp:column -->
                                </div>
                                <!-- /wp:columns -->'
        )
    );

    
    // Post author box.
	register_block_pattern(
		'taina/post-author-box',
		array(
			'title'         => esc_html__( 'Post author box', 'taina' ),
			'categories'    => array( 'taina'),
			'viewportWidth' => 980,
			'content'       => '<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                                    <div class="wp-block-group"><!-- wp:avatar {"size":240,"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"color":{"duotone":["#262626","#A0303A"]}}} /-->
                                        <!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"backgroundColor":"background-alt","layout":{"type":"flex","orientation":"vertical"}} -->
                                            <div class="wp-block-group has-background-alt-background-color has-background">
                                                <!-- wp:heading {"textColor":"primary"} -->
                                                    <h2 class="has-primary-color has-text-color">' . esc_html__( 'About the author', 'taina' ) . '</h2>
                                                <!-- /wp:heading -->
                                                <!-- wp:post-author {"showAvatar":false,"showBio":true,"style":{"color":{"duotone":["#df834e","#342116"]}}} /-->
                                            </div>
                                        <!-- /wp:group -->
                                    </div>
                                <!-- /wp:group -->'
                                
		)
	);

    // Post categories list
	register_block_pattern(
		'taina/post-categories-list',
		array(
			'title'         => esc_html__( 'Post categories list', 'taina' ),
			'categories'    => array( 'taina'),
			'viewportWidth' => 980,
			'content'       => '<!-- wp:group {"layout":{"inherit":true}} -->
                                    <div class="wp-block-group">
                                        <!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                                        <div class="wp-block-group">
                                            <!-- wp:heading {"level":2} -->
                                                <h2>' . esc_html__( 'Categories', 'taina' ) . ':</h2>
                                            <!-- /wp:heading -->
                                        
                                            <!-- wp:post-terms {"term":"category"} /-->
                                        </div>
                                        <!-- /wp:group -->
                                    </div>
                                <!-- /wp:group -->'
                                
		)
	);

    // Post tags list
	register_block_pattern(
		'taina/post-tags-list',
		array(
			'title'         => esc_html__( 'Post tags list', 'taina' ),
			'categories'    => array( 'taina'),
			'viewportWidth' => 980,
			'content'       => '<!-- wp:group {"layout":{"inherit":true}} -->
                                    <div class="wp-block-group">
                                        <!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                                        <div class="wp-block-group">
                                            <!-- wp:heading {"level":2} -->
                                                <h2>' . esc_html__( 'Tags', 'taina' ) . ':</h2>
                                            <!-- /wp:heading -->
                                        
                                            <!-- wp:post-terms {"term":"post_tag"} /-->
                                        </div>
                                        <!-- /wp:group -->
                                    </div>
                                <!-- /wp:group -->'
                                
		)
	);

    // Widgets sidebar
	register_block_pattern(
		'taina/widgets-sidebar',
		array(
			'title'         => esc_html__( 'Widgets sidebar', 'taina' ),
			'categories'    => array( 'taina'),
			'viewportWidth' => 426,
			'content'       => '<!-- wp:group {"style":{"spacing":{"blockGap":"1.5em","padding":{"top":"42px","right":"4.167vw","bottom":"42px","left":"4.167vw"}}},"layout":{"type":"flex","orientation":"vertical"},"backgroundColor":"background-alt"} -->
                                    <div class="wp-block-group has-background-alt-background-color has-background" style="padding-top: 42px; padding-right: 4.167vw; padding-bottom: 42px; padding-left: 4.167vw;">
                                        <!-- wp:search {"label":"' . esc_html__( 'Search', 'taina' ) . '","showLabel":false,"placeholder":"' . esc_html__( 'Search for...', 'taina') .'","buttonText":"' . esc_html__( 'Search', 'taina' ) . '","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"background","textColor":"foreground"} /-->
                                        <!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                            <div class="wp-block-group">
                                                <!-- wp:heading {"fontSize":"medium", "placeholder": "' . esc_html__( 'Latest posts', 'taina' ) . '"} -->
                                                    <h2 class="has-medium-font-size">' . esc_html__( 'Latest posts', 'taina' ) . '</h2>
                                                <!-- /wp:heading -->
                                                <!-- wp:latest-posts /-->
                                            </div>
                                            <!-- /wp:group -->
                                            <!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                            <div class="wp-block-group">
                                                <!-- wp:heading {"fontSize":"medium", "placeholder": "' . esc_html__( 'Categories', 'taina' ) . '"} -->
                                                    <h2 class="has-medium-font-size">' . esc_html__( 'Categories', 'taina' ) . '</h2>
                                                <!-- /wp:heading -->
                                                <!-- wp:categories /-->
                                            </div>
                                            <!-- /wp:group -->
                                            <!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                            <div class="wp-block-group">
                                                <!-- wp:heading {"fontSize":"medium", "placeholder": "' . esc_html__( 'Archive', 'taina' ) . '"} -->
                                                    <h2 class="has-medium-font-size">' . esc_html__( 'Archive', 'taina' ) . '</h2>
                                                <!-- /wp:heading -->
                                                <!-- wp:archives /-->
                                            </div>
                                        <!-- /wp:group -->
                                    </div>
                                <!-- /wp:group -->'
		)
	);


    // Widgets footer
	register_block_pattern(
		'taina/widgets-footer',
		array(
			'title'         => esc_html__( 'Widgets footer', 'taina' ),
			'categories'    => array( 'taina'),
			'viewportWidth' => 1366,
			'content'       => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"42px","right":"32px","bottom":"42px","left":"32px"}}},"layout":{"inherit":true}} -->
                                    <div class="wp-block-group" style="padding-top: 42px;padding-right: 32px;padding-bottom: 42px;padding-left: 32px;">
                                        <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"24px"}}} -->
                                            <div class="wp-block-columns alignwide">
                                                <!-- wp:column {"width":"33.34%"} -->
                                                    <div class="wp-block-column" style="flex-basis: 33.34%">
                                                        <!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                                            <div class="wp-block-group">
                                                                <!-- wp:heading {"fontSize":"normal","level":3, "placeholder": "' . esc_html__( 'Latest posts', 'taina' ) . '"} -->
                                                                    <h3>' . esc_html__( 'Latest posts', 'taina' ) . '</h3>
                                                                <!-- /wp:heading -->
                                                        
                                                                <!-- wp:latest-posts /-->
                                                            </div>
                                                        <!-- /wp:group -->
                                                    </div>
                                                <!-- /wp:column -->
                                                <!-- wp:column {"width":"33.34%"} -->
                                                    <div class="wp-block-column" style="flex-basis: 33.34%">
                                                        <!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                                            <div class="wp-block-group">
                                                                <!-- wp:heading {"fontSize":"normal","level":3, "placeholder": "' . esc_html__( 'Archive', 'taina' ) . '"} -->
                                                                    <h3>' . esc_html__( 'Archive', 'taina' ) . '</h3>
                                                                <!-- /wp:heading -->
                                                                <!-- wp:archives {"showPostCounts":true,"type":"yearly"} /-->
                                                            </div>
                                                        <!-- /wp:group -->
                                                    </div>
                                                <!-- /wp:column -->
                                                <!-- wp:column {"width":"33.33%"} -->
                                                    <div class="wp-block-column" style="flex-basis: 33.33%">
                                                        <!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                                            <div class="wp-block-group">
                                                                <!-- wp:heading {"fontSize":"normal","level":3, "placeholder": "' . esc_html__( 'Categories', 'taina' ) . '"} -->
                                                                    <h3>' . esc_html__( 'Categories', 'taina' ) . '</h3>
                                                                <!-- /wp:heading -->
                                                                <!-- wp:categories {"showPostCounts":true} /-->
                                                            </div>
                                                        <!-- /wp:group -->
                                                    </div>
                                                <!-- /wp:column -->
                                            </div>
                                        <!-- /wp:columns -->
                                    </div>
                                <!-- /wp:group -->'
		)
	);

    // Banner with big text overlay
    register_block_pattern(
        'taina/header',
        array(
            'title'         => esc_html__( 'Header without logo', 'taina' ),
			'categories'    => array( 'taina', 'headings'),
			'viewportWidth' => 1400,
            'content'       => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                                <div class="wp-block-group" style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;">
                                    <!-- wp:site-title {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->
                                    
                                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"4.167%","bottom":"9px","left":"4.167%"},"margin":{"top":"0px","bottom":"0px"}}}} -->
                                    <div class="wp-block-group" style="margin-top: 0px;margin-bottom: 0px;padding-top: 10px;padding-right: 4.167%;padding-bottom: 9px;padding-left: 4.167%;">
                                        <!-- wp:navigation {"ref":172974,"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"},"style":{"typography":{"textTransform":"uppercase","lineHeight":"1.6"},"spacing":{"blockGap":"1.125em"}}} /-->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                                    
                                <!-- wp:group {"style":{"spacing":{"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"className":"is-style-taina-group-align-items_stretch"} -->
                                <div class="wp-block-group is-style-taina-group-align-items_stretch" style="margin-top: 0px; margin-bottom: 0px">
                                    <!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->
                                    <!-- wp:search {"placeholder": "'. esc_html('Search for...' , 'taina') . '", "label":"'. esc_html('Search' , 'taina') . '","showLabel":false,"buttonText":"'. esc_html('Search' , 'taina') . '","buttonUseIcon":true,"borderColor":"background","backgroundColor":"background-alt","textColor":"primary","className":"is-style-taina-collapsable-search"} /-->
                                </div>
                                <!-- /wp:group -->'
        )
    );

    // Banner with big text overlay
    register_block_pattern(
        'taina/header-alt',
        array(
            'title'         => esc_html__( 'Header with logo', 'taina' ),
			'categories'    => array( 'taina', 'headings'),
			'viewportWidth' => 1400,
            'content'       => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"4.167%"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
                                <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:4.167%">
                                    <!-- wp:site-logo /-->
                                
                                    <!-- wp:group {"className":"is-style-taina-group-align-items_stretch","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                                    <div class="wp-block-group is-style-taina-group-align-items_stretch">
                                        <!-- wp:navigation {"ref":172974,"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"},"style":{"typography":{"textTransform":"uppercase","lineHeight":"1.6"},"spacing":{"padding":{"top":"10px","right":"4.167%","bottom":"9px","left":"4.167%"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"1.125em"}}} /-->
                                    
                                        <!-- wp:search {"placeholder": "'. esc_html('Search for...' , 'taina') . '", "label":"'. esc_html('Search' , 'taina') . '","showLabel":false,"buttonText":"'. esc_html('Search' , 'taina') . '","buttonUseIcon":true,"borderColor":"background","backgroundColor":"background-alt","textColor":"primary","className":"is-style-taina-collapsable-search","spacing":{"margin":{"top":"10px"}}} /-->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->'
        )
    );

}