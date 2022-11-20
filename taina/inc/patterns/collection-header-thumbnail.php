<?php
/**
 * Collection header when only thumbnail is present
 */

$title = esc_html__( 'Brazilian Original People', 'taina' );
$description = esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
$thumbnail = '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/ornamentos_utensilios_e_armas_dos_indios_camacas.jpg" alt="' . esc_attr__( 'Illustration depicting several artifacts belonging to Brazilian Indigeneous. They include a bow and arrows, a war bonnet made with feathers and other ornaments.', 'taina' ) . '"/>';
$thumbnail_url = '' . esc_url( get_template_directory_uri() ) . '/assets/images/ornamentos_utensilios_e_armas_dos_indios_camacas.jpg';

return array(
    'title'         => esc_html__( 'Collection header (only thumbnail)', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'viewportWidth' => 1400,
    'content'       => get_header_banner_pattern(
        $title, 
        array(
            'description' => $description,
            'thumbnail' => $thumbnail,
            'thumbnail_url' => $thumbnail_url
        )
    )
);
