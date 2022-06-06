<?php
/**
 * One-line site header pattern to be used when site logo is available.
 */
return array(
    'title'         => esc_html__( 'Header with logo', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'blockTypes' => array( 'core/template-part/header' ),
    'viewportWidth' => 1400,
    'inserter' => false,
    'content'       => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"4.167%"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
                        <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:4.167%">
                            <!-- wp:site-logo /-->
                        
                            <!-- wp:group {"className":"is-style-taina-group-align-items_stretch","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                            <div class="wp-block-group is-style-taina-group-align-items_stretch">
                                <!-- wp:navigation {"ref":172974,"overlayBackgroundColor":"background-alt","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"},"style":{"typography":{"textTransform":"uppercase","lineHeight":"1.6"},"spacing":{"padding":{"top":"10px","right":"4.167%","bottom":"9px","left":"4.167%"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"1.125em"}}} /-->
                            
                                <!-- wp:search {"placeholder": "'. esc_html('Search for...' , 'taina') . '", "label":"'. esc_html('Search' , 'taina') . '","showLabel":false,"buttonText":"'. esc_html('Search' , 'taina') . '","buttonUseIcon":true,"borderColor":"background","backgroundColor":"background-alt","textColor":"primary","className":"is-style-taina-collapsable-search","spacing":{"margin":{"top":"10px"}}} /-->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->'
);
