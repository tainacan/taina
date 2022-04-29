<?php

/**
 * Add an svg icon to all core/post-date blocks.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 * @return string Modified block content.
 */
function taina_append_icon_to_post_date( $block_content, $block ) {
    $content  = '<div class="post-meta-icon">
                    <svg aria-hidden="true" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M2.738 5.81q0-.865.593-1.457t1.457-.593h1.038V1.71h2.05v2.05h8.249V1.71h2.05v2.05h1.037q.864 0 1.457.593t.593 1.457v14.424q0 .864-.593 1.457t-1.457.592H4.788q-.864 0-1.457-.592t-.593-1.457zm2.05 14.424h14.424V8.897H4.788zm7.237-2.05v-5.138h5.137v5.138z"/></svg>
                </div>' . $block_content;
    return $content;
}
add_filter( 'render_block_core/post-date', 'taina_append_icon_to_post_date', 10, 2 );


/**
 * Add an svg icon to all core/post-author-name blocks.
 *
 * @param string $block_content The block content about to be appended.
 * @param array  $block         The full block, including name and attributes.
 * @return string Modified block content.
 */
function taina_append_icon_to_post_author_name( $block_content, $block ) {
    $content  = '<div class="post-meta-icon">
                    <svg aria-hidden="true" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M2.344 18.028c0-.545.163-1.036.49-1.473a4.798 4.798 0 0 1 1.283-1.2 10.23 10.23 0 0 1 1.827-.955c.691-.273 1.391-.49 2.1-.654a19.487 19.487 0 0 1 2.101-.41A14.42 14.42 0 0 1 12 13.2c.545 0 1.155.046 1.828.137.69.09 1.39.227 2.1.409.727.163 1.427.381 2.1.654.691.273 1.3.592 1.828.955.545.345.982.745 1.31 1.2.327.455.49.946.49 1.473v3.628H2.344zM12 2.344c.673 0 1.3.127 1.882.382.582.255 1.091.6 1.528 1.036.436.437.781.946 1.036 1.528.255.582.382 1.21.382 1.882 0 .673-.127 1.3-.382 1.882a4.947 4.947 0 0 1-1.036 1.528 4.947 4.947 0 0 1-1.528 1.036A4.643 4.643 0 0 1 12 12c-.673 0-1.3-.127-1.882-.382a4.947 4.947 0 0 1-1.528-1.036 4.947 4.947 0 0 1-1.036-1.528 4.643 4.643 0 0 1-.382-1.882c0-.673.127-1.3.382-1.882.255-.582.6-1.091 1.036-1.528a4.947 4.947 0 0 1 1.528-1.036A4.643 4.643 0 0 1 12 2.344z"/></svg>
                </div>' . $block_content;
    return $content;
}
add_filter( 'render_block_core/post-author-name', 'taina_append_icon_to_post_author_name', 10, 2 );