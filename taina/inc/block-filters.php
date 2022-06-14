<?php

/**
 * Add an svg calendar icon to all core/post-date blocks.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 * @return string Modified block content.
 */
if ( !function_exists('taina_append_icon_to_post_date') ) {
    function taina_append_icon_to_post_date( $block_content, $block ) {
        if ( empty($block_content) )
            return $block_content;

        $content  = '<div class="post-meta-icon">
                        <svg aria-hidden="true" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M2.738 5.81q0-.865.593-1.457t1.457-.593h1.038V1.71h2.05v2.05h8.249V1.71h2.05v2.05h1.037q.864 0 1.457.593t.593 1.457v14.424q0 .864-.593 1.457t-1.457.592H4.788q-.864 0-1.457-.592t-.593-1.457zm2.05 14.424h14.424V8.897H4.788zm7.237-2.05v-5.138h5.137v5.138z"/></svg>
                    </div>' . $block_content;
        return $content;
    }
}
add_filter( 'render_block_core/post-date', 'taina_append_icon_to_post_date', 10, 2 );


/**
 * Add an svg user icon to all core/post-author-name blocks.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 * @return string Modified block content.
 */
if ( !function_exists('taina_append_icon_to_post_author_name') ) {
    function taina_append_icon_to_post_author_name( $block_content, $block ) {
        if ( empty($block_content) )
            return $block_content;
        
        $content  = '<div class="post-meta-icon">
                        <svg aria-hidden="true" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M2.344 18.028c0-.545.163-1.036.49-1.473a4.798 4.798 0 0 1 1.283-1.2 10.23 10.23 0 0 1 1.827-.955c.691-.273 1.391-.49 2.1-.654a19.487 19.487 0 0 1 2.101-.41A14.42 14.42 0 0 1 12 13.2c.545 0 1.155.046 1.828.137.69.09 1.39.227 2.1.409.727.163 1.427.381 2.1.654.691.273 1.3.592 1.828.955.545.345.982.745 1.31 1.2.327.455.49.946.49 1.473v3.628H2.344zM12 2.344c.673 0 1.3.127 1.882.382.582.255 1.091.6 1.528 1.036.436.437.781.946 1.036 1.528.255.582.382 1.21.382 1.882 0 .673-.127 1.3-.382 1.882a4.947 4.947 0 0 1-1.036 1.528 4.947 4.947 0 0 1-1.528 1.036A4.643 4.643 0 0 1 12 12c-.673 0-1.3-.127-1.882-.382a4.947 4.947 0 0 1-1.528-1.036 4.947 4.947 0 0 1-1.036-1.528 4.643 4.643 0 0 1-.382-1.882c0-.673.127-1.3.382-1.882.255-.582.6-1.091 1.036-1.528a4.947 4.947 0 0 1 1.528-1.036A4.643 4.643 0 0 1 12 2.344z"/></svg>
                    </div>' . $block_content;
        return $content;
    }
}
add_filter( 'render_block_core/post-author-name', 'taina_append_icon_to_post_author_name', 10, 2 );

/**
 * Add an svg user icon to some core/post-author blocks.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 * @return string Modified block content.
 */
if ( !function_exists('taina_append_icon_to_post_author') ) {
    function taina_append_icon_to_post_author( $block_content, $block ) {
        if ( empty($block_content) )
            return $block_content;

        /* We only want to do this when there is no avatar nor bio */
        if ( !isset($block['attrs']) || (isset($block['attrs']['showBio']) && $block['attrs']['showBio'] == true) || (isset($block['attrs']['showAvatar']) && $block['attrs']['showAvatar'] == true) )
            return $block_content;
        
        $content  = '<div class="post-meta-icon">
                        <svg aria-hidden="true" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M2.344 18.028c0-.545.163-1.036.49-1.473a4.798 4.798 0 0 1 1.283-1.2 10.23 10.23 0 0 1 1.827-.955c.691-.273 1.391-.49 2.1-.654a19.487 19.487 0 0 1 2.101-.41A14.42 14.42 0 0 1 12 13.2c.545 0 1.155.046 1.828.137.69.09 1.39.227 2.1.409.727.163 1.427.381 2.1.654.691.273 1.3.592 1.828.955.545.345.982.745 1.31 1.2.327.455.49.946.49 1.473v3.628H2.344zM12 2.344c.673 0 1.3.127 1.882.382.582.255 1.091.6 1.528 1.036.436.437.781.946 1.036 1.528.255.582.382 1.21.382 1.882 0 .673-.127 1.3-.382 1.882a4.947 4.947 0 0 1-1.036 1.528 4.947 4.947 0 0 1-1.528 1.036A4.643 4.643 0 0 1 12 12c-.673 0-1.3-.127-1.882-.382a4.947 4.947 0 0 1-1.528-1.036 4.947 4.947 0 0 1-1.036-1.528 4.643 4.643 0 0 1-.382-1.882c0-.673.127-1.3.382-1.882.255-.582.6-1.091 1.036-1.528a4.947 4.947 0 0 1 1.528-1.036A4.643 4.643 0 0 1 12 2.344z"/></svg>
                    </div>' . $block_content;
        return $content;
    }
}
add_filter( 'render_block_core/post-author', 'taina_append_icon_to_post_author', 10, 2 );


/**
 * Add an svg comment icon to all core/post-comments-count blocks.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 * @return string Modified block content.
 */
if ( !function_exists('taina_append_icon_to_post_comments_count') ) {
    function taina_append_icon_to_post_comments_count( $block_content, $block ) {
        
        if ( empty($block_content) )
            return $block_content;

        /* Searchs for the wrapper */
        $matches = [];
        preg_match('@<div class="[^"]*?p-block-post-comments-count[^"]*?">(.*?)<\/div>@si', $block_content, $matches);
        if ( count($matches) <= 1 )
            return $block_content;

        // If the content is 0, no need to show this.
        if ( $matches[1] === '0' )
            return '';

        $content =  '<div style="position: relative;">'
                        . $block_content .
                        '<div class="post-meta-icon post-meta-icon--comments">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0z" fill="none"/><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>
                        </div>
                    </div>';
        return $content;
    }
}
add_filter( 'render_block_core/post-comments-count', 'taina_append_icon_to_post_comments_count', 10, 2 );


/**
 * Add text layer as background to core/cover block, if the style is applied.
 *
 * @param string $block_content The block content about to be tweaked.
 * @param array  $block         The full block, including name and attributes.
 * @return string Modified block content.
 */
if ( !function_exists('taina_apply_text_as_background_style_to_cover') ) {
    function taina_apply_text_as_background_style_to_cover( $block_content, $block ) {
        
        if ( empty($block_content) )
            return $block_content;

        /* We only want to do this when the style is applied */
        if ( !isset($block['attrs']) || !isset($block['attrs']['className']) )
            return $block_content;        
        
        if ( strpos($block['attrs']['className'], 'is-style-taina-cover-title-as-background') === false )
            return $block_content;

        /* Searchs for the first title tag div */
        $matches = [];
        preg_match('@<h\d.*?>*</h\d>@im', $block_content, $matches);
        
        if ( count($matches) <= 0 )
            return $block_content;

        $title_content = sanitize_text_field($matches[0]);
        
        /* Get the block background color to set as text color */
        $text_layer_color = 'var(--wp--preset--color--background)';
        if ( isset( $block['attrs']['customOverlayColor'] ) )
            $text_layer_color = $block['attrs']['customOverlayColor'];
        else if ( isset( $block['attrs']['overlayColor'] ))
            $text_layer_color = 'var(--wp--preset--color--' . $block['attrs']['overlayColor'] . ')';

        $content = str_replace(
            '><span',
            '><span style="overflow: hidden; color:' . $text_layer_color . ';background-color:' . $text_layer_color . ';" data-title-content="' . $title_content . '&nbsp;' . $title_content . '&nbsp;' . $title_content . '&nbsp;' . $title_content . '&nbsp;' . ( strlen($title_content) <= 5 ? ($title_content . '&nbsp;' . $title_content . '&nbsp;') : '') . $title_content . '" ',
            $block_content
        );
        
        return $content;
    }
}
add_filter( 'render_block_core/cover', 'taina_apply_text_as_background_style_to_cover', 10, 2 );

/**
 * Add 'MENU' text to the mobile version of all core/navigation blocks.
 *
 * @param string $block_content The block content about to be changed.
 * @param array  $block         The full block, including name and attributes.
 * @return string Modified block content.
 */
if ( !function_exists('taina_append_text_navigation') ) {
    function taina_append_text_navigation( $block_content, $block ) {
        
        if ( empty($block_content) )
            return $block_content;

        /* Adds class to inform the state of overlayMenu attr */
        if ( isset($block['attrs']) && isset($block['attrs']['overlayMenu']) ) {
            $pos = strpos($block_content, 'wp-block-navigation');
            if ($pos !== false) {
                $block_content = substr_replace($block_content, 'wp-block-navigation wp-block-navigation--overlay-menu-' . $block['attrs']['overlayMenu'] . ' ', $pos, strlen('wp-block-navigation'));
            }
        }

        /* Searchs for the mobile container div */
        $matches = [];
        preg_match('@<div class="wp-block-navigation__responsive-container-content".*?>([^<]*)</div>@si', $block_content, $matches);

        if ( count($matches) <= 0 )
            return $block_content;

        $content = str_replace($matches[0], '<h1 class="taina-navigation-mobile-label">' . __('Menu', 'taina') . '</h1>' . $matches[0], $block_content);
        return $content;
    }
}
add_filter( 'render_block_core/navigation', 'taina_append_text_navigation', 10, 2 );


/**
 * Filter tainacan/faceted-search block metadata to set custom defaults
 *
 * @param array  $metadata The block metadata from block.json
 * @return string Modified block metadata.
 */
if ( defined ('TAINACAN_VERSION') && !function_exists('taina_filter_tainacan_faceted_search_block_defaults') ) {
    function taina_filter_tainacan_faceted_search_block_defaults( $metadata ) {
        if ( 'tainacan/faceted-search' === $metadata['name'] ) {
            $metadata['attributes']["secondaryColor"] = array(
                'type' => 'String',
                'default' => 'var(--wp--preset--color--primary)'
            );
            $metadata['attributes']["backgroundColor"] = array(
                'type' => 'String',
                'default' => 'var(--wp--preset--color--background-alt)'
            );
            $metadata['attributes']["itemBackgroundColor"] = array(
                'type' => 'String',
                'default' => 'var(--wp--preset--color--background)'
            );
            $metadata['attributes']["itemHoverBackgroundColor"] = array(
                'type' => 'String',
                'default' => 'var(--wp--preset--color--background)'
            );
            $metadata['attributes']["itemHeadingHoverBackgroundColor"] = array(
                'type' => 'String',
                'default' => 'var(--wp--preset--color--background)'
            );
            $metadata['attributes']["headingColor"] = array(
                'type' => 'String',
                'default' => 'var(--wp--preset--color--foreground)'
            );
            $metadata['attributes']["labelColor"] = array(
                'type' => 'String',
                'default' => 'var(--wp--preset--color--foreground)'
            );
            $metadata['attributes']["infoColor"] = array(
                'type' => 'String',
                'default' => 'var(--wp--preset--color--foreground)'
            );
            $metadata['attributes']["inputColor"] = array(
                'type' => 'String',
                'default' => 'var(--wp--preset--color--foreground)'
            );
            $metadata['attributes']["inputBorderColor"] = array(
                'type' => 'String',
                'default' => 'var(--wp--preset--color--background-alt)'
            );
            $metadata['attributes']["inputBackgroundColor"] = array(
                'type' => 'String',
                'default' => 'var(--wp--preset--color--background)'
            );
            $metadata['attributes']['baseFontSize'] = array(
                'type' => 'Number',
                'default' => 18
            );
            $metadata['attributes']['align'] = array(
                'type' => 'String',
                'default' => 'full'
            );
            $metadata['attributes']['showFiltersButtonInsideSearchControl'] = array(
                'type' => 'Boolean',
                'default' => true
            );
            $metadata['attributes']['startWithFiltersHidden'] = array(
                'type' => 'Boolean',
                'default' => true
            );
            $metadata['attributes']['filtersAsModal'] = array(
                'type' => 'Boolean',
                'default' => true
            );
            $metadata['attributes']['defaultItemsPerPage'] = array(
                'type' => 'Number',
                'default' => 24
            );
        }
        return $metadata;
    };
}
add_filter( 'block_type_metadata', 'taina_filter_tainacan_faceted_search_block_defaults' );
