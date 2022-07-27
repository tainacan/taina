<?php
/**
 * Collection header when both thumbnail and cover are available
 */
return array(
    'title'         => esc_html__( 'Collection header (thumb and cover)', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'viewportWidth' => 1400,
    'content'       => '<!-- wp:columns {"verticalAlignment":null,"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"4.167%","bottom":"0px","left":"4.167%"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
                        <div class="wp-block-columns alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:4.167%;padding-bottom:0px;padding-left:4.167%">
                            <!-- wp:column {"verticalAlignment":"top","width":"22%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
                            <div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:22%">
                                <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
                                    <figure class="wp-block-image size-large is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/povos_indigenas_do_brasil.jpg" alt="' . esc_attr__( 'Facial illustration of three Brazilian Original People from different tribes. The first one appears twice, showing large adornments in his pout and ears. The second one does not carry any ornament. The third one has a sort of straw hat.', 'taina' ) . '"/></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->    
                            <!-- wp:column {"verticalAlignment":"top","width":"","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}},"layout":{"inherit":false}} -->
                            <div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                <!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/ilustracao_de_povos_indigenas.jpg","focalPoint":{"x":"0.48","y":"0.31"},"customGradient":"linear-gradient(180deg,rgba(7,146,227,0) 79%,var(--wp--preset--color--background)  79%)","contentPosition":"top left","style":{"color":{"duotone":["#262626","#A0303A"]},"spacing":{"padding":{"top":"0px","right":"0%","bottom":"0px","left":"0px"}}}} -->
                                <div class="wp-block-cover has-custom-content-position is-position-top-left" style="padding-top:0px;padding-right:0%;padding-bottom:0px;padding-left:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(7,146,227,0) 79%,var(--wp--preset--color--background)  79%)"></span>
                                    <img class="wp-block-cover__image-background" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/ilustracao_de_povos_indigenas.jpg" style="object-position:48% 31%" data-object-fit="cover" data-object-position="48% 31%"/>
                                    <div class="wp-block-cover__inner-container">
                                        <!-- wp:image {"width":754,"height":236,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
                                            <figure class="wp-block-image size-large is-resized is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/ilustracao_de_povos_indigenas.jpg" alt="' . esc_attr__( 'Illustration of three Brazilian Original People from different tribes. The first one has vertical lines painted over his body and carries a spear with a human head on top of it. The second one is a woman with a baby in her arms. The last one has what looks like a rowing in his arms. His skin has paintings that reming a camouflage for the forest.', 'taina' ) . '" width="754" height="236"/></figure>
                                        <!-- /wp:image -->
                                        
                                        <!-- wp:group {"style":{"spacing":{"blockGap":"1em"}},"backgroundColor":"background-alt","textColor":"foreground-alt","layout":{"inherit":true}} -->
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
                                </div>
                                <!-- /wp:cover -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->'
);
