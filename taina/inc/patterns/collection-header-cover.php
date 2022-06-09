<?php
/**
 * Collection header when only cover image is available
 */
return array(
    'title'         => esc_html__( 'Collection header (only cover)', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'viewportWidth' => 1400,
    'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"4.167%","left":"4.167%"}}}} -->
                        <div class="wp-block-group alignfull" style="padding-right:4.167%;padding-left:4.167%">
                            <!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/indios_puri.jpg","focalPoint":{"x":"0.26","y":"0.50"},"customGradient":"linear-gradient(180deg,rgba(7,146,227,0) 79%,var(--wp--preset--color--background)  79%)","contentPosition":"center center","style":{"color":{"duotone":["#262626","#A0303A"]},"spacing":{"padding":{"top":"0px","right":"0%","bottom":"0px","left":"0px"}}}} -->
                            <div class="wp-block-cover" style="padding-top:0px;padding-right:0%;padding-bottom:0px;padding-left:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(7,146,227,0) 79%,var(--wp--preset--color--background)  79%)"></span>
                                <img class="wp-block-cover__image-background" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/indios_puri.jpg" style="object-position:26% 50%" data-object-fit="cover" data-object-position="26% 50%"/>
                                <div class="wp-block-cover__inner-container">
                                    <!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"}}} -->
                                    <div class="wp-block-columns" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                        <!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                                        <div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:60%">
                                            <!-- wp:image {"width":640,"height":304,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
                                                <figure class="wp-block-image size-large is-resized is-style-default"><img width="640" height="304" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/indios_puri.jpg" alt="' . esc_attr__( 'Illustration “Les Puris dans leurs forêts” by Jean Baptiste Benoit, depicting members of the Puris tribe walking in the forest. Three men are carring arrows while two women have babies with them.', 'taina' ) .'"/></figure>
                                            <!-- /wp:image -->
                                        </div>
                                        <!-- /wp:column -->
                                    </div>
                                    <!-- /wp:columns -->
                                    <!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
                                    <div class="wp-block-columns" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                        <!-- wp:column {"width":"25%","backgroundColor":"background"} -->
                                            <div class="wp-block-column has-background-background-color has-background" style="flex-basis:25%">
                                            </div>
                                        <!-- /wp:column -->
                                        <!-- wp:column {"width":""} -->
                                        <div class="wp-block-column">
                                            <!-- wp:group {"style":{"spacing":{"blockGap":"1em"}},"backgroundColor":"background-alt","textColor":"foreground-alt","layout":{"inherit":false}} -->
                                            <div class="wp-block-group has-background-alt-background-color has-background has-foreground-alt-color has-text-color">
                                                <!-- wp:heading {"textColor":"primary"} -->
                                                <h2 class="has-primary-color has-text-color">' . esc_html__( 'Brazilian Original People', 'taina' ) . '</h2>
                                                <!-- /wp:heading -->
                                                <!-- wp:paragraph {"textColor":"foreground"} -->
                                                <p class="has-foreground-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                <!-- /wp:paragraph -->
                                            </div>
                                            <!-- /wp:group -->
                                        </div>
                                        <!-- /wp:column -->
                                        <!-- wp:column {"width":"25%"} -->
                                        <div class="wp-block-column" style="flex-basis:25%">
                                        </div>
                                        <!-- /wp:column -->
                                    </div>
                                    <!-- /wp:columns -->
                                </div>
                            </div>
                            <!-- /wp:cover -->
                        </div>
                        <!-- /wp:group -->'
);
