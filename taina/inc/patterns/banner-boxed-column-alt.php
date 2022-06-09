<?php
/**
 * Banner with a boxed column that goes out of the cover (alternative version)
 */
return array(
    'title'         => esc_html__( 'Banner with boxed column (variation)', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'viewportWidth' => 1400,
    'content'       => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/ceramicas_indigenas.jpg","customGradient":"linear-gradient(0deg,var(--wp--preset--color--background)  15%,rgba(255,255,225,0) 15%,rgba(255,255,255,0) 85%,var(--wp--preset--color--background)  85%)","align":"full","style":{"color":{"duotone":["#262626","#A0303A"]}}} -->
                            <div class="wp-block-cover alignfull"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,var(--wp--preset--color--background)  15%,rgba(255,255,225,0) 15%,rgba(255,255,255,0) 85%,var(--wp--preset--color--background)  85%)"></span>
                                <img class="wp-block-cover__image-background" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/ceramicas_indigenas.jpg" data-object-fit="cover"/>
                                <div class="wp-block-cover__inner-container">
                                    <!-- wp:group {"layout":{"inherit":true}} -->
                                        <div class="wp-block-group">
                                            <!-- wp:columns {"verticalAlignment":"center"} -->
                                                <div class="wp-block-columns are-vertically-aligned-center">
                                                    <!-- wp:column {"verticalAlignment":"center","width":"380px","style":{"spacing":{"padding":{"top":"84px","right":"42px","bottom":"84px","left":"42px"},"blockGap":"1rem"}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":false}} -->
                                                        <div class="wp-block-column is-vertically-aligned-center has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:84px;padding-right:42px;padding-bottom:84px;padding-left:42px;flex-basis:380px">
                                                            <!-- wp:heading {"level":5} -->
                                                                <h5>Lorem ipsum dolor sit amet, const ectetuer apiscing</h5>
                                                            <!-- /wp:heading -->
                                                            
                                                            <!-- wp:paragraph -->
                                                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                            <!-- /wp:paragraph -->
                                                        </div>
                                                    <!-- /wp:column -->        
                                                    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
                                                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"></div>
                                                    <!-- /wp:column -->
                                                </div>
                                            <!-- /wp:columns -->
                                        </div>
                                    <!-- /wp:group -->
                                </div>
                            </div>
                        <!-- /wp:cover -->'
);
