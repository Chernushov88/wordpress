<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" );
global $wpdb;
?>
<div class="psfw-post-option-wrap">
    <label for="psfw-show-custom-query" class="psfw-custom-relation">
        <?php _e( 'Filter Custom Field Post', PSFW_TD ); ?>
    </label>
    <div class="psfw-post-field-wrap">
        <label class="psfw-switch">
            <input type="checkbox" class="psfw-fetch-custom-field-post psfw-checkbox" value="<?php
            if ( isset( $psfw_option[ 'psfw_show_custom_query' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_show_custom_query' ] );
            } else {
                echo '0';
            }
            ?>" name="psfw_option[psfw_show_custom_query]" <?php if ( isset( $psfw_option[ 'psfw_show_custom_query' ] ) && $psfw_option[ 'psfw_show_custom_query' ] == '1' ) { ?>checked="checked"<?php } ?>/>
            <div class="psfw-slider round"></div>
        </label>
        <p class="description"> <?php _e( 'Enable to show posts associated with a certain custom field.', PSFW_TD ) ?></p>
    </div>
</div>
<div class="psfw-custom-field-wrapper" <?php if ( isset( $psfw_option[ 'psfw_show_custom_query' ] ) && $psfw_option[ 'psfw_show_custom_query' ] == '1' ) { ?>
         style="display: block;" <?php } else { ?>
         style="display: none;" <?php } ?>>
    <div class ="psfw-post-option-wrap">
        <label><?php _e( 'Custom Field Query Types', PSFW_TD ); ?></label>
        <div class="psfw-tooltip-icon">
            <span class="dashicons dashicons-info"></span>
            <span class="psfw-tooltip-info">
                <ul>
                    <li>
                        <?php _e( "Single Custom Field Handling: Display post where the meta key is 'price' and the meta value that is LESS THAN OR EQUAL TO 22", PSFW_TD ); ?>
                    </li>
                    <li>
                        <?php _e( "Multiple Custom Field Handling: Display posts that have meta key 'color' NOT LIKE value 'blue' OR meta key 'price' with values BETWEEN 20 and 100", PSFW_TD ); ?>
                    </li>
                </ul>
            </span>
        </div>
        <div class="psfw-post-field-wrap">
            <select name="psfw_option[psfw_custom_field_type]" class="psfw-custom-field-type">
                <option value="single_field"  <?php if ( isset( $psfw_option[ 'psfw_custom_field_type' ] ) && $psfw_option[ 'psfw_custom_field_type' ] == 'single_field' ) echo 'selected == "selected"'; ?>><?php _e( 'Single Custom Field Handling', PSFW_TD ) ?></option>
                <option value="multiple_field"  <?php if ( isset( $psfw_option[ 'psfw_custom_field_type' ] ) && $psfw_option[ 'psfw_custom_field_type' ] == 'multiple_field' ) echo 'selected == "selected"'; ?>><?php _e( 'Multiple Custom Field Handling', PSFW_TD ) ?></option>
            </select>
        </div>
    </div>
    <div class="psfw-meta-key-wrap">
        <div class = "psfw-post-option-wrap">
            <label><?php _e( 'Meta Keys', PSFW_TD ); ?></label>
            <div class="psfw-post-field-wrap">
                <label><input type="radio" value="pre-available" name="psfw_option[meta_keys_type]" <?php
                    if ( isset( $psfw_option[ 'meta_keys_type' ] ) ) {
                        checked( $psfw_option[ 'meta_keys_type' ], 'pre-available' );
                    }
                    ?> class="psfw-meta-key-type"/><?php _e( "Pre Available Meta Keys", PSFW_TD ); ?></label>
                <label><input type="radio" value="other" name="psfw_option[meta_keys_type]" <?php
                    if ( isset( $psfw_option[ 'meta_keys_type' ] ) ) {
                        checked( $psfw_option[ 'meta_keys_type' ], 'other' );
                    }
                    ?>  class="psfw-meta-key-type"/><?php _e( 'Other Meta Keys', PSFW_TD ); ?></label>
                <div class="psfw-other-meta-wrap" <?php if ( isset( $psfw_option[ 'meta_keys_type' ] ) && $psfw_option[ 'meta_keys_type' ] == 'pre-available' ) { ?> style="display: none;" <?php } ?>>
                    <input type="text" class="psfw-other-meta-key" placeholder="<?php _e( 'Enter meta key', PSFW_TD ); ?>" name="psfw_option[psfw_other_meta_key]"  value="<?php
                    if ( isset( $psfw_option[ 'psfw_other_meta_key' ] ) ) {
                        echo $psfw_option[ 'psfw_other_meta_key' ];
                    }
                    ?>"/>
                </div>
                <div class="psfw-pre-meta-key-wrap" <?php if ( isset( $psfw_option[ 'meta_keys_type' ] ) && $psfw_option[ 'meta_keys_type' ] == 'other' ) { ?> style="display:none;" <?php } ?>>
                    <?php
                    $post_meta_table = $wpdb -> postmeta;
                    $meta_keys = $wpdb -> get_results("SELECT DISTINCT(meta_key) FROM $post_meta_table");
                    ?>
                    <select class="psfw-pre-metakey" name="psfw_option[pre_meta_key]">
                        <option value=""><?php _e( 'None' ); ?></option>
                        <?php
                        foreach ( $meta_keys as $meta_key ) {
                            ?>
                            <option value="<?php echo $meta_key -> meta_key; ?>"  <?php if ( isset( $psfw_option[ 'pre_meta_key' ] ) && $psfw_option[ 'pre_meta_key' ] == $meta_key -> meta_key ) echo 'selected == "selected"'; ?>><?php echo $meta_key -> meta_key; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class ="psfw-post-option-wrap">
        <label><?php _e( 'Meta Value Type', PSFW_TD ); ?></label>
        <div class="psfw-post-field-wrap">
            <select name="psfw_option[psfw_meta_value_type]" class="psfw-meta-value-type">
                <option value="string"  <?php if ( isset( $psfw_option[ 'psfw_meta_value_type' ] ) && $psfw_option[ 'psfw_meta_value_type' ] == 'string' ) echo 'selected=="selected"'; ?>><?php _e( 'String', PSFW_TD ) ?></option>
                <option value="number"  <?php if ( isset( $psfw_option[ 'psfw_meta_value_type' ] ) && $psfw_option[ 'psfw_meta_value_type' ] == 'number' ) echo 'selected=="selected"'; ?>><?php _e( 'Number', PSFW_TD ) ?></option>
            </select>
        </div>
    </div>
    <div class="psfw-meta-value-wrap">
        <div class ="psfw-post-option-wrap">
            <label><?php _e( 'Enter Meta Value', PSFW_TD ); ?></label>
            <div class="psfw-post-field-wrap">
                <input type="text" class="psfw-meta-value"  name="psfw_option[psfw_meta_value]"  value="<?php
                if ( isset( $psfw_option[ 'psfw_meta_value' ] ) ) {
                    echo esc_attr( $psfw_option[ 'psfw_meta_value' ] );
                }
                ?>"/>
                <p class="description"><?php _e( "Please leave empty if don't need to filter from meta value", PSFW_TD ); ?></p>
            </div>
        </div>
    </div>
    <div class="psfw-meta-number-wrap" style="display:none;">
        <div class ="psfw-post-option-wrap">
            <label><?php _e( 'Meta Value Number', PSFW_TD ); ?></label>
            <div class="psfw-post-field-wrap">
                <input type="number" min="1" class="psfw-meta-value-number"  name="psfw_option[psfw_meta_value_number]"  value="<?php
                if ( isset( $psfw_option[ 'psfw_meta_value_number' ] ) ) {
                    echo $psfw_option[ 'psfw_meta_value_number' ];
                }
                ?>"/>
                <p class="description"><?php _e( "Please leave empty if don't need to filter from meta value number", PSFW_TD ); ?></p>
            </div>
        </div>
    </div>
    <div class ="psfw-post-option-wrap">
        <label><?php _e( 'Compare', PSFW_TD ); ?></label>
        <div class="psfw-post-field-wrap">
            <select name="psfw_option[psfw_compare_operator]" class="psfw-compare-post">
                <option value="="  <?php if ( isset( $psfw_option[ 'psfw_compare_operator' ] ) && $psfw_option[ 'psfw_compare_operator' ] == '=' ) echo 'selected=="selected"'; ?>><?php _e( 'Equal To', PSFW_TD ) ?></option>
                <option value="!="  <?php if ( isset( $psfw_option[ 'psfw_compare_operator' ] ) && $psfw_option[ 'psfw_compare_operator' ] == '!=' ) echo 'selected=="selected"'; ?>><?php _e( 'Not Equal To', PSFW_TD ) ?></option>
                <option value=">"  <?php if ( isset( $psfw_option[ 'psfw_compare_operator' ] ) && $psfw_option[ 'psfw_compare_operator' ] == '>' ) echo 'selected=="selected"'; ?>><?php _e( 'Greater Than', PSFW_TD ) ?></option>
                <option value=">="  <?php if ( isset( $psfw_option[ 'psfw_compare_operator' ] ) && $psfw_option[ 'psfw_compare_operator' ] == '>=' ) echo 'selected=="selected"'; ?>><?php _e( 'Greater Than Equal To', PSFW_TD ) ?></option>
                <option value="<"  <?php if ( isset( $psfw_option[ 'psfw_compare_operator' ] ) && $psfw_option[ 'psfw_compare_operator' ] == '<' ) echo 'selected=="selected"'; ?>><?php _e( 'Smaller Than', PSFW_TD ) ?></option>
                <option value="<="  <?php if ( isset( $psfw_option[ 'psfw_compare_operator' ] ) && $psfw_option[ 'psfw_compare_operator' ] == '<=' ) echo 'selected=="selected"'; ?>><?php _e( 'Smaller Than Equal To', PSFW_TD ) ?></option>
                <option value="LIKE"  <?php if ( isset( $psfw_option[ 'psfw_compare_operator' ] ) && $psfw_option[ 'psfw_compare_operator' ] == 'LIKE' ) echo 'selected=="selected"'; ?>><?php _e( 'Like', PSFW_TD ) ?></option>
                <option value="NOT LIKE"  <?php if ( isset( $psfw_option[ 'psfw_compare_operator' ] ) && $psfw_option[ 'psfw_compare_operator' ] == 'NOT LIKE' ) echo 'selected=="selected"'; ?>><?php _e( 'Not Like', PSFW_TD ) ?></option>
                <option value="IN"  <?php if ( isset( $psfw_option[ 'psfw_compare_operator' ] ) && $psfw_option[ 'psfw_compare_operator' ] == 'IN' ) echo 'selected=="selected"'; ?>><?php _e( 'In', PSFW_TD ) ?></option>
                <option value="NOT IN"  <?php if ( isset( $psfw_option[ 'psfw_compare_operator' ] ) && $psfw_option[ 'psfw_compare_operator' ] == 'NOT IN' ) echo 'selected=="selected"'; ?>><?php _e( 'Not In', PSFW_TD ) ?></option>
                <option value="BETWEEN"  <?php if ( isset( $psfw_option[ 'psfw_compare_operator' ] ) && $psfw_option[ 'psfw_compare_operator' ] == 'BETWEEN' ) echo 'selected=="selected"'; ?>><?php _e( 'Between', PSFW_TD ) ?></option>
                <option value="NOT BETWEEN"  <?php if ( isset( $psfw_option[ 'psfw_compare_operator' ] ) && $psfw_option[ 'psfw_compare_operator' ] == 'NOT BETWEEN' ) echo 'selected=="selected"'; ?>><?php _e( 'Not Between', PSFW_TD ) ?></option>
                <option value="EXISTS"  <?php if ( isset( $psfw_option[ 'psfw_compare_operator' ] ) && $psfw_option[ 'psfw_compare_operator' ] == 'EXISTS' ) echo 'selected=="selected"'; ?>><?php _e( 'Exists', PSFW_TD ) ?></option>
                <option value="NOT EXISTS"  <?php if ( isset( $psfw_option[ 'psfw_compare_operator' ] ) && $psfw_option[ 'psfw_compare_operator' ] == 'NOT EXISTS' ) echo 'selected=="selected"'; ?>><?php _e( 'Not Exists', PSFW_TD ) ?></option>
            </select>
        </div>
    </div>
    <div class="psfw-multiple-custom-field-wrap" style="display: none;">
        <div class ="psfw-post-option-wrap">
            <label for="psfw-show-relation-blogs" class="psfw-relation-bogs">
                <?php _e( 'Relation', PSFW_TD ); ?>
            </label>
            <div class="psfw-post-field-wrap">
                <label class="psfw-switch">
                    <input type="checkbox" class="psfw-show-custom-relation psfw-checkbox" value="<?php
                    if ( isset( $psfw_option[ 'psfw_show_custom_relation' ] ) ) {
                        echo esc_attr( $psfw_option[ 'psfw_show_custom_relation' ] );
                    } else {
                        echo 0;
                    }
                    ?>" name="psfw_option[psfw_show_custom_relation]" <?php if ( isset( $psfw_option[ 'psfw_show_custom_relation' ] ) && $psfw_option[ 'psfw_show_custom_relation' ] == '1' ) { ?>checked="checked"<?php } ?>/>
                    <div class="psfw-slider round"></div>
                </label>
                <p class="description"> <?php _e( 'Enable to show relation between meta queries', PSFW_TD ) ?></p>
            </div>
        </div>
        <div class="psfw-relation-main-wrap" <?php if ( isset( $psfw_option[ 'psfw_show_custom_relation' ] ) && $psfw_option[ 'psfw_show_custom_relation' ] == '1' ) { ?> style="display: block;" <?php } else { ?>  style="display: none;" <?php } ?>>
            <div class ="psfw-post-option-wrap">
                <label><?php _e( 'Relation', PSFW_TD ); ?></label>
                <div class="psfw-post-field-wrap">
                    <select name="psfw_option[psfw_relation_field]" class="psfw-relation-field">
                        <option value="AND"  <?php if ( isset( $psfw_option[ 'psfw_relation_field' ] ) && $psfw_option[ 'psfw_relation_field' ] == 'AND' ) echo 'selected=="selected"'; ?>><?php _e( 'AND', PSFW_TD ) ?></option>
                        <option value="OR"  <?php if ( isset( $psfw_option[ 'psfw_relation_field' ] ) && $psfw_option[ 'psfw_relation_field' ] == 'OR' ) echo 'selected=="selected"'; ?>><?php _e( 'OR', PSFW_TD ) ?></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="psfw-custom-field-inner-wrap">
            <?php
            if ( isset( $psfw_option[ 'psfw_custom' ] ) && is_array( $psfw_option[ 'psfw_custom' ] ) ) {
                $psfw_custom_count = count( $psfw_option[ 'psfw_custom' ] );
            } else {
                $psfw_custom_count = 0;
            }
            if ( $psfw_custom_count > 0 ) {
                foreach ( $psfw_option[ 'psfw_custom' ] as $custom_key => $custom_detail ) {
                    include(PSFW_PATH . 'inc/admin/forms/psfw-blog-detail.php');
                }
            }
            ?>
        </div>
        <div class="psfw-query-button">
            <input type="button" class="button-primary psfw-add-meta-query" value="<?php _e( 'Add New Meta Condition', PSFW_TD ); ?>">
        </div>
    </div>
</div>