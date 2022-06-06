<?php
/**
 * Widgets sidebar, a set of links to be used in a sidebar template
 */
return array(
    'title'         => esc_html__( 'Widgets sidebar', 'taina' ),
    'categories'    => array( 'taina'),
    'blockTypes' => array( 'core/template-part/aside' ),
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
);
