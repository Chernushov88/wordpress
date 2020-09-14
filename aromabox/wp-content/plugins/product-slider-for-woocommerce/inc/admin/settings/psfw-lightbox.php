<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); ?>
<div class="psfw-post-option-wrap">
    <label for="psfw-lightbox" class="psfw-lightbox">
        <?php _e( 'Display Lightbox', PSFW_TD ); ?>
    </label>
    <div class="psfw-post-field-wrap">
        <label class="psfw-switch">
            <input type="checkbox" class="psfw-show-lightbox psfw-checkbox" value="<?php
            if ( isset( $psfw_option[ 'psfw_show_lightbox' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_show_lightbox' ] );
            } else {
                echo '0';
            }
            ?>" name="psfw_option[psfw_show_lightbox]" <?php if ( isset( $psfw_option[ 'psfw_show_lightbox' ] ) && $psfw_option[ 'psfw_show_lightbox' ] == '1' ) { ?>checked="checked"<?php } ?> />
            <div class="psfw-slider round"></div>
        </label>
        <p class="description"><?php _e( 'Enable to show full content of product in lightbox', PSFW_TD ) ?></p>
    </div>
</div>
<div class="psfw-lightbox-wrap">
    <div class="psfw-post-option-wrap">
        <label for="psfw-lightbox-label" class="psfw-lightbox">
            <?php _e( 'Lightbox Label', PSFW_TD ); ?>
        </label>
        <div class="psfw-post-field-wrap">
            <input type="text" class="psfw-lightbox-label" name="psfw_option[psfw_lightbox_label]"  value="<?php
            if ( isset( $psfw_option[ 'psfw_lightbox_label' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_lightbox_label' ] );
            }
            ?>"/>
            <p class="description"><?php _e( 'This is used as label to show lightbox quick view', PSFW_TD ) ?></p>
        </div>
    </div>
</div>
<div class ="psfw-post-option-wrap">
    <label><?php _e( 'Lightbox Template', PSFW_TD ); ?></label>
    <div class="psfw-post-field-wrap">
        <select name="psfw_option[psfw_lightbox_template]" class="psfw-lightbox-template">
            <?php
            $psfw_lightbox_names = array( 'Ebony template', 'Verdant template', 'Mandarin template', 'Sapphirine template' );
            $lb = 1;
            foreach ( $psfw_lightbox_names as $psfw_lightbox_name ) {
                ?>
                <option value="template-<?php echo $lb; ?>" <?php if ( ! empty( $psfw_option[ 'psfw_lightbox_template' ] ) ) selected( $psfw_option[ 'psfw_lightbox_template' ], 'template-' . $lb ); ?>><?php echo $psfw_lightbox_name; ?></option>
                <?php
                $lb ++;
            }
            ?>
        </select>

    </div>
</div>
<div class="psfw-lightbox-demo psfw-preview-image">
    <?php
    for ( $cnt = 1; $cnt <= 4; $cnt ++ ) {
        if ( isset( $psfw_option[ 'psfw_lightbox_template' ] ) ) {
            $option_value = $psfw_option[ 'psfw_lightbox_template' ];
            $exploed_array = explode( '-', $option_value );
            $cnt_num = $exploed_array[ 1 ];
            if ( $cnt != $cnt_num ) {
                $style = "style='display:none;'";
            } else {
                $style = '';
            }
        }
        ?>
        <div class="psfw-lightbox-common" id="psfw-lightbox-demo-<?php echo $cnt; ?>" <?php if ( isset( $style ) ) echo $style; ?>>
            <h4><?php _e( 'Template', PSFW_TD ); ?> <?php echo $cnt; ?> <?php _e( 'Preview', PSFW_TD ); ?></h4>
            <img src="<?php echo PSFW_IMG_DIR . '/demo/lightbox-templates/template-' . $cnt . '.png' ?>"/>
        </div>
    <?php } ?>
</div>