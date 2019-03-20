<?php

namespace WPGraphQL\Extensions\WooCommerce\Data;

use GraphQL\Type\Definition\ResolveInfo;
use GraphQLRelay\Relay;
use WPGraphQL\AppContext;

/**
 * Class GalleryConnectionQueryArgs
 *
 * @package WPGraphQL\Extensions\WooCommerce\Data
 * @since 0.0.1
 */
class GalleryConnectionQueryArgs {
  public static function fromProduct( $query_args, $source, $args, $context, $info ) {
    if( $source instanceof \WC_Product && $info->fieldName === 'galleryImages' ) {
      $query_args['post__in'] = $source->get_gallery_image_ids();
    }

    return $query_args;
  }
}