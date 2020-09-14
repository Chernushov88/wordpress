<?php
defined( 'ABSPATH' ) or die( "No script kiddies please!" );

if(isset($atts['slug'])){
    $post_slug = $atts['slug'];
    $post_id = $this->get_id_from_slug($post_slug);
}else{
    $post_id = $atts['id']; // for visual composer compatible
}

$psfw_option = get_post_meta( $post_id, 'psfw_option', true );

$class_layout = 'psfw-layout-' . $psfw_option[ 'psfw_select_layout' ] . '-section';
$random_num = rand( 111111111, 999999999 );
if ( isset( $psfw_option[ 'psfw_select_layout' ] ) && $psfw_option[ 'psfw_select_layout' ] == 'carousel' ) {
    if ( isset( $psfw_option[ 'psfw_carousel_template' ] ) && $psfw_option[ 'psfw_carousel_template' ] == 'template-3' ) {
        $psfw_layout_class = 'psfw-car-' . $psfw_option[ 'psfw_carousel_template' ] . ' psfw-car-outer-wrap psfw-upper-arrow';
    } else {
        $psfw_layout_class = 'psfw-car-' . $psfw_option[ 'psfw_carousel_template' ] . ' psfw-car-outer-wrap';
    }
} else if ( isset( $psfw_option[ 'psfw_select_layout' ] ) && $psfw_option[ 'psfw_select_layout' ] == 'slider' ) {
    $psfw_layout_class = 'psfw-slider-wrapper' . ' psfw-slider-' . $psfw_option[ 'psfw_slider_template' ];
}

if ( isset( $psfw_option[ 'psfw_image_type' ] ) && $psfw_option[ 'psfw_image_type' ] == 'scroll' ) {
    $image_hover = ' psfw-scroll-wrapper';
} else if ( isset( $psfw_option[ 'psfw_image_type' ] ) && $psfw_option[ 'psfw_image_type' ] == 'swap' ) {
    $image_hover = ' psfw-swap-container';
}else{
    $image_hover='';
}

$content_wrap_align = (isset( $psfw_option[ 'content_wrap_align' ] ) && $psfw_option[ 'content_wrap_align' ]!='') ? ($psfw_option['content_wrap_align']): 'default';

if ( isset( $psfw_option[ 'psfw_slider_template' ] ) && !($psfw_option[ 'psfw_slider_template' ] == 'template-3' || $psfw_option[ 'psfw_slider_template' ] == 'template-5' ||$psfw_option[ 'psfw_slider_template' ] == 'template-7' ||$psfw_option[ 'psfw_slider_template' ] == 'template-14')) {
    if($content_wrap_align != 'default'){
        $content_align_class ="psfw_content_align_".$content_wrap_align;
    }else{
        $content_align_class ="";
    }
}
else{
    $content_align_class ="";
}

if ( !isset( $psfw_option[ 'psfw_show_social_share' ] ) ) {
    $social = "psfw-social-share-disabled";
}
else{
    $social = "";
}

?>
<div class="<?php
            if ( isset( $psfw_option[ 'psfw_nav_controls' ] ) && $psfw_option[ 'psfw_nav_controls' ] == 'true' ) {
                echo "psfw-controls-true";
            }else{
                echo "psfw-controls-false";
            }
            ?> <?php
if ( (isset( $psfw_option[ 'product_type' ] ) && $psfw_option[ 'product_type' ] == 'product') && class_exists( 'WooCommerce' ) ) {
    echo 'woocommerce';
}
?>
 <?php echo $social ?> psfw-product-outer-wrapper-<?php echo $random_num; ?> <?php echo $content_align_class ;?>  psfw-main-product-wrapper <?php echo esc_attr( $psfw_layout_class ); ?> <?php
    if ( (isset( $psfw_option[ 'psfw_show_button_one' ] ) && $psfw_option[ 'psfw_show_button_one' ] == '1') && $psfw_option[ 'psfw_show_button_two' ] != '1' ) {
        echo 'psfw-only-one-button';
    }
    if ( (isset( $psfw_option[ 'psfw_show_button_two' ] ) && $psfw_option[ 'psfw_show_button_two' ] == '1') && $psfw_option[ 'psfw_show_button_one' ] != '1' ) {
        echo 'psfw-only-one-button';
    }
    if ( (isset( $psfw_option[ 'psfw_show_wishlist' ] ) && $psfw_option[ 'psfw_show_wishlist' ] == '1') && (isset( $psfw_option[ 'psfw_show_lightbox' ] ) && $psfw_option[ 'psfw_show_lightbox' ] != '1' )) {
        echo ' psfw-secondary-only';
    }
    if ( (isset( $psfw_option[ 'psfw_show_lightbox' ] ) && $psfw_option[ 'psfw_show_lightbox' ] == '1') && (isset($psfw_option[ 'psfw_show_wishlist' ]) && $psfw_option[ 'psfw_show_wishlist' ] != '1') ) {
        echo ' psfw-secondary-only';
    }
    echo $image_hover;
    ?>" data-id="psfw_<?php
    echo rand( 1111111, 9999999 );
    ?>" <?php if ( isset( $psfw_option[ 'psfw_show_lightbox' ] ) && $psfw_option[ 'psfw_show_lightbox' ] == '1' ) { ?>
        data-layout="<?php echo $psfw_option[ 'psfw_select_layout' ]; ?>"
    <?php } ?>>

    <div class="<?php echo esc_attr( $class_layout ); ?> psfw-clearfix" 
        <?php if ( $psfw_option[ 'psfw_select_layout' ] == 'carousel' ) { ?>

            data-column = "<?php
            if ( isset( $psfw_option[ 'psfw_slide_column' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_slide_column' ] );
            } ?>"
            data-controls = "<?php
            if ( isset( $psfw_option[ 'psfw_nav_controls' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_nav_controls' ] );
            }
            ?>"
            data-auto = "<?php
            if ( isset( $psfw_option[ 'psfw_slide_auto' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_slide_auto' ] );
            }
            ?>"
            data-orientation = "<?php
            if ( isset( $psfw_option[ 'psfw_slide_type' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_slide_type' ] );
            }
            ?>"
            data-autohover = "<?php
            if ( isset( $psfw_option[ 'psfw_pause_on_hover' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_pause_on_hover' ] );
            }
            ?>"
            data-speed = "<?php
            if ( isset( $psfw_option[ 'psfw_slide_speed' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_slide_speed' ] );
            }
            ?>"
            data-pager = "<?php
            if ( isset( $psfw_option[ 'psfw_slide_pager' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_slide_pager' ] );
            }
            ?>"
            data-template = "<?php
            if ( isset( $psfw_option[ 'psfw_carousel_template' ] ) ) {
                 echo esc_attr( $psfw_option[ 'psfw_carousel_template' ] );
            }
            ?>"
            data-width = "<?php
            if ( isset( $psfw_option[ 'psfw_slide_width' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_slide_width' ] );
            }
            ?>"
            <?php
        }
        if ($psfw_option[ 'psfw_select_layout' ] == 'slider' ) {
            ?>
            data-template = "<?php
            if ( isset( $psfw_option[ 'psfw_slider_template' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_slider_template' ] );
            }
            ?>"
            data-controls = "<?php
            if ( isset( $psfw_option[ 'psfw_nav_controls' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_nav_controls' ] );
            }
            ?>"
            data-auto = "<?php
            if ( isset( $psfw_option[ 'psfw_slide_auto' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_slide_auto' ] );
            }
            ?>"
            data-orientation = "<?php
            if ( isset( $psfw_option[ 'psfw_slide_type' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_slide_type' ] );
            }
            ?>"
            data-autohover = "<?php
            if ( isset( $psfw_option[ 'psfw_pause_on_hover' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_pause_on_hover' ] );
            }
            ?>"
            data-speed = "<?php
            if ( isset( $psfw_option[ 'psfw_slide_speed' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_slide_speed' ] );
            }
            ?>"
            data-pager = "<?php
            if ( isset( $psfw_option[ 'psfw_slide_pager' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_slide_pager' ] );
            }
            ?>"
            <?php
        }
         ?>>
            <?php
            if ( isset( $psfw_option[ 'psfw_post_excerpt' ] ) ) {
                $excerpt = $psfw_option[ 'psfw_post_excerpt' ];
            }
            if ( isset( $psfw_option[ 'psfw_post_number' ] ) ) {
                $post_number = $psfw_option[ 'psfw_post_number' ];
            } else {
                $post_number = 20;
            }
            if ( isset( $psfw_option[ 'psfw_select_order' ] ) ) {
                $order = $psfw_option[ 'psfw_select_order' ];
            } else {
                $order = 'DESC';
            }
            if ( isset( $psfw_option[ 'psfw_select_orderby' ] ) ) {
                $order_by = $psfw_option[ 'psfw_select_orderby' ];
            } else {
                $order_by = 'date';
            }
            if ( isset( $psfw_option[ 'psfw_select_post_status' ] ) ) {
                $status = $psfw_option[ 'psfw_select_post_status' ];
            } else {
                $status = 'publish';
            }
            if ( isset( $psfw_option[ 'psfw_date_format_post' ] ) ) {
                $date_format = $psfw_option[ 'psfw_date_format_post' ];
            }
            if ( isset( $psfw_option[ 'product_type' ] ) ) {
                $post_type = $psfw_option[ 'product_type' ];
            }
            if ( isset( $psfw_option[ 'psfw_orderby_key' ] ) ) {
                $order_by_meta_key = $psfw_option[ 'psfw_orderby_key' ];
            }

             /*
              * Condition for taxonomy
              */
            if ( isset( $psfw_option[ 'psfw_show_taxonomy_query' ] ) && $psfw_option[ 'psfw_show_taxonomy_query' ] == '1' ) {
                $tax = $psfw_option[ 'select_post_taxonomy' ];
                /*
                 * single taxonomy tax query
                 */
                if ( $psfw_option[ 'taxonomy_queries_type' ] == 'simple-taxonomy' ) {
                    if ( $psfw_option[ 'simple_taxonomy_terms' ] == '' ) {
                        $terms = get_terms( $tax, array( 'hide_empty' => false ) );
                        $term_ids = wp_list_pluck( $terms, 'term_id' );
                        $id = implode( ", ", array_keys( $term_ids ) );
                        $tax_query = array( array(
                                'taxonomy' => $tax,
                                'field' => 'term_id',
                                'terms' => array( $id )
                             ), );
                    } else {
                        $simple_term = $psfw_option[ 'simple_taxonomy_terms' ];
                        $tax_query = array( array(
                                'taxonomy' => $tax,
                                'field' => 'term_id',
                                'terms' => $simple_term
                        ), );
                    }
                }
                /*
                 * multiple taxonomy tax query
                */ else {
                    $relation = $psfw_option[ 'psfw_multiple_tax_relation' ];
                    $first_term_array = $psfw_option[ 'taxonomy_terms' ];
                    $first_term_list = substr( implode( ", ", $first_term_array ), 0 );
                    $blog_array = array( 'relation' => $relation );
                    $blog_array[] = array(
                        'taxonomy' => $tax,
                        'field' => 'term_id',
                        'terms' => array( $first_term_list ),
                    );
                    if ( ! empty( $psfw_option[ 'psfw_blog' ] ) ) {
                        foreach ( $psfw_option[ 'psfw_blog' ] as $blog_key => $blog_detail ) {
                            $tax = $psfw_option[ 'psfw_blog' ][ $blog_key ][ 'multiple_post_taxonomy' ];
                            $operator = $psfw_option[ 'psfw_blog' ][ $blog_key ][ 'psfw_terms_operator' ];
                            $term = $psfw_option[ 'psfw_blog' ][ $blog_key ][ 'multiple_taxonomy_terms' ];
                            $term_collection = substr( implode( ", ", $term ), 0 );
                            if ( isset( $psfw_option[ 'psfw_blog' ][ $blog_key ][ 'psfw_enable_operator' ] ) && $psfw_option[ 'psfw_blog' ][ $blog_key ][ 'psfw_enable_operator' ] == '1' ) {
                                $blog_array[] = array(
                                    'taxonomy' => $tax,
                                    'field' => 'term_id',
                                    'terms' => array( $term_collection ),
                                    'operator' => $operator,
                                );
                            } else {
                                $blog_array[] = array(
                                    'taxonomy' => $tax,
                                    'field' => 'term_id',
                                    'terms' => array( $term_collection ),
                                );
                            }
                        }
                    }
                    $tax_query[] = $blog_array;
                }
            }
             /*
              * Condition for custom field
              */
            if ( isset( $psfw_option[ 'psfw_show_custom_query' ] ) && $psfw_option[ 'psfw_show_custom_query' ] == '1' ) {
                if ( $psfw_option[ 'meta_keys_type' ] == 'pre-available' ) {
                    $meta_key = $psfw_option[ 'pre_meta_key' ];
                } else {
                    $meta_key = $psfw_option[ 'psfw_other_meta_key' ];
                }
                if ( $psfw_option[ 'psfw_meta_value_type' ] == 'string' ) {
                    $meta_value = $psfw_option[ 'psfw_meta_value' ];
                } else {
                    $meta_value = $psfw_option[ 'psfw_meta_value_number' ];
                }
                $compare = $psfw_option[ 'psfw_compare_operator' ];
                if ( $psfw_option[ 'psfw_custom_field_type' ] == 'single_field' ) {
                    $meta_value = $psfw_option[ 'psfw_meta_value_type' ];
                    $meta_query = array(
                        array(
                            'key' => $meta_key,
                            'value' => $meta_value,
                            'compare' => $compare,
                        ),
                    );
                }
                /*
                 * Multiple field
                 */ else {
                        $meta_array = array();
                        $meta_array[] = array(
                            'key' => $meta_key,
                            'value' => $meta_value,
                            'compare' => $compare,
                        );
                        foreach ( $psfw_option[ 'psfw_custom' ] as $custom_key => $custom_detail ) {
                            if ( $psfw_option[ 'psfw_custom' ][ $custom_key ][ 'multiple_meta_key_type' ] == 'pre-available' ) {
                                $multi_meta_key = $psfw_option[ 'psfw_custom' ][ $custom_key ][ 'psfw_pre_multiple_meta_key' ];
                            } else {
                                $multi_meta_key = $psfw_option[ 'psfw_custom' ][ $custom_key ][ 'psfw_multiple_other_key' ];
                            }
                            $multi_meta_value = $psfw_option[ 'psfw_custom' ][ $custom_key ][ 'psfw_multiple_meta_value' ];
                            $multi_compare = $psfw_option[ 'psfw_custom' ][ $custom_key ][ 'psfw_compare_operator' ];
                            $multi_type = $psfw_option[ 'psfw_custom' ][ $custom_key ][ 'psfw_field_compare_type' ];
                            if ( isset( $psfw_option[ 'psfw_custom' ][ $custom_key ][ 'psfw_show_type_filter' ] ) && $psfw_option[ 'psfw_custom' ][ $custom_key ][ 'psfw_show_type_filter' ] == '1' ) {
                                $meta_array[] = array(
                                     'key' => $multi_meta_key,
                                     'value' => $multi_meta_value,
                                     'type' => $multi_type,
                                     'compare' => $multi_compare,
                                );
                            } else {
                                $meta_array[] = array(
                                     'key' => $multi_meta_key,
                                     'value' => $multi_meta_value,
                                     'compare' => $multi_compare,
                                );
                            }
                        }
                    $meta_query[] = $meta_array;
                }
            }
             /*
              * Condition for search keyword
              */
            if (isset( $psfw_option[ 'psfw_show_keyword_query' ] ) && $psfw_option[ 'psfw_show_keyword_query' ] == '1' ) {
                if (! empty( $psfw_option[ 'psfw_search_keyword' ] ) ) {
                    $keyword = $psfw_option[ 'psfw_search_keyword' ];
                }
            }
             /*
              * Condition for popular post
              */
            if ( isset( $psfw_option[ 'psfw_show_popular_query' ] ) && $psfw_option[ 'psfw_show_popular_query' ] == '1' ) {
                if ( $psfw_option[ 'psfw_select_popular' ] == 'view' ) {
                    $view_meta = 'post_views_count';
                }
            }

            $args = array(
                'post_type' => $post_type,
                'meta_key'   => $order_by_meta_key,
                'orderby' => $order_by,
                'order' => $order,
                'posts_per_page' => $post_number,
                'post_status' => $status
            );
            if ( !empty( $tax_query ) ) {
                $args[ 'tax_query' ] = $tax_query;
            }
            if ( !empty( $keyword ) ) {
                $args[ 's' ] = $keyword;
            }
            if ( !empty( $meta_query ) ) {
                $args[ 'meta_query' ] = $meta_query;
            }
            if ( !empty( $view_meta ) ) {
                $args[ 'meta_key' ] = $view_meta;
            }

            // To get all the product ids of "Out of Stock" Products
            include(PSFW_PATH . 'inc/frontend/psfw-out-of-stock.php');

            include(PSFW_PATH . 'inc/frontend/psfw-template.php');
            ?>
    </div> 
    <?php
    if ( isset( $psfw_option[ 'psfw_slider_template' ] ) && $psfw_option[ 'psfw_slider_template' ] == 'template-14' ) { ?>
        <?php include(PSFW_PATH . 'inc/frontend/template/slider/scroll-wrap-slider-template-14.php'); ?>
    <?php } ?>
</div>