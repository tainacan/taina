<?php

    $header = do_blocks('<!-- wp:template-part {"slug":"header","theme":"taina"} /-->');
    $comments = ( comments_open() && get_comments_number() ) ? do_blocks('<!-- wp:template-part {"slug":"comments-section","theme":"taina","tagName":"section"} /-->') : '';
    $related_items = tainacan_has_related_items() ? do_blocks('') : '';
    $footer = do_blocks('<!-- wp:template-part {"slug":"footer-full","tagName":"footer","theme":"taina"} /-->');

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <?php wp_body_open(); ?>

        <div class="wp-site-blocks">
            <?php echo $header; ?>
            <?php block_template_part( 'single-tainacan-item' ); ?>
            <?php echo $comments; ?>
            <?php echo $footer; ?>
        </div>

        <?php wp_footer(); ?>
    </body>

</html>
