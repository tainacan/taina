<?php
/**
 * A simple card where buttons can be displayed outside of its inner padding
 */
return array(
    'title'         => esc_html__( 'Paddingless card', 'taina' ),
    'categories'    => array( 'taina', 'buttons'),
    'viewportWidth' => 690,
    'content'       => '<!-- wp:group {"style":{"spacing":{"blockGap":"1em","padding":{"top":"42px","bottom":"0px","left":"0vw","right":"0vw"}}},"backgroundColor":"background-alt","textColor":"foreground","layout":{"inherit":false}} -->
                        <div class="wp-block-group has-foreground-color has-background-alt-background-color has-text-color has-background" style="padding-top:42px;padding-right:0vw;padding-bottom:0px;padding-left:0vw">
                            <!-- wp:group {"style":{"spacing":{"padding":{"right":"4.167vw","left":"4.167vw","bottom":"1.5em"},"blockGap":"16px"}},"layout":{"inherit":false}} -->
                            <div class="wp-block-group" style="padding-right:4.167vw;padding-bottom:1.5em;padding-left:4.167vw">
                                <!-- wp:heading -->
                                    <h2>' . esc_html__( 'Our digital archive', 'taina' ) . '</h2>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:group {"style":{"spacing":{"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"className":"is-style-default","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                            <div class="wp-block-group is-style-default" style="margin-top:0px;margin-bottom:0px">
                                <!-- wp:social-links {"size":"has-large-icon-size","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}}} -->
                                <ul class="wp-block-social-links has-large-icon-size" style="margin-top:0px;margin-bottom:0px">
                                    <!-- wp:social-link {"url":"https://telegram.org","service":"telegram"} /-->
                                    <!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /--> 
                                    <!-- wp:social-link {"url":"https://wordpress.org/","service":"wordpress"} /-->
                                </ul>
                                <!-- /wp:social-links -->
                                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
                                <div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px">
                                    <!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"0.65em","bottom":"0.65em","left":"1em","right":"1em"}}}} -->
                                    <div class="wp-block-button">
                                        <a class="wp-block-button__link" style="border-radius:0px;padding-top:0.65em;padding-right:1em;padding-bottom:0.65em;padding-left:1em">' . esc_html__( 'See more...', 'taina' ) . '</a>
                                    </div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->'
);
