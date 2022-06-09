<?php
/**
 * Archive headers with text as background style
 */
return array(
    'title'         => esc_html__( 'Archive header (dynamic)', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'inserter'      => false,
    'viewportWidth' => 1400,
    'content'       => '<!-- wp:cover {"dimRatio":20,"contentPosition":"center center","isDark":false,"align":"full","className":"is-style-taina-cover-title-as-background","style":{"spacing":{"padding":{"top":"120px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-cover alignfull is-light is-style-taina-cover-title-as-background" style="padding-top:120px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:13em"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span>
                            <div class="wp-block-cover__inner-container">
                                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":true}} -->
                                <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                    <!-- wp:group {"style":{"spacing":{"blockGap":"1em","padding":{"top":"42px","right":"4.167vw","bottom":"42px","left":"4.167vw"}}},"backgroundColor":"background-alt","textColor":"foreground","layout":{"inherit":false}} -->
                                    <div class="wp-block-group has-foreground-color has-background-alt-background-color has-text-color has-background" style="padding-top:42px;padding-right:4.167vw;padding-bottom:42px;padding-left:4.167vw">
                                        <!-- wp:query-title {"type":"archive"} /-->
                                        <!-- wp:term-description /-->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                        </div>
                        <!-- /wp:cover -->'
);
