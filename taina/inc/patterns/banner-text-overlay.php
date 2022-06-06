<?php
/**
 * Banner with duotone overlay and white text
 */
return array(
    'title'         => esc_html__( 'Banner with text overlay', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'viewportWidth' => 1400,
    'content'       => '<!-- wp:cover {"url":"http://localhost/wp-content/uploads/2022/04/image-2-1280x854.png","id":184325,"dimRatio":0,"focalPoint":{"x":"0.66","y":"0.27"},"minHeight":464,"minHeightUnit":"px","isDark":true,"align":"full","style":{"color":{"duotone":["#262626","#A0303A"]}}} -->
                            <div class="wp-block-cover alignfull is-dark" style="min-height:464px">
                                <span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-dim-0"></span>
                                <img class="wp-block-cover__image-background wp-image-184325" alt="" src="http://localhost/wp-content/uploads/2022/04/image-2-1280x854.png" style="object-position:66% 27%" data-object-fit="cover" data-object-position="66% 27%"/>
                                <div class="wp-block-cover__inner-container">
                                    <!-- wp:group {"layout":{"inherit":true}} -->
                                        <div class="wp-block-group">
                                        <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"800"},"color":{"text":"#ffffff"}},"fontSize":"x-large"} -->
                                            <h2 class="has-text-align-left has-text-color has-x-large-font-size" style="color:#ffffff;font-style:normal;font-weight:800">Título sobre a imagem</h2>
                                        <!-- /wp:heading -->
                                        </div>
                                    <!-- /wp:group -->
                                </div>
                            </div>
                        <!-- /wp:cover -->'
);
