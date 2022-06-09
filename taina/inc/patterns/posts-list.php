<?php
/**
 * Default blog posts list
 */
return array(
    'title'         => esc_html__( 'Posts list', 'taina' ),
    'categories'    => array( 'taina', 'query'),
    'blockTypes' => array( 'core/query' ),
    'viewportWidth' => 1400,
    'inserter' => true,
    'content'       => '<!-- wp:query {"queryId":4,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list","columns":3},"layout":{"inherit":true}} -->
                        <div class="wp-block-query">
                          <!-- wp:post-template {"className":"is-style-taina-cards"} -->
                          <!-- wp:post-featured-image {"isLink":true} /-->
                        
                          <!-- wp:group {"style":{"spacing":{"padding":{"top":"42px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"28px"},"border":{"bottom":{"color":"var:preset|color|primary","width":"4px"}}},"backgroundColor":"background-alt"} -->
                          <div
                            class="wp-block-group has-background-alt-background-color has-background"
                            style="
                              border-bottom-color: var(--wp--preset--color--primary);
                              border-bottom-width: 4px;
                              padding-top: 42px;
                              padding-right: 0px;
                              padding-bottom: 0px;
                              padding-left: 0px;
                            "
                          >
                            <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} /-->
                        
                            <!-- wp:post-excerpt {"textColor":"foreground"} /-->
                        
                            <!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"fontSize":"tiny"} -->
                            <div
                              class="wp-block-group has-tiny-font-size"
                              style="
                                padding-top: 0px;
                                padding-right: 0px;
                                padding-bottom: 0px;
                                padding-left: 0px;
                              "
                            >
                              <!-- wp:post-author-name /-->
                        
                              <!-- wp:post-date /-->
                        
                              <!-- wp:post-comments-count {"backgroundColor":"primary","textColor":"background"} /-->
                            </div>
                            <!-- /wp:group -->
                          </div>
                          <!-- /wp:group -->
                          <!-- /wp:post-template -->
                        
                          <!-- wp:group {"style":{"spacing":{"margin":{"top":"42px","bottom":"42px"}}}} -->
                          <div class="wp-block-group" style="margin-top: 42px; margin-bottom: 42px">
                            <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
                            <!-- wp:query-pagination-previous /-->
                        
                            <!-- wp:query-pagination-numbers /-->
                        
                            <!-- wp:query-pagination-next /-->
                            <!-- /wp:query-pagination -->
                          </div>
                          <!-- /wp:group -->
                        </div>
                        <!-- /wp:query -->'
);
