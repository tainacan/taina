<?php
/**
 * Term header when no thumbnail is present. Uses title as background style.
 */
return array(
    'title'         => esc_html__( 'Term header (only text)', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'viewportWidth' => 1400,
    'content'       => '<!-- wp:cover {"dimRatio":20,"minHeight":13,"minHeightUnit":"em","contentPosition":"center center","isDark":false,"align":"full","className":"is-style-taina-cover-title-as-background","style":{"spacing":{"padding":{"top":"120px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-cover alignfull is-light is-style-taina-cover-title-as-background" style="padding-top:120px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:13em"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span>
                            <div class="wp-block-cover__inner-container">
                                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":true}} -->
                                <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                    <!-- wp:group {"style":{"spacing":{"blockGap":"1em","padding":{"top":"42px","right":"4.167vw","bottom":"42px","left":"4.167vw"}}},"backgroundColor":"background-alt","textColor":"foreground","layout":{"inherit":false}} -->
                                    <div class="wp-block-group has-foreground-color has-background-alt-background-color has-text-color has-background" style="padding-top:42px;padding-right:4.167vw;padding-bottom:42px;padding-left:4.167vw">
                                        <!-- wp:heading -->
                                            <h2>Karajá</h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:paragraph -->
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                        </div>
                        <!-- /wp:cover -->'
);
