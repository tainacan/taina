<?php
/**
 * Term header when no thumbnail is present. Uses title as background style.
 */

$title = esc_html__( 'Karajá', 'taina' );
$description = esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'taina' );
 
return array(
    'title'         => esc_html__( 'Term header (only text)', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'viewportWidth' => 1400,
    'content'       => taina_get_header_banner_pattern(
        $title, array( 'description' => $description )
    )
);
