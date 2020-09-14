<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); ?>
<div class="psfw-general-outer-wrap">
    <div class ="psfw-post-option-wrap">
        <label for="psfw-title-view-check" class="psfw-title-view">
            <?php _e( 'Display Product Title', PSFW_TD ); ?>
        </label>
        <div class="psfw-post-field-wrap">
            <label class="psfw-switch">
                <input type="checkbox" class="psfw-show-title psfw-checkbox" value="<?php
                if ( isset( $psfw_option[ 'psfw_show_title' ] ) ) {
                    echo esc_attr( $psfw_option[ 'psfw_show_title' ] );
                } else {
                    echo '0';
                }
                ?>" name="psfw_option[psfw_show_title]" <?php if ( isset( $psfw_option[ 'psfw_show_title' ] ) && $psfw_option[ 'psfw_show_title' ] == '1' ) { ?>checked="checked"<?php } ?> />
                <div class="psfw-slider round"></div>
            </label>
            <p class="description"><?php _e( 'Enable to show title', PSFW_TD ) ?></p>
        </div>
    </div>
    <div class="psfw-post-option-wrap">
        <label for="psfw-content-view-check" class="psfw-content-view">
            <?php _e( 'Display Product Excerpt', PSFW_TD ); ?>
        </label>
        <div class="psfw-post-field-wrap">
            <label class="psfw-switch">
                <input type="checkbox" class="psfw-show-content psfw-checkbox" value="<?php
                if ( isset( $psfw_option[ 'psfw_show_content' ] ) ) {
                    echo esc_attr( $psfw_option[ 'psfw_show_content' ] );
                } else {
                    echo '0';
                }
                ?>" name="psfw_option[psfw_show_content]" <?php if ( isset( $psfw_option[ 'psfw_show_content' ] ) && $psfw_option[ 'psfw_show_content' ] == '1' ) { ?>checked="checked"<?php } ?> />
                <div class="psfw-slider round"></div>
            </label>
            <p class="description"><?php _e( 'Enable to show content', PSFW_TD ) ?></p>
        </div>
    </div>
    <div class="psfw-product-desc-wrapper" <?php if ( isset( $psfw_option[ 'psfw_show_content' ] ) && $psfw_option[ 'psfw_show_content' ] == '1' ) {
                    ?>
             style="display:block;"
             <?php
         } else {
             ?>
             style="display:none;"
             <?php
         }
         ?>>
        <div class ="psfw-post-option-wrap">
            <div class="psfw-post-field-wrap">
                <div class="psfw-excerpt-wrap">
                    <input type="number" class="psfw-post-excerpt" min="10" name="psfw_option[psfw_post_excerpt]"  value="<?php
                    if ( isset( $psfw_option[ 'psfw_post_excerpt' ] ) ) {
                        echo $psfw_option[ 'psfw_post_excerpt' ];
                    } else {
                        echo '15';
                    }
                    ?>"/>
                    <p class="description"><?php _e( 'Enter the length of post content', PSFW_TD ) ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class ="psfw-post-option-wrap">
        <label for="psfw-category-view-check" class="psfw-category-view">
            <?php _e( 'Display Post Category/Taxonomy', PSFW_TD ); ?>
        </label>
        <div class="psfw-post-field-wrap">
            <label class="psfw-switch">
                <input type="checkbox" class="psfw-show-category psfw-checkbox" value="<?php
                if ( isset( $psfw_option[ 'psfw_show_category' ] ) ) {
                    echo esc_attr( $psfw_option[ 'psfw_show_category' ] );
                } else {
                    echo '0';
                }
                ?>" name="psfw_option[psfw_show_category]" <?php if ( isset( $psfw_option[ 'psfw_show_category' ] ) && $psfw_option[ 'psfw_show_category' ] == '1' ) { ?>checked="checked"<?php } ?> />
                <div class="psfw-slider round"></div>
            </label>
            <p class="description"><?php _e( 'Enable to show category', PSFW_TD ) ?></p>
        </div>
    </div>
    <div class ="psfw-post-option-wrap">
        <label for="psfw-link-title" class="psfw-link-title">
            <?php _e( 'Display Product Link in Title', PSFW_TD ); ?>
        </label>
        <div class="psfw-post-field-wrap">
            <label class="psfw-switch">
                <input type="checkbox" class="psfw-show-link-title psfw-checkbox" value="<?php
                if ( isset( $psfw_option[ 'psfw_show_link_title' ] ) ) {
                    echo esc_attr( $psfw_option[ 'psfw_show_link_title' ] );
                } else {
                    echo '0';
                }
                ?>" name="psfw_option[psfw_show_link_title]" <?php if ( isset( $psfw_option[ 'psfw_show_link_title' ] ) && $psfw_option[ 'psfw_show_link_title' ] == '1' ) { ?>checked="checked"<?php } ?> />
                <div class="psfw-slider round"></div>
            </label>
            <p class="description"><?php _e( 'Enable to show product link in title', PSFW_TD ) ?></p>
        </div>
    </div>
    <div class ="psfw-post-option-wrap">
        <label for="psfw-link-image" class="psfw-link-image">
            <?php _e( 'Display Product Link in Image', PSFW_TD ); ?>
        </label>
        <div class="psfw-post-field-wrap">
            <label class="psfw-switch">
                <input type="checkbox" class="psfw-show-link-image psfw-checkbox" value="<?php
                if ( isset( $psfw_option[ 'psfw_show_link_image' ] ) ) {
                    echo esc_attr( $psfw_option[ 'psfw_show_link_image' ] );
                } else {
                    echo '0';
                }
                ?>" name="psfw_option[psfw_show_link_image]" <?php if ( isset( $psfw_option[ 'psfw_show_link_image' ] ) && $psfw_option[ 'psfw_show_link_image' ] == '1' ) { ?>checked="checked"<?php } ?> />
                <div class="psfw-slider round"></div>
            </label>
            <p class="description"><?php _e( 'Enable to show product link in image', PSFW_TD ) ?></p>
        </div>
    </div>
    <div class="psfw-post-option-wrap">
        <label><?php _e( 'Image Size', PSFW_TD ); ?></label>
        <div class="psfw-post-field-wrap">
            <select name="psfw_option[psfw_image_size]" class="psfw-select-image-size">
                <option value="full"  <?php if ( isset( $psfw_option[ 'psfw_image_size' ] ) && $psfw_option[ 'psfw_image_size' ] == 'full' ) echo 'selected=="selected"'; ?>><?php _e( 'Original', PSFW_TD ) ?></option>
                <option value="large"  <?php if ( isset( $psfw_option[ 'psfw_image_size' ] ) && $psfw_option[ 'psfw_image_size' ] == 'large' ) echo 'selected=="selected"'; ?>><?php _e( 'Large', PSFW_TD ) ?></option>
                <option value="medium"  <?php if ( isset( $psfw_option[ 'psfw_image_size' ] ) && $psfw_option[ 'psfw_image_size' ] == 'medium' ) echo 'selected=="selected"'; ?>><?php _e( 'Medium', PSFW_TD ) ?></option>
                <option value="thumbnail"  <?php if ( isset( $psfw_option[ 'psfw_image_size' ] ) && $psfw_option[ 'psfw_image_size' ] == 'thumbnail' ) echo 'selected=="selected"'; ?>><?php _e( 'Thumbnail', PSFW_TD ) ?></option>
            </select>
        </div>
    </div>
    <div class="psfw-post-option-wrap">
        <label><?php _e( 'Image Type', PSFW_TD ); ?></label>
        <div class="psfw-post-field-wrap">
            <select name="psfw_option[psfw_image_type]" class="psfw-select-image-type">
                <option value="normal"  <?php if ( isset( $psfw_option[ 'psfw_image_type' ] ) && $psfw_option[ 'psfw_image_type' ] == 'normal' ) echo 'selected=="selected"'; ?>><?php _e( 'Normal', PSFW_TD ) ?></option>
                <option value="swap"  <?php if ( isset( $psfw_option[ 'psfw_image_type' ] ) && $psfw_option[ 'psfw_image_type' ] == 'swap' ) echo 'selected=="selected"'; ?>><?php _e( 'Swap', PSFW_TD ) ?></option>
                <option value="scroll"  <?php if ( isset( $psfw_option[ 'psfw_image_type' ] ) && $psfw_option[ 'psfw_image_type' ] == 'scroll' ) echo 'selected=="selected"'; ?>><?php _e( 'Scroll', PSFW_TD ) ?></option>
            </select>
            <p class="description"><?php _e( 'Note: This field is not applicable for slider layouts.', PSFW_TD ) ?></p>

        </div>
        <div class="psfw-tooltip-icon">
            <span class="dashicons dashicons-info"></span>
            <span class="psfw-tooltip-info"><?php _e( 'If swap has been selected then please upload swap on hover image in required post.If scroll has been selected then please upload image of larger height.', PSFW_TD ); ?></span>
        </div>
    </div>
</div>