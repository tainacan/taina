<?php
/**
 * Collection header when only thumbnail is present
 */
return array(
    'title'         => esc_html__( 'Collection header (only thumbnail)', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'viewportWidth' => 1400,
    'content'       => '<!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"spacing":{"padding":{"top":"0px","right":"4.167%","bottom":"0px","left":"4.167%"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
                        <div class="wp-block-columns alignfull are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:4.167%;padding-bottom:0px;padding-left:4.167%">
                            <!-- wp:column {"verticalAlignment":"center","width":"33%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
                            <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:33%">
                                <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"className":"is-style-taina-group-align-items_stretch","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group is-style-taina-group-align-items_stretch" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                    <!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/ornamentos_utensilios_e_armas_dos_indios_camacas.jpg","dimRatio":0,"focalPoint":{"x":"0.26","y":"0.50"},"minHeight":100,"minHeightUnit":"%","contentPosition":"top left","isDark":false,"style":{"color":{"duotone":["#262626","#A0303A"]},"spacing":{"padding":{"top":"0px","right":"0%","bottom":"0px","left":"2.4vw"}}}} -->
                                    <div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-top:0px;padding-right:0%;padding-bottom:0px;padding-left:2.4vw;min-height:100%"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
                                        <img class="wp-block-cover__image-background" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/ornamentos_utensilios_e_armas_dos_indios_camacas.jpg" style="object-position:26% 50%" data-object-fit="cover" data-object-position="26% 50%"/>
                                        <div class="wp-block-cover__inner-container">
                                        </div>
                                    </div>
                                    <!-- /wp:cover -->
                                    <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
                                        <figure class="wp-block-image size-large is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/ornamentos_utensilios_e_armas_dos_indios_camacas.jpg" alt="' . esc_attr__( 'Illustration depicting several artifacts belonging to Brazilian Indigeneous. They include a bow and arrows, a war bonnet made with feathers and other ornaments.', 'taina' ) . '"/></figure>
                                    <!-- /wp:image -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:column -->    
                                <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"0px","right":"0vw","bottom":"0px","left":"0px"},"blockGap":"0px"}},"layout":{"inherit":false}} -->
                                <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0vw;padding-bottom:0px;padding-left:0px">
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
                            <!-- wp:column {"width":"8.3vw"} -->
                            <div class="wp-block-column" style="flex-basis:8.3vw">
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->'
);
