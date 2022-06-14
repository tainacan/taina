<?php
/**
 * Two-lines site header pattern, to be used when Site title and Description are available instead of logo
 */
return array(
    'title'         => esc_html__( 'Header without logo', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'blockTypes' => array( 'core/template-part/header' ),
    'viewportWidth' => 1400,
    'inserter' => false,
    'content'       => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"is-style-taina-group-align-items_stretch"} -->
                        <div class="wp-block-group is-style-taina-group-align-items_stretch" style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;">
                            <!-- wp:site-title {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->
                            <!-- wp:navigation {"ref":172974,"overlayBackgroundColor":"background-alt","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"},"style":{"typography":{"textTransform":"uppercase","lineHeight":"1.6"},"spacing":{"blockGap":"1.125em"}}} /-->
                        </div>
                        <!-- /wp:group -->
                            
                        <!-- wp:group {"style":{"spacing":{"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"is-style-taina-group-align-items_stretch"} -->
                        <div class="wp-block-group is-style-taina-group-align-items_stretch" style="margin-top: 0px; margin-bottom: 0px">
                            <!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"0px","right":"3,125em","bottom":"0px","left":"0px"}}}} /-->
                            <!-- wp:search {"placeholder": "'. esc_html('Search for...' , 'taina') . '", "label":"'. esc_html('Search' , 'taina') . '","showLabel":false,"buttonText":"'. esc_html('Search' , 'taina') . '","buttonUseIcon":true,"borderColor":"background","backgroundColor":"background-alt","textColor":"primary","className":"is-style-taina-collapsable-search"} /-->
                        </div>
                        <!-- /wp:group -->'
);
