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
                                <!-- wp:group {"style":{"spacing":{"blockGap":"1em","padding":{"top":"42px","bottom":"42px","right":"4.167vw","left":"4.167vw"}}},"backgroundColor":"background-alt","textColor":"foreground-alt","layout":{"type":"flex", "orientation": "vertical"}} -->
                                <div class="wp-block-group has-foreground-alt-color has-background-alt-background-color has-text-color has-background" style="padding-top:42px;padding-right:4.167vw;padding-bottom:42px;padding-left:4.167vw">
                                        <!-- wp:heading {"textColor":"primary","fontSize":"medium"} -->
                                            <h2 class="has-primary-color has-text-color has-medium-font-size">' . esc_html__( 'About the author', 'taina' ) . '</h2>
                                        <!-- /wp:heading -->
                                        <!-- wp:post-author {"showAvatar":false,"showBio":true,"style":{"color":{"duotone":["#df834e","#342116"]}}} /-->
                                    </div>
                                <!-- /wp:group -->
                            </div>
                        <!-- /wp:group -->'
);
