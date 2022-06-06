<?php
/**
 * Collection header when both thumbnail and cover are available
 */
return array(
    'title'         => esc_html__( 'Collection header (thumb and cover)', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'viewportWidth' => 1400,
    'content'       => '<!-- wp:columns {"verticalAlignment":null,"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}}} -->
                        <div class="wp-block-columns alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                            <!-- wp:column {"verticalAlignment":"top","width":"22%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
                            <div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:22%">
                                <!-- wp:image {"id":185610,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
                                    <figure class="wp-block-image size-large is-style-default"><img src="http://localhost/wp-content/uploads/2022/06/g312-1280x1280.png" alt="" class="wp-image-185610"/></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->    
                            <!-- wp:column {"verticalAlignment":"top","width":"","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}},"layout":{"inherit":false}} -->
                            <div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
                                <!-- wp:cover {"url":"http://localhost/wp-content/uploads/2022/06/g74.png","id":185611,"focalPoint":{"x":"0.26","y":"0.50"},"customGradient":"linear-gradient(180deg,rgba(7,146,227,0) 79%,var(--wp--preset--color--background)  79%)","contentPosition":"top left","style":{"color":{"duotone":["#262626","#A0303A"]},"spacing":{"padding":{"top":"0px","right":"0%","bottom":"0px","left":"0px"}}}} -->
                                <div class="wp-block-cover has-custom-content-position is-position-top-left" style="padding-top:0px;padding-right:0%;padding-bottom:0px;padding-left:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(7,146,227,0) 79%,var(--wp--preset--color--background)  79%)"></span><img class="wp-block-cover__image-background wp-image-185611" alt="" src="http://localhost/wp-content/uploads/2022/06/g74.png" style="object-position:26% 50%" data-object-fit="cover" data-object-position="26% 50%"/>
                                    <div class="wp-block-cover__inner-container">
                                        <!-- wp:image {"id":185611,"width":781,"height":244,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
                                            <figure class="wp-block-image size-large is-resized is-style-default"><img src="http://localhost/wp-content/uploads/2022/06/g74-1280x400.png" alt="" class="wp-image-185611" width="781" height="244"/></figure>
                                        <!-- /wp:image -->
                                        
                                        <!-- wp:group {"style":{"spacing":{"blockGap":"1em"}},"backgroundColor":"background-alt","textColor":"foreground-alt","layout":{"inherit":true}} -->
                                        <div class="wp-block-group has-background-alt-background-color has-background has-foreground-alt-color has-text-color">
                                            <!-- wp:heading {"textColor":"primary"} -->
                                                <h2 class="has-primary-color has-text-color">Viagens pelo mundo</h2>
                                            <!-- /wp:heading -->
                                            
                                            <!-- wp:paragraph {"textColor":"foreground"} -->
                                                <p class="has-foreground-color has-text-color">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, seddiam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper</p>
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
