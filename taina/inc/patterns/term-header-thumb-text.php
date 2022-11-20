<?php
/**
 * Term header when a thumbnail is present. Uses title as background style.
 */

$title = esc_html__( 'Guaycuru', 'taina' );
$description = esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'taina' );
$thumbnail = '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/indios_guaycuru.jpg" alt="' . esc_html__( 'Painting of a brazilian woman of the Guaycuru tribe. She has a diadem and a necklace in the shape of some animal. Her face is painted with lines that remind flowers and leaves.', 'taina' ) . '"/>';

return array(
    'title'         => esc_html__( 'Term header (thumbnail and text)', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'viewportWidth' => 1400,
    'content'       => get_header_banner_pattern(
        $title,
        array(
            'description' => $description,
            'thumbnail' => $thumbnail
        )
    )
);
