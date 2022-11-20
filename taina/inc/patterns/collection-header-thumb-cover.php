<?php
/**
 * Collection header when both thumbnail and cover are available
 */
$title = esc_html__( 'Brazilian Original People', 'taina' );
$description = esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
$thumbnail = '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/ilustracao_de_povos_indigenas.jpg" alt="' . esc_attr__( 'Illustration of three Brazilian Original People from different tribes. The first one has vertical lines painted over his body and carries a spear with a human head on top of it. The second one is a woman with a baby in her arms. The last one has what looks like a rowing in his arms. His skin has paintings that reming a camouflage for the forest.', 'taina' ) . '" width="754" height="236"/>';
$cover = '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/povos_indigenas_do_brasil.jpg" alt="' . esc_attr__( 'Facial illustration of three Brazilian Original People from different tribes. The first one appears twice, showing large adornments in his pout and ears. The second one does not carry any ornament. The third one has a sort of straw hat.', 'taina' ) . '"/>';
$cover_url = esc_url( get_template_directory_uri() ) . '/assets/images/ilustracao_de_povos_indigenas.jpg';

return array(
    'title'         => esc_html__( 'Collection header (thumb and cover)', 'taina' ),
    'categories'    => array( 'taina', 'headings'),
    'viewportWidth' => 1400,
    'content'       => get_header_banner_pattern(
        $title,
        array(
            'description' => $description,
            'thumbnail' => $thumbnail,
            'cover' => $cover,
            'cover_url' => $cover_url
        )
    )
);
