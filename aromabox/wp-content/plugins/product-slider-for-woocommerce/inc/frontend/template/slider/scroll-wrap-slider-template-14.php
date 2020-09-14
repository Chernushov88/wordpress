<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); ?>
<?php
if (isset( $psfw_option[ 'psfw_slider_container_width' ] ) && $psfw_option[ 'psfw_slider_container_width' ] !='' ) {
        $psfw_slider_container_width = $psfw_option['psfw_slider_container_width'];
    } else {
        $psfw_slider_container_width ='';
    }
 ?>
<div class="psfw-thumbnail-pager" id= "psfw-thumbnail-pager" data-container-width="<?php echo $psfw_slider_container_width; ?>">
    <div class="psfw-thumbnail-wrapper">
        <ul class="psfw-bxslider-pager" data-id="<?php echo $random_num ?>" id="psfw-pager-<?php echo $random_num ?>" data-count='<?php
            if ( ! empty( $post_number ) ) {
                echo $post_number;
            }
            ?>'>
            <?php
            $count = 0;
            $query = new WP_Query( $args );
            $rowCount = $query -> found_posts;
            if ( $query -> have_posts() ) {
                $psfw_row = 1;
                while ( $query -> have_posts() ) {
                    $query -> the_post();
                    $product_item_id = get_the_ID();
                    $psfw_advance_option = get_post_meta( $product_item_id, 'psfw_advance_option', true ); ?>          
                    <li>
                        <a data-slide-index="<?php echo $count ++; ?>" href="" class="bx-pager-link">
                            <div class="psfw-slider-inner-wrap" data-post_id="<?php echo $product_item_id; ?>" data-shortcode_id="<?php echo $post_id; ?>">
                                <div class="psfw-container-wrapper"> <?php
                                    $psfw_fetch_category_no_link = $this -> psfw_fetch_category_no_link($post_id, $product_item_id, $psfw_option['select_post_taxonomy']);
                                    $psfw_fetch_content = $this -> psfw_fetch_content($product_item_id, $psfw_option['psfw_post_excerpt']); ?>
                                    <div class="psfw-scroller-div"> <?php
                                        if ( isset( $psfw_option[ 'psfw_show_category' ] ) && $psfw_option[ 'psfw_show_category' ] == '1' ) { ?>
                                            <div class="psfw-category-wrap">
                                                <?php echo $psfw_fetch_category_no_link; ?>
                                            </div>
                                            <div class="psfw-title">
                                                <?php the_title(); ?>
                                            </div> <?php 
                                            include (PSFW_PATH . '/inc/frontend/data/price.php');
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li> <?php  
                }
            } else {
                _e( 'No post found', PSFW_TD );
            }
            wp_reset_postdata(); ?>
        </ul>
    </div>
</div>