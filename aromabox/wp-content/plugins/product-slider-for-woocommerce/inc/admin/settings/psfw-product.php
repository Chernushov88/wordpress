<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); ?>

<div class="psfw-post-option-wrap">
    <label for="psfw-price-check" class="psfw-price-view">
        <?php _e( 'Display Price', PSFW_TD ); ?>
    </label>
    <div class="psfw-post-field-wrap">
        <label class="psfw-switch">
            <input type="checkbox" class="psfw-show-price psfw-checkbox" value="<?php
            if ( isset( $psfw_option[ 'psfw_show_price' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_show_price' ] );
            } else {
                echo '0';
            }
            ?>" name="psfw_option[psfw_show_price]" <?php if ( isset( $psfw_option[ 'psfw_show_price' ] ) && $psfw_option[ 'psfw_show_price' ] == '1' ) { ?>checked="checked"<?php } ?> />
            <div class="psfw-slider round"></div>
        </label>
        <p class="description"><?php _e( 'Enable to show price', PSFW_TD ) ?></p>
    </div>
</div>
<div class="psfw-price-wrapper" <?php if ( (isset( $psfw_option[ 'psfw_show_price' ] ) && $psfw_option[ 'psfw_show_price' ] == '1' ) && ($psfw_option[ 'product_type' ] != 'download') ) {
                ?> style="display: block;"
         <?php
     } else {
         ?>
         style="display: none;"
         <?php
     }
     ?>>
    <div class="psfw-post-option-wrap">
        <label><?php _e( 'Price Type', PSFW_TD ); ?></label>
        <div class="psfw-post-field-wrap">
            <label><input type="radio" value="actual_price" name="psfw_option[product_price]" <?php
                if ( isset( $psfw_option[ 'product_price' ] ) ) {
                    checked( $psfw_option[ 'product_price' ], 'actual_price' );
                }
                ?> class="psfw-post-content"/><?php _e( "Actual Price", PSFW_TD ); ?></label>
            <label><input type="radio" value="sale_price" name="psfw_option[product_price]" <?php
                if ( isset( $psfw_option[ 'product_price' ] ) ) {
                    checked( $psfw_option[ 'product_price' ], 'sale_price' );
                }
                ?>  class="psfw-post-content"/><?php _e( 'Sale Price', PSFW_TD ); ?></label>
        </div>
    </div>
</div>
<div class="psfw-woocommerce-wrap">
    <div class ="psfw-post-option-wrap">
        <label for="psfw-wishlist-check" class="psfw-wishlist-view">
            <?php _e( 'Display Wishlist Button', PSFW_TD ); ?>
        </label>
        <div class="psfw-post-field-wrap">
            <label class="psfw-switch">
                <input type="checkbox" class="psfw-show-wishlist psfw-checkbox" value="<?php
                if ( isset( $psfw_option[ 'psfw_show_wishlist' ] ) ) {
                    echo esc_attr( $psfw_option[ 'psfw_show_wishlist' ] );
                } else {
                    echo '0';
                }
                ?>" name="psfw_option[psfw_show_wishlist]" <?php if ( isset( $psfw_option[ 'psfw_show_wishlist' ] ) && $psfw_option[ 'psfw_show_wishlist' ] == '1' ) { ?>checked="checked"<?php } ?> />
                <div class="psfw-slider round"></div>
            </label>
            <p class="description"><?php _e( 'Enable to show wishlist button', PSFW_TD ) ?></p>
        </div>
        <div class="psfw-tooltip-icon">
            <span class="dashicons dashicons-info"></span>
            <?php
            $link_html = '<a href="https://wordpress.org/plugins/yith-woocommerce-wishlist/">https://wordpress.org/plugins/yith-woocommerce-wishlist/</a>';
            ?>
            <span class="psfw-tooltip-info"><?php _e( sprintf( 'Note: Please install and activate YITH WooCommerce Wishlist( %s ) plugin to use wishlist button.', $link_html ), PSFW_TD ); ?></span>
        </div>
    </div>
</div>
<div class="psfw-post-option-wrap">
    <label for="psfw-review-check" class="psfw-review-view">
        <?php _e( 'Display Review', PSFW_TD ); ?>
    </label>
    <div class="psfw-post-field-wrap">
        <label class="psfw-switch">
            <input type="checkbox" class="psfw-show-review psfw-checkbox" value="<?php
            if ( isset( $psfw_option['psfw_show_review'] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_show_review' ] );
            } else {
                echo '0';
            }
            ?>" name="psfw_option[psfw_show_review]" <?php if ( isset( $psfw_option[ 'psfw_show_review' ] ) && $psfw_option[ 'psfw_show_review' ] == '1' ) { ?>checked="checked"<?php } ?> />
            <div class="psfw-slider round"></div>
        </label>
        <p class="description"><?php _e( 'Enable to show review', PSFW_TD ) ?></p>
    </div>
</div>

<div class="psfw-button-one-outer-wrap">
    <div class ="psfw-post-option-wrap">
        <label for="psfw-buy-check" class="psfw-buy-view">
            <?php _e( 'Call To Action Button One', PSFW_TD ); ?>
        </label>
        <div class="psfw-post-field-wrap">
            <label class="psfw-switch">
                <input type="checkbox" class="psfw-show-button-one psfw-checkbox" value="<?php
                if ( isset( $psfw_option[ 'psfw_show_button_one' ] ) ) {
                    echo esc_attr( $psfw_option[ 'psfw_show_button_one' ] );
                } else {
                    echo '0';
                }
                ?>" name="psfw_option[psfw_show_button_one]" <?php if ( isset( $psfw_option[ 'psfw_show_button_one' ] ) && $psfw_option[ 'psfw_show_button_one' ] == '1' ) { ?>checked="checked"<?php } ?> />
                <div class="psfw-slider round"></div>
            </label>
            <p class="description"><?php _e( 'Enable to show button one, for example Buy link', PSFW_TD ) ?></p>
        </div>
    </div>
    <div class="psfw-buy-wrapper" <?php if ( isset( $psfw_option[ 'psfw_show_button_one' ] ) && $psfw_option[ 'psfw_show_button_one' ] == '1' ) {
                    ?> style="display: block;"
             <?php
         } else {
             ?>
             style="display: none;"
             <?php
         }
         ?>>
        <div class="psfw-post-option-wrap">
            <label><?php _e( 'Button Link Type', PSFW_TD ); ?></label>
            <div class="psfw-post-field-wrap">
                <select name="psfw_option[psfw_button_one_link_type]" class="psfw-button-one-link-type">
                    <option value="product_detail_link"  <?php if ( isset( $psfw_option[ 'psfw_button_one_link_type' ] ) && $psfw_option[ 'psfw_button_one_link_type' ] == 'product_detail_link' ) echo 'selected=="selected"'; ?>><?php _e( 'Product Detail Link', PSFW_TD ) ?></option>
                    <option value="common_custom_link"  <?php if ( isset( $psfw_option[ 'psfw_button_one_link_type' ] ) && $psfw_option[ 'psfw_button_one_link_type' ] == 'common_custom_link' ) echo 'selected=="selected"'; ?>><?php _e( 'Common Custom Link', PSFW_TD ) ?></option>
                    <option value="individual_custom_link"  <?php if ( isset( $psfw_option[ 'psfw_button_one_link_type' ] ) && $psfw_option[ 'psfw_button_one_link_type' ] == 'individual_custom_link' ) echo 'selected=="selected"'; ?>><?php _e( 'Individual Custom link', PSFW_TD ) ?></option>
                    <?php /*if ( isset( $psfw_option[ 'product_type' ] ) && $psfw_option[ 'product_type' ] == 'product' || $psfw_option[ 'product_type' ] == 'download' ) { */
                        ?>
                    <option value="product_add_cart"  <?php if ( isset( $psfw_option[ 'psfw_button_one_link_type' ] ) && $psfw_option[ 'psfw_button_one_link_type' ] == 'product_add_cart' ) echo 'selected=="selected"'; ?>><?php _e( 'Add to Cart', PSFW_TD ) ?></option>
                    <?php //}
                    ?>
                </select>
            </div>
        </div>
        <div class="psfw-common-link-wrapper">
            <div class="psfw-post-option-wrap">
                <label for="custom-detail-link" class="psfw-custom-link"><?php _e( 'Common Custom Link', PSFW_TD ); ?></label>
                <div class="psfw-post-field-wrap">
                    <input type="text" class="psfw-common-link-button-one" name="psfw_option[common_link_button_one]" value="<?php
                    if ( isset( $psfw_option[ 'common_link_button_one' ] ) ) {
                        echo esc_attr( $psfw_option[ 'common_link_button_one' ] );
                    }
                    ?>">
                </div>
                <div class="psfw-tooltip-icon">
                    <span class="dashicons dashicons-info"></span>
                    <span class="psfw-tooltip-info"><?php _e( 'This link can be useful if you have any third party order processing systems.', PSFW_TD ); ?></span>
                </div>
                <p class="description">
                    <?php _e( 'Please use #product_id, #product_slug or #product_title in the link to replace it with corresponding values in the provided link. For example: http://example.com/order?product_id=#product_id', PSFW_TD ); ?>
                </p>
            </div>
        </div>
        <div class="psfw-button-one-text-wrap">
            <div class="psfw-post-option-wrap">
                <label for="button-one-text" class="psfw-button-text"><?php _e( 'Button Text', PSFW_TD ); ?></label>
                <div class="psfw-post-field-wrap">
                    <input type="text" class="psfw-button-one-text" placeholder="Add Button Text" name="psfw_option[psfw_button_one_text]" value="<?php
                    if ( isset( $psfw_option[ 'psfw_button_one_text' ] ) ) {
                        echo esc_attr( $psfw_option[ 'psfw_button_one_text' ] );
                    }
                    ?>">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="psfw-button-two-outer-wrap">
    <div class="psfw-post-option-wrap">
        <label for="psfw-detail-check" class="psfw-detail-page-view">
            <?php _e( 'Call To Action Button Two', PSFW_TD ); ?>
        </label>
        <div class="psfw-post-field-wrap">
            <label class="psfw-switch">
                <input type="checkbox" class="psfw-show-button-two psfw-checkbox" value="<?php
                if ( isset( $psfw_option[ 'psfw_show_button_two' ] ) ) {
                    echo esc_attr( $psfw_option[ 'psfw_show_button_two' ] );
                } else {
                    echo '0';
                }
                ?>" name="psfw_option[psfw_show_button_two]" <?php if ( isset( $psfw_option[ 'psfw_show_button_two' ] ) && $psfw_option[ 'psfw_show_button_two' ] == '1' ) { ?>checked="checked"<?php } ?> />
                <div class="psfw-slider round"></div>
            </label>
            <p class="description"><?php _e( 'Enable to show button two', PSFW_TD ) ?></p>
        </div>
    </div>
    <div class="psfw-detail-link-wrapper" <?php if ( isset( $psfw_option[ 'psfw_show_button_two' ] ) && $psfw_option[ 'psfw_show_button_two' ] == '1' ) {
            ?> style="display: block;"
             <?php
         } else {
             ?>
             style="display: none;"
             <?php
         }
         ?>>

        <div class="psfw-post-option-wrap">
            <label><?php _e( 'Button Link Type', PSFW_TD ); ?></label>
            <div class="psfw-post-field-wrap">
                <select name="psfw_option[psfw_button_two_link_type]" class="psfw-button-two-link-type">
                    <option value="product_detail_link"  <?php if ( isset( $psfw_option[ 'psfw_button_two_link_type' ] ) && $psfw_option[ 'psfw_button_two_link_type' ] == 'product_detail_link' ) echo 'selected=="selected"'; ?>><?php _e( 'Product Detail Link', PSFW_TD ) ?></option>
                    <option value="common_custom_link"  <?php if ( isset( $psfw_option[ 'psfw_button_two_link_type' ] ) && $psfw_option[ 'psfw_button_two_link_type' ] == 'common_custom_link' ) echo 'selected=="selected"'; ?>><?php _e( 'Common Custom Link', PSFW_TD ) ?></option>
                    <option value="individual_custom_link"  <?php if ( isset( $psfw_option[ 'psfw_button_two_link_type' ] ) && $psfw_option[ 'psfw_button_two_link_type' ] == 'individual_custom_link' ) echo 'selected=="selected"'; ?>><?php _e( 'Individual Custom link', PSFW_TD ) ?></option>
                    <?php /*if ( isset( $psfw_option[ 'product_type' ] ) && $psfw_option[ 'product_type' ] == 'product' || $psfw_option[ 'product_type' ] == 'download' ) {*/
                        ?>
                        <option value="product_add_cart"  <?php if ( isset( $psfw_option[ 'psfw_button_two_link_type' ] ) && $psfw_option[ 'psfw_button_two_link_type' ] == 'product_add_cart' ) echo 'selected=="selected"'; ?>><?php _e( 'Add to Cart', PSFW_TD ) ?></option>
                    <?php //}
                    ?>
                </select>
            </div>
        </div>
        <div class="psfw-common-two-link-wrapper">
            <div class="psfw-post-option-wrap">
                <label for="custom-detail-link" class="psfw-custom-link"><?php _e( 'Common Custom Link', PSFW_TD ); ?></label>
                <div class="psfw-post-field-wrap">
                    <input type="text" class="psfw-common-link-button-two" name="psfw_option[common_link_button_two]" value="<?php
                    if ( isset( $psfw_option[ 'common_link_button_two' ] ) ) {
                        echo esc_attr( $psfw_option[ 'common_link_button_two' ] );
                    }
                    ?>">
                </div>
                <div class="psfw-tooltip-icon">
                    <span class="dashicons dashicons-info"></span>
                    <span class="psfw-tooltip-info"><?php _e( 'This link can be useful if you have any third party order processing systems.', PSFW_TD ); ?></span>
                </div>
                <p class="description">
                    <?php _e( 'Please use #product_id, #product_slug or #product_title in the link to replace it with corresponding values in the provided link. For example: http://example.com/order?product_id=#product_id', PSFW_TD ); ?>
                </p>
            </div>
        </div>
        <div class="psfw-button-two-text-wrap">
            <div class="psfw-post-option-wrap">
                <label for="detail-button-text" class="psfw-detail-text"><?php _e( 'Button Text', PSFW_TD ); ?></label>
                <div class="psfw-post-field-wrap">
                    <input type="text" class="psfw-detail-link-text" placeholder="Add Button Text" name="psfw_option[psfw_button_two_text]" value="<?php
                           if ( isset( $psfw_option[ 'psfw_button_two_text' ] ) ) {
                               echo esc_attr( $psfw_option[ 'psfw_button_two_text' ] );
                           }
                           ?>">
                </div>
            </div>
        </div>
    </div>
</div>