<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); ?>
<div class ="psfw-post-option-wrap">
    <label for="psfw-show-popular-query" class="psfw-popular-relation">
        <?php _e( 'Filter Popular Post', PSFW_TD ); ?>
    </label>
    <div class="psfw-post-field-wrap">
        <label class="psfw-switch">
            <input type="checkbox" class="psfw-show-popular-relation psfw-checkbox" value="<?php
            if ( isset( $psfw_option[ 'psfw_show_popular_query' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_show_popular_query' ] );
            } else {
                echo '0';
            }
            ?>" name="psfw_option[psfw_show_popular_query]" <?php if ( isset( $psfw_option[ 'psfw_show_popular_query' ] ) && $psfw_option[ 'psfw_show_popular_query' ] == '1' ) { ?>checked="checked"<?php } ?>/>
            <div class="psfw-slider round"></div>
        </label>
        <p class="description"> <?php _e( 'Enable to show popular posts.', PSFW_TD ) ?></p>
    </div>
</div>
<div class="psfw-popular-inner-wrap" <?php if ( isset( $psfw_option[ 'psfw_show_popular_query' ] ) && $psfw_option[ 'psfw_show_popular_query' ] == '1' ) { ?>
         style="display: block;" <?php } else { ?>
         style="display: none;" <?php } ?>>
    <div class ="psfw-post-option-wrap">
        <label><?php _e( 'Choose Popular Posts By', PSFW_TD ); ?></label>
        <div class="psfw-post-field-wrap">
            <select name="psfw_option[psfw_select_popular]" class="psfw-select-popular">
                <option value="view"  <?php if ( isset( $psfw_option[ 'psfw_select_popular' ] ) && $psfw_option[ 'psfw_select_popular' ] == 'view' ) echo 'selected == "selected"'; ?>><?php _e( 'View', PSFW_TD ) ?></option>
                <option value="comment"  <?php if ( isset( $psfw_option[ 'psfw_select_popular' ] ) && $psfw_option[ 'psfw_select_popular' ] == 'comment' ) echo 'selected == "selected"'; ?>><?php _e( 'Comment', PSFW_TD ) ?></option>
            </select>
        </div>
    </div>
</div>