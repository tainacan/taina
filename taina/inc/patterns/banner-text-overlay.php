<?php
/**
 * Banner with duotone overlay and white text
 */
return array(
    'title'         => esc_html__( 'Banner with text overlay', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'viewportWidth' => 1400,
    'content'       => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/cerimonia_indigena.jpg","dimRatio":0,"focalPoint":{"x":"0.66","y":"0.38"},"minHeight":464,"minHeightUnit":"px","isDark":true,"align":"full","style":{"color":{"duotone":["#262626","#A0303A"]}}} -->
                            <div class="wp-block-cover alignfull is-dark" style="min-height:464px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-dim-0"></span>
                                <img class="wp-block-cover__image-background" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/cerimonia_indigena.jpg" style="object-position:66% 38%" data-object-fit="cover" data-object-position="66% 38%"/>
                                <div class="wp-block-cover__inner-container">
                                    <!-- wp:group {"layout":{"inherit":true}} -->
                                        <div class="wp-block-group">
                                        <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"800"},"color":{"text":"#ffffff"}},"fontSize":"x-large"} -->
                                            <h2 class="has-text-align-left has-text-color has-x-large-font-size" style="color:#ffffff;font-style:normal;font-weight:800">' . esc_html__( 'Brazilian Original People', 'taina' ) . '</h2>
                                        <!-- /wp:heading -->
                                        </div>
                                    <!-- /wp:group -->
                                </div>
                            </div>
                        <!-- /wp:cover -->'
);
