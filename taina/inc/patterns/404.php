<?php
/**
 * 404 pattern. We only need it here for i18n.
 */
return array(
    'title'         => esc_html__( '404 Page', 'taina' ),
    'categories'    => array( 'taina' ),
    'viewportWidth' => 1400,
    'inserter'      => false,
    'content'       => '<!-- wp:cover {"dimRatio":20,"minHeight":13,"minHeightUnit":"em","contentPosition":"center center","isDark":false,"className":"is-style-taina-cover-title-as-background","style":{"spacing":{"padding":{"top":"42px","right":"0px","bottom":"42px","left":"0px"}}}} -->
                        <div class="wp-block-cover is-light is-style-taina-cover-title-as-background" style="padding-top:42px;padding-right:0px;padding-bottom:42px;padding-left:0px;min-height:13em"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span>
                            <div class="wp-block-cover__inner-container">
                                <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"12rem","fontStyle":"normal","fontWeight":"900"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"primary"} -->
                                    <h1 class="has-text-align-center has-primary-color has-text-color" style="font-size:12rem;font-style:normal;font-weight:900;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">404</h1>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                    <p class="has-text-align-center has-medium-font-size">' . esc_html__( 'Looks like this page doesn\'t exist!', 'taina' ) . '</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                    <p class="has-text-align-center has-medium-font-size">' . sprintf( __( 'Let\'s <a href="%s">go back home</a>.', 'taina' ), esc_url( '/' ) ) . '</p>
                                <!-- /wp:paragraph -->
                            </div>
                        </div>
                        <!-- /wp:cover -->'
);
