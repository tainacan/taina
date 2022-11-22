<?php

/**
 * Block "Banners" patterns
 * 
 * This function helps generate the "banners" block patterns that may be used
 * in dynamic instances, such as the items collection and term header banners.
 *
 * @param string    $title - The heading title content of the banner
 * @param array     $args  - An array of options containing more text and images 
 * 
 * @return string A block pattern containing diferent set of cover and image blocks for a nice banner.
 */
function get_header_banner_pattern($title, $args = array()) {

    $defaults = array(
        'description' => false,
        'thumbnail' => false,
        'thumbnail_url' => false,
        'cover' => false,
        'cover_url' => false
    );
    $args = wp_parse_args( $args, $defaults );

    $description = $args['description'];
    $thumbnail = $args['thumbnail'];
    $thumbnail_url = $args['thumbnail_url'];
    $cover = $args['cover'];
    $cover_url = $args['cover_url'];

    if ($cover && $cover_url && $thumbnail) {
    
        return 
            '<!-- wp:columns {"verticalAlignment":null,"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"4.167%","bottom":"0px","left":"4.167%"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
            <div class="wp-block-columns alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:4.167%;padding-bottom:0px;padding-left:4.167%">
                <!-- wp:column {"verticalAlignment":"top","width":"22%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
                <div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:22%">
                    <!-- wp:image {"linkDestination":"none"} -->
                        <figure class="wp-block-image">' . $thumbnail . '</figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->    
                <!-- wp:column {"verticalAlignment":"top","width":"","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}},"layout":{"inherit":false}} -->
                <div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                    <!-- wp:cover {"url":"' . $cover_url . '","focalPoint":{"x":"0.48","y":"0.31"},"customGradient":"linear-gradient(180deg,rgba(7,146,227,0) 79%,var(--wp--preset--color--background)  79%)","contentPosition":"top left","style":{"color":{"duotone":["#262626","#A0303A"]},"spacing":{"padding":{"top":"0px","right":"0%","bottom":"0px","left":"0px"}}}} -->
                    <div class="wp-block-cover has-custom-content-position is-position-top-left" style="padding-top:0px;padding-right:0%;padding-bottom:0px;padding-left:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(7,146,227,0) 79%,var(--wp--preset--color--background)  79%)"></span>
                        <img class="wp-block-cover__image-background" alt="" src="' . $cover_url . '" style="object-position:48% 31%" data-object-fit="cover" data-object-position="48% 31%"/>
                        <div class="wp-block-cover__inner-container">
                            <!-- wp:image {"width":754,"height":236,"sizeSlug":"large","linkDestination":"none","className":"is-resized is-style-default"} -->
                                <figure class="wp-block-image">' . $cover. '</figure>
                            <!-- /wp:image -->
                        
                            <!-- wp:group {"style":{"spacing":{"blockGap":"1em","padding":{"top":"42px","bottom":"42px","right":"4.167vw","left":"4.167vw"}}},"backgroundColor":"background-alt","textColor":"foreground-alt","layout":{"inherit":true,"type":"constrained"}} -->
                            <div class="wp-block-group has-foreground-alt-color has-background-alt-background-color has-text-color has-background" style="padding-top:42px;padding-right:4.167vw;padding-bottom:42px;padding-left:4.167vw">
                                ' . (
                                        $title ?
                                        '<!-- wp:heading {"textColor":"primary"} -->
                                            <h2 class="has-primary-color has-text-color">' . $title . '</h2>
                                        <!-- /wp:heading -->'
                                        : ''
                                ) . (
                                        $description ? 
                                        '<!-- wp:paragraph {"textColor":"foreground"} -->
                                            <p class="has-foreground-color has-text-color">' . $description . '</p>
                                        <!-- /wp:paragraph -->'
                                        : ''
                                    )
                                . '
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->';

    } else if ( $cover && $cover_url ) {
        
        return 
            '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"4.167%","left":"4.167%"}}}} -->
            <div class="wp-block-group alignfull" style="padding-right:4.167%;padding-left:4.167%">
                <!-- wp:cover {"url":"' . $cover_url . '","focalPoint":{"x":"0.26","y":"0.50"},"customGradient":"linear-gradient(180deg,rgba(7,146,227,0) 79%,var(--wp--preset--color--background)  79%)","contentPosition":"center center","style":{"color":{"duotone":["#262626","#A0303A"]},"spacing":{"padding":{"top":"0px","right":"0%","bottom":"0px","left":"0px"}}}} -->
                <div class="wp-block-cover" style="padding-top:0px;padding-right:0%;padding-bottom:0px;padding-left:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(7,146,227,0) 79%,var(--wp--preset--color--background)  79%)"></span>
                    <img class="wp-block-cover__image-background" alt="" src="' . $cover_url . '" style="object-position:26% 50%" data-object-fit="cover" data-object-position="26% 50%"/>
                    <div class="wp-block-cover__inner-container">
                        <!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"}}} -->
                        <div class="wp-block-columns" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                            <!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                            <div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:60%">
                                <!-- wp:image {"width":640,"height":304,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
                                    <figure class="wp-block-image size-large is-resized is-style-default">' . $cover . '</figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                        <!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
                        <div class="wp-block-columns" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                            <!-- wp:column {"width":"25%","backgroundColor":"background"} -->
                                <div class="wp-block-column has-background-background-color has-background" style="flex-basis:25%">
                                </div>
                            <!-- /wp:column -->
                            <!-- wp:column {"width":""} -->
                            <div class="wp-block-column">
                                <!-- wp:group {"style":{"spacing":{"blockGap":"1em","padding":{"top":"42px","bottom":"42px","right":"4.167vw","left":"4.167vw"}}},"backgroundColor":"background-alt","textColor":"foreground-alt","layout":{"inherit":true,"type":"constrained"}} -->
                                <div class="wp-block-group has-foreground-alt-color has-background-alt-background-color has-text-color has-background" style="padding-top:42px;padding-right:4.167vw;padding-bottom:42px;padding-left:4.167vw">
                                ' . (
                                        $title ?
                                        '<!-- wp:heading {"textColor":"primary"} -->
                                        <h2 class="has-primary-color has-text-color">' . $title . '</h2>
                                        <!-- /wp:heading -->'
                                        : ''    
                                ) . (
                                    $description ?
                                    '<!-- wp:paragraph {"textColor":"foreground"} -->
                                    <p class="has-foreground-color has-text-color">' . $description . '</p>
                                    <!-- /wp:paragraph -->'
                                    : ''
                                ) . '
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:column -->
                            <!-- wp:column {"width":"25%"} -->
                            <div class="wp-block-column" style="flex-basis:25%">
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->';
    
    } else if ($thumbnail && $thumbnail_url) {

        return  
            '<!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"spacing":{"padding":{"top":"0px","right":"4.167%","bottom":"0px","left":"4.167%"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
            <div class="wp-block-columns alignfull are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:4.167%;padding-bottom:0px;padding-left:4.167%">
                <!-- wp:column {"verticalAlignment":"center","width":"33%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
                <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:33%">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"className":"is-style-taina-group-align-items_stretch","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group is-style-taina-group-align-items_stretch" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                        <!-- wp:cover {"url":"' . $thumbnail_url . '","dimRatio":0,"focalPoint":{"x":"0.26","y":"0.50"},"minHeight":100,"minHeightUnit":"%","contentPosition":"top left","isDark":false,"style":{"color":{"duotone":["#262626","#A0303A"]},"spacing":{"padding":{"top":"0px","right":"0%","bottom":"0px","left":"2.4vw"}}}} -->
                        <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0px;padding-right:0%;padding-bottom:0px;padding-left:2.4vw;min-height:100%"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
                            <img class="wp-block-cover__image-background" alt="" src="' . $thumbnail_url . '" style="object-position:26% 50%" data-object-fit="cover" data-object-position="26% 50%"/>
                            <div class="wp-block-cover__inner-container">
                            </div>
                        </div>
                        <!-- /wp:cover -->
                        <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
                            <figure class="wp-block-image size-large is-style-default">' . $thumbnail . '</figure>
                        <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->    
                    <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"0px","right":"0vw","bottom":"0px","left":"0px"},"blockGap":"0px"}},"layout":{"inherit":false}} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0vw;padding-bottom:0px;padding-left:0px">
                    <!-- wp:group {"style":{"spacing":{"blockGap":"1em"}},"backgroundColor":"background-alt","textColor":"foreground-alt","layout":{"inherit":false}} -->
                    <div class="wp-block-group has-background-alt-background-color has-background has-foreground-alt-color has-text-color">
                        ' . (
                            $title ? 
                                '<!-- wp:heading {"textColor":"primary"} -->
                                <h2 class="has-primary-color has-text-color">' . $title . '</h2>
                                <!-- /wp:heading -->'
                                : ''
                        ) . (
                            $description ?
                            '<!-- wp:paragraph {"textColor":"foreground"} -->
                                <p class="has-foreground-color has-text-color">' . $description . '</p>
                            <!-- /wp:paragraph -->'
                            : ''
                        ) . '
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
                <!-- wp:column {"width":"8.3vw"} -->
                <div class="wp-block-column" style="flex-basis:8.3vw">
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->';

    } else if ( $thumbnail ) {

        return
            '<!-- wp:cover {"dimRatio":20,"minHeight":13,"minHeightUnit":"em","contentPosition":"center center","isDark":false,"align":"full","className":"is-style-taina-cover-title-as-background","style":{"spacing":{"padding":{"top":"86px","right":"0px","bottom":"0px","left":"0px"}}}} -->
            <div class="wp-block-cover alignfull is-light is-style-taina-cover-title-as-background" style="padding-top:86px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:13em"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span>
                <div class="wp-block-cover__inner-container">
                    <!-- wp:columns {"style":{"spacing":{"padding":{"top":"42px","bottom":"42px","right":"4.167%","left":"4.167%"},"blockGap":"0px"}}} -->
                    <div class="wp-block-columns" style="padding-top:42px;padding-right:4.167%;padding-bottom:42px;padding-left:4.167%">
                        <!-- wp:column {"verticalAlignment":"top","width":"37.5%"} -->
                        <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:37.5%">
                            <!-- wp:image {"id":185895,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full">' . $thumbnail . '</figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column {"verticalAlignment":"top","width":""} -->
                        <div class="wp-block-column is-vertically-aligned-top">
                            <!-- wp:group {"style":{"spacing":{"blockGap":"1em","padding":{"top":"42px","right":"4.167vw","bottom":"42px","left":"4.167vw"}}},"backgroundColor":"background-alt","textColor":"foreground","layout":{"inherit":false}} -->
                            <div class="wp-block-group has-foreground-color has-background-alt-background-color has-text-color has-background" style="padding-top:42px;padding-right:4.167vw;padding-bottom:42px;padding-left:4.167vw">
                            ' . (
                                $title ? 
                                    '<!-- wp:heading -->
                                    <h2>' . $title . '</h2>
                                    <!-- /wp:heading -->'
                                    : ''
                            ) . (
                                $description ?
                                '<!-- wp:paragraph -->
                                    <p>' . $description . '</p>
                                <!-- /wp:paragraph -->'
                                : ''
                            ) . '
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
            </div>
            <!-- /wp:cover -->';

    } else {

        return 
            '<!-- wp:cover {"dimRatio":20,"minHeight":13,"minHeightUnit":"em","contentPosition":"center center","isDark":false,"align":"full","className":"is-style-taina-cover-title-as-background","style":{"spacing":{"padding":{"top":"120px","right":"0px","bottom":"0px","left":"0px"}}}} -->
            <div class="wp-block-cover alignfull is-light is-style-taina-cover-title-as-background" style="padding-top:120px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:13em"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span>
                <div class="wp-block-cover__inner-container">
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":true}} -->
                    <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                        <!-- wp:group {"style":{"spacing":{"blockGap":"1em","padding":{"top":"42px","right":"4.167vw","bottom":"42px","left":"4.167vw"}}},"backgroundColor":"background-alt","textColor":"foreground","layout":{"inherit":false}} -->
                        <div class="wp-block-group has-foreground-color has-background-alt-background-color has-text-color has-background" style="padding-top:42px;padding-right:4.167vw;padding-bottom:42px;padding-left:4.167vw">
                        ' . (
                            $title ? 
                                '<!-- wp:heading -->
                                <h2>' . $title . '</h2>
                                <!-- /wp:heading -->'
                                : ''
                        ) . (
                            $description ?
                            '<!-- wp:paragraph -->
                                <p>' . $description . '</p>
                            <!-- /wp:paragraph -->'
                            : ''
                        ) . '
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->';
    }
}