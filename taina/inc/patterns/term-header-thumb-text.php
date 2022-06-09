<?php
/**
 * Term header when a thumbnail is present. Uses title as background style.
 */
return array(
    'title'         => esc_html__( 'Term header (thumbnail and text)', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'viewportWidth' => 1400,
    'content'       => '<!-- wp:cover {"dimRatio":20,"contentPosition":"center center","isDark":false,"align":"full","className":"is-style-taina-cover-title-as-background","style":{"spacing":{"padding":{"top":"86px","right":"0px","bottom":"0px","left":"0px"}}}} -->
                        <div class="wp-block-cover alignfull is-light is-style-taina-cover-title-as-background" style="padding-top:86px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                            <span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span>
                            <div class="wp-block-cover__inner-container">
                                <!-- wp:columns {"style":{"spacing":{"padding":{"top":"42px","bottom":"42px","right":"4.167%","left":"4.167%"},"blockGap":"0px"}}} -->
                                <div class="wp-block-columns" style="padding-top:42px;padding-right:4.167%;padding-bottom:42px;padding-left:4.167%">
                                    <!-- wp:column {"verticalAlignment":"top","width":"37.5%"} -->
                                    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:37.5%">
                                        <!-- wp:image {"id":185895,"sizeSlug":"full","linkDestination":"none"} -->
                                        <figure class="wp-block-image size-full">
                                            <img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/indios_guaycuru.jpg" alt="' . esc_html__( 'Painting of a brazilian woman of the Guaycuru tribe. She has a diadem and a necklace in the shape of some animal. Her face is painted with lines that remind flowers and leaves.', 'taina' ) . '"/>
                                        </figure>
                                        <!-- /wp:image -->
                                    </div>
                                    <!-- /wp:column -->
                                    <!-- wp:column {"verticalAlignment":"top","width":""} -->
                                    <div class="wp-block-column is-vertically-aligned-top">
                                        <!-- wp:group {"style":{"spacing":{"blockGap":"1em","padding":{"top":"42px","right":"4.167vw","bottom":"42px","left":"4.167vw"}}},"backgroundColor":"background-alt","textColor":"foreground","layout":{"inherit":false}} -->
                                        <div class="wp-block-group has-foreground-color has-background-alt-background-color has-text-color has-background" style="padding-top:42px;padding-right:4.167vw;padding-bottom:42px;padding-left:4.167vw">
                                            <!-- wp:heading -->
                                                <h2>Guaycuru</h2>
                                            <!-- /wp:heading -->
                                            <!-- wp:paragraph -->
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->
                                    </div>
                                    <!-- /wp:column -->
                                </div>
                                <!-- /wp:columns -->
                            </div>
                        </div>
                        <!-- /wp:cover -->'
);
