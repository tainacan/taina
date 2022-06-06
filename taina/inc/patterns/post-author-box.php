<?php
/**
 * Post author box, with image, name and description
 */
return array(
    'title'         => esc_html__( 'Post author box', 'taina' ),
    'categories'    => array( 'taina'),
    'viewportWidth' => 980,
    'content'       => '<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                            <div class="wp-block-group"><!-- wp:avatar {"size":240,"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"color":{"duotone":["#262626","#A0303A"]}}} /-->
                                <!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"backgroundColor":"background-alt","layout":{"type":"flex","orientation":"vertical"}} -->
                                    <div class="wp-block-group has-background-alt-background-color has-background">
                                        <!-- wp:heading {"textColor":"primary","fontSize":"medium"} -->
                                            <h2 class="has-primary-color has-text-color has-medium-font-size">' . esc_html__( 'About the author', 'taina' ) . '</h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:post-author {"showAvatar":false,"showBio":true,"style":{"color":{"duotone":["#df834e","#342116"]}}} /-->
                                    </div>
                                <!-- /wp:group -->
                            </div>
                        <!-- /wp:group -->'
);
