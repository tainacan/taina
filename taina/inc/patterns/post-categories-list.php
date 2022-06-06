<?php
/**
 * Post categories list, including a label
 */
return array(
    'title'         => esc_html__( 'Post categories list', 'taina' ),
    'categories'    => array( 'taina'),
    'viewportWidth' => 980,
    'content'       => '<!-- wp:group {"layout":{"inherit":true}} -->
                            <div class="wp-block-group">
                                <!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                                <div class="wp-block-group">
                                    <!-- wp:heading {"textColor":"primary","fontSize":"medium"} -->
                                        <h2 class="has-primary-color has-text-color has-medium-font-size">' . esc_html__( 'Categories', 'taina' ) . ':</h2>
                                    <!-- /wp:heading -->
                                
                                    <!-- wp:post-terms {"term":"category"} /-->
                                </div>
                                <!-- /wp:group -->
                            </div>
                        <!-- /wp:group -->'
);
