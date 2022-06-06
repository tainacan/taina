<?php
/**
 * Widgets footer, a set of links to be used in the footer middle row
 */
return array(
    'title'         => esc_html__( 'Widgets footer', 'taina' ),
    'categories'    => array( 'taina'),
    'blockTypes' => array( 'core/template-part/footer' ),
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
);
