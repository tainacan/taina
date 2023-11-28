<?php
/**
 * Collection header when only cover image is available
 */

$title = esc_html__( 'Brazilian Original People', 'taina' );
$description = esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
$cover = '<img width="640" height="304" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/indios_puri.jpg" alt="' . esc_attr__( 'Illustration “Les Puris dans leurs forêts” by Jean Baptiste Benoit, depicting members of the Puris tribe walking in the forest. Three men are carring arrows while two women have babies with them.', 'taina' ) .'"/>';
$cover_url = esc_url( get_template_directory_uri() ) . '/assets/images/indios_puri.jpg';

return array(
    'title'         => esc_html__( 'Collection header (only cover)', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'viewportWidth' => 1400,
    'content'       => taina_get_header_banner_pattern(
        $title, 
        array(
            'description' => $description,
            'cover' => $cover,
            'cover_url' => $cover_url
        )
    )
);
