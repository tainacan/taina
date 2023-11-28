<?php
    $header = do_blocks('<!-- wp:template-part {"slug":"header","theme":"taina"} /-->');

    $collection_id = tainacan_get_collection_id();
    $title = tainacan_get_the_collection_name();
    $description = tainacan_get_the_collection_description();
    $thumbnail = has_post_thumbnail( $collection_id ) ? get_the_post_thumbnail( $collection_id ) : false;
    $thumbnail_url = has_post_thumbnail( $collection_id ) ? get_the_post_thumbnail_url( $collection_id ) : false;
    $cover = has_header_image() ? get_header_image_tag(array( 'width' => '1200', 'style' => 'width:78%;height:auto;' )) : false;
    $cover_url = has_header_image() ? get_header_image() : false;

    $banner = do_blocks(
        taina_get_header_banner_pattern(
            $title,
            array(
                'description' => $description,
                'thumbnail' => $thumbnail,
                'thumbnail_url' => $thumbnail_url,
                'cover' => $cover,
                'cover_url' => $cover_url
            )
        )
    );
    
    $faceted_search_block = do_blocks('<!-- wp:tainacan/faceted-search {"collectionId":"' . $collection_id . '","listType":"collection"} -->
        <div style="font-size:18px;--tainacan-base-font-size:18px;--tainacan-background-color:var(--wp--preset--color--background-alt);--tainacan-filter-menu-width-theme:20%;--tainacan-input-color:var(--wp--preset--color--foreground);--tainacan-input-background-color:var(--wp--preset--color--background);--tainacan-input-border-color:var(--wp--preset--color--background-alt);--tainacan-label-color:var(--wp--preset--color--foreground);--tainacan-info-color:var(--wp--preset--color--foreground);--tainacan-heading-color:var(--wp--preset--color--foreground);--tainacan-skeleton-color:#eeeeee;--tainacan-item-background-color:var(--wp--preset--color--background);--tainacan-item-hover-background-color:var(--wp--preset--color--background);--tainacan-item-heading-hover-background-color:var(--wp--preset--color--background);--tainacan-primary:#d9eced;--tainacan-secondary:var(--wp--preset--color--primary)" class="wp-block-tainacan-faceted-search">
            <main id="tainacan-items-page" data-module="faceted-search" collection-id="' . $collection_id . '" default-view-mode="masonry" enabled-view-modes="masonry,records,cards,table,slideshow,list" hide-filters="false" hide-hide-filters-button="false" hide-search="false" hide-advanced-search="false" hide-displayed-metadata-button="false" hide-pagination-area="false" hide-sorting-area="false" hide-items-thumbnail="false" hide-sort-by-button="false" hide-exposers-button="false" hide-items-per-page-button="false" default-items-per-page="24" hide-go-to-page-button="false" show-filters-button-inside-search-control="true" start-with-filters-hidden="true" filters-as-modal="false" show-inline-view-mode-options="false" show-fullscreen-with-view-modes="false"></main>
        </div>
    <!-- /wp:tainacan/faceted-search -->');
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
            <?php echo $banner; ?>
            <?php echo $faceted_search_block; ?>
            <?php echo $footer; ?>
        </div>

        <?php wp_footer(); ?>
    </body>

</html>
