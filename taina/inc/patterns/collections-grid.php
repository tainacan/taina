<?php
/**
 * Collections grid
 */
return array(
    'title'         => esc_html__( 'Collections grid', 'taina' ),
    'categories'    => array( 'taina', 'query'),
    'blockTypes' => array( 'core/query' ),
    'viewportWidth' => 1400,
    'inserter' => true,
    'content'       => '<!-- wp:query {"queryId":4,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":4},"layout":{"inherit":false}} -->
                        <div class="wp-block-query">
                        <!-- wp:post-template -->
                        <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group">
                            <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"200px","style":{"color":{},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->
                            <!-- wp:post-featured-image {"isLink":true,"width":"200px","height":"200px","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"color":{"duotone":["#262626","#A0303A"]}}} /-->
                        </div>
                        <!-- /wp:group -->
                        
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0px"}},"border":{"bottom":{"color":"var:preset|color|primary","width":"4px"}}},"backgroundColor":"background-alt","layout":{"inherit":false}} -->
                        <div
                            class="wp-block-group has-background-alt-background-color has-background"
                            style="
                            border-bottom-color: var(--wp--preset--color--primary);
                            border-bottom-width: 4px;
                            margin-top: 0px;
                            margin-bottom: 0px;
                            padding-top: 24px;
                            padding-right: 0px;
                            padding-bottom: 24px;
                            padding-left: 0px;
                            "
                        >
                            <!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"normal"} /-->
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
