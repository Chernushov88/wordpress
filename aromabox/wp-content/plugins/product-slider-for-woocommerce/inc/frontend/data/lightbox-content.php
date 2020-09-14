<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" );

if ( isset( $psfw_option[ 'psfw_show_lightbox' ] ) && $psfw_option[ 'psfw_show_lightbox' ] == '1' ) {
    $lightbox_template = isset( $psfw_option[ 'psfw_lightbox_template' ] ) ? esc_attr( $psfw_option[ 'psfw_lightbox_template' ] ) : 'template-1';
    ?>
    <div class=" woocommerce psfw-lightbox-detail-wrap psfw-lightbox-<?php echo $lightbox_template; ?>">
        <div class="psfw-total-lightbox-content">
            <?php if ( $lightbox_template == 'template-1' ) { ?>
                <span class="dashicons dashicons-no psfw-close-lightbox"></span>
                <div class="psfw-popup-container psfw-clearfix">
                    <div class="psfw-image-container">
                        <?php include (PSFW_PATH . '/inc/frontend/data/inner/thumbnail-image.php'); ?>
                    </div>
                    <div class="psfw-popup-content-wrap">
                        <div class="psfw-lightbox-content-wrapper">
                            <div class="psfw-lightbox-category-wrap">
                                <?php echo $this -> psfw_fetch_category( $post_id, $product_item_id, $psfw_option[ 'select_post_taxonomy' ] ); ?>
                            </div>
                            <?php
                            include (PSFW_PATH . '/inc/frontend/data/review.php');
                            include (PSFW_PATH . '/inc/frontend/data/inner/title-detail.php');
                            include (PSFW_PATH . '/inc/frontend/data/inner/price-detail.php');
                            ?>
                        </div>
                        <div class="psfw-lightbox-content">
                            <?php
                            echo $this -> psfw_fetch_content($product_item_id, $psfw_option['psfw_post_excerpt']);
                            ?>
                        </div>
                        <?php //include (PSFW_PATH . '/inc/frontend/data/inner/button-one-detail.php'); ?>
                        <?php include (PSFW_PATH . '/inc/frontend/data/button-one.php'); ?>
                        <div class="psfw-lightbox-button-collect-wrap">
                            <?php if ( (isset( $psfw_option[ 'product_type' ] ) && $psfw_option[ 'product_type' ] == 'product') && class_exists( 'WooCommerce' ) ) { 
                                if ( isset( $psfw_option[ 'psfw_show_wishlist' ] ) && $psfw_option[ 'psfw_show_wishlist' ] == '1' ) { ?>
                                <div class="psfw-lightbox-wishlist-wrap">
                                    <?php
                                    //echo $this -> psfw_wishlist_button($product_item_id);
                                    $psfw_wishlist_button = $this -> psfw_wishlist_button($product_item_id);
                                    echo $psfw_wishlist_button;
                                    ?>
                                </div>
                                <?php
                            }}
                            //include (PSFW_PATH . '/inc/frontend/data/inner/button-two-detail.php');
                            include (PSFW_PATH . '/inc/frontend/data/button-two.php');
                            ?>
                        </div>
                        <div class="psfw-lightbox-share-wrap">
                            <?php
                            _e( 'Share this product', PSFW_TD );
                            include (PSFW_PATH . '/inc/frontend/content/psfw-social.php');
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            } else if ( $lightbox_template == 'template-2' ) {
                ?>
                <span class="dashicons dashicons-no psfw-close-lightbox"></span>
                <div class="psfw-popup-container psfw-clearfix">
                    <div class="psfw-image-container">
                        <?php include (PSFW_PATH . '/inc/frontend/data/inner/thumbnail-image.php'); ?>
                    </div>
                    <div class="psfw-popup-content-wrap">
                        <div class="psfw-lightbox-content-wrapper">
                            <?php
                            include (PSFW_PATH . '/inc/frontend/data/review.php'); 
                            include (PSFW_PATH . '/inc/frontend/data/inner/title-detail.php');
                            include (PSFW_PATH . '/inc/frontend/data/inner/price-detail.php');

                            ?>
                            <div class="psfw-lightbox-button-collect-wrap psfw-clearfix">
                                <?php
                                // include (PSFW_PATH . '/inc/frontend/data/inner/button-one-detail.php');
                                // include (PSFW_PATH . '/inc/frontend/data/inner/button-two-detail.php');
                                include (PSFW_PATH . '/inc/frontend/data/button-one.php');
                                include (PSFW_PATH . '/inc/frontend/data/button-two.php');
                                ?>
                                ?>
                            </div>

                            <?php if ( (isset( $psfw_option[ 'product_type' ] ) && $psfw_option[ 'product_type' ] == 'product') && class_exists( 'WooCommerce' ) ) { 
                                if ( isset( $psfw_option[ 'psfw_show_wishlist' ] ) && $psfw_option[ 'psfw_show_wishlist' ] == '1' ) { ?>
                                <div class="psfw-lightbox-wishlist-wrap">
                                    <?php
                                    echo $this -> psfw_wishlist_button($product_item_id);
                                    ?>
                                </div>
                            <?php }}
                            ?>
                            <div class="psfw-lightbox-content">
                                <?php
                                echo $this -> psfw_fetch_content($product_item_id, $psfw_option['psfw_post_excerpt']);
                                ?>
                            </div>
                            <div class="psfw-lightbox-category-wrap">
                                <?php
                                _e( 'Category: ', PSFW_TD );
                                echo $this -> psfw_fetch_category( $post_id, $product_item_id, $psfw_option[ 'select_post_taxonomy' ] );
                                ?>
                            </div>
                        </div>
                        <div class="psfw-lightbox-share-wrap">
                            <?php
                            _e( 'SHARE THIS PRODUCT', PSFW_TD );
                            include (PSFW_PATH . '/inc/frontend/content/psfw-social.php');
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            } else if ( $lightbox_template == 'template-3' ) {
                ?>
                <span class="dashicons dashicons-no psfw-close-lightbox"></span>
                <div class="psfw-popup-container psfw-clearfix">
                    <div class="psfw-image-container">
                        <?php include (PSFW_PATH . '/inc/frontend/data/inner/thumbnail-image.php'); ?>
                    </div>
                    <div class="psfw-popup-content-wrap">
                        <div class="psfw-lightbox-content-wrapper">
                            <div class="psfw-lightbox-category-wrap">
                                <?php
                                echo $this -> psfw_fetch_category( $post_id, $product_item_id, $psfw_option[ 'select_post_taxonomy' ] );
                                ?>
                            </div>
                            <?php
                            include (PSFW_PATH . '/inc/frontend/data/review.php');

                            include (PSFW_PATH . '/inc/frontend/data/inner/title-detail.php');
                            ?>
                            <div class="psfw-lightbox-content">
                                <?php
                                echo $this -> psfw_fetch_content($product_item_id, $psfw_option['psfw_post_excerpt']);
                                ?>
                            </div>
                            <?php
                            include (PSFW_PATH . '/inc/frontend/data/inner/price-detail.php');

                            ?>
                            <div class="psfw-lightbox-button-collect-wrap">
                                <?php
                                // include (PSFW_PATH . '/inc/frontend/data/inner/button-one-detail.php');
                                // include (PSFW_PATH . '/inc/frontend/data/inner/button-two-detail.php');
                                include (PSFW_PATH . '/inc/frontend/data/button-one.php');
                                include (PSFW_PATH . '/inc/frontend/data/button-two.php');
                                ?>
                                <?php if ( (isset( $psfw_option[ 'product_type' ] ) && $psfw_option[ 'product_type' ] == 'product') && class_exists( 'WooCommerce' ) ) { 
                                    if ( isset( $psfw_option[ 'psfw_show_wishlist' ] ) && $psfw_option[ 'psfw_show_wishlist' ] == '1' ) { ?>
                                    <div class="psfw-lightbox-wishlist-wrap">
                                        <?php
                                        echo $this -> psfw_wishlist_button($product_item_id);
                                        ?>
                                    </div>
                                <?php }}
                                ?>
                            </div>
                            <div class="psfw-lightbox-share-wrap">
                                <span>
                                    <?php
                                    _e( 'SHARE', PSFW_TD );
                                    ?>
                                </span>
                                <?php
                                include (PSFW_PATH . '/inc/frontend/content/psfw-social.php');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <span class="dashicons dashicons-no psfw-close-lightbox"></span>
                <div class="psfw-popup-container psfw-clearfix">
                    <div class="psfw-image-container">
                        <?php include (PSFW_PATH . '/inc/frontend/data/inner/thumbnail-image.php'); ?>
                    </div>
                    <div class="psfw-popup-content-wrap">
                        <div class="psfw-lightbox-content-wrapper">
                            <?php
                            include (PSFW_PATH . '/inc/frontend/data/review.php');
                            include (PSFW_PATH . '/inc/frontend/data/inner/title-detail.php');
                            include (PSFW_PATH . '/inc/frontend/data/inner/price-detail.php');

                            ?>
                            <div class="psfw-lightbox-content">
                                <?php
                                echo $this -> psfw_fetch_content($product_item_id, $psfw_option['psfw_post_excerpt']);
                                ?>
                            </div>
                            <div class="psfw-lightbox-button-collect-wrap">
                                <?php
                                // include (PSFW_PATH . '/inc/frontend/data/inner/button-one-detail.php');
                                // include (PSFW_PATH . '/inc/frontend/data/inner/button-two-detail.php');

                                include (PSFW_PATH . '/inc/frontend/data/button-one.php');
                                include (PSFW_PATH . '/inc/frontend/data/button-two.php');
                                ?>
                                <?php if ( (isset( $psfw_option[ 'product_type' ] ) && $psfw_option[ 'product_type' ] == 'product') && class_exists( 'WooCommerce' ) ) { 
                                    if ( isset( $psfw_option[ 'psfw_show_wishlist' ] ) && $psfw_option[ 'psfw_show_wishlist' ] == '1' ) { ?>
                                    <div class="psfw-lightbox-wishlist-wrap">
                                        <?php
                                        echo $this -> psfw_wishlist_button($product_item_id);
                                        ?>
                                    </div>
                                <?php } }
                                ?>
                            </div>
                            <div class="psfw-lightbox-category-wrap">
                                <?php
                                _e( 'Categories', PSFW_TD );
                                echo $this -> psfw_fetch_category( $post_id, $product_item_id, $psfw_option[ 'select_post_taxonomy' ] );
                                ?>
                            </div>
                            <div class="psfw-lightbox-share-wrap">
                                <span>
                                    <?php
                                    _e( 'SHARE', PSFW_TD );
                                    ?>
                                </span>
                                <?php
                                include (PSFW_PATH . '/inc/frontend/content/psfw-social.php');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
    <?php
}