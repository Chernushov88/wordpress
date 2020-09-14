<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); ?>
<div class="psfw-layout-outer-wrap">
    <div class ="psfw-post-option-wrap">
        <label><?php _e( 'Layout', PSFW_TD ); ?></label>
        <div class="psfw-post-field-wrap">
            <select name="psfw_option[psfw_select_layout]" class="psfw-select-layout">
                <option value="carousel"  <?php if ( isset( $psfw_option[ 'psfw_select_layout' ] ) && $psfw_option[ 'psfw_select_layout' ] == 'carousel' ) echo 'selected=="selected"'; ?>><?php _e( 'Carousel', PSFW_TD ) ?></option>
                <option value="slider"  <?php if ( isset( $psfw_option[ 'psfw_select_layout' ] ) && $psfw_option[ 'psfw_select_layout' ] == 'slider' ) echo 'selected=="selected"'; ?>><?php _e( 'Slider', PSFW_TD ) ?></option>
            </select>
        </div>
    </div>
    <div class="psfw-slider-setting-wrap">
        <div class ="psfw-post-option-wrap">
            <label><?php _e( 'Slider Template', PSFW_TD ); ?></label>
            <div class="psfw-post-field-wrap">
                <select name="psfw_option[psfw_slider_template]" class="psfw-slider-template">
                    <?php
                    $psfw_slider_names = array( 'Circular content template', 'Duet layer template', 'Focused template', 'Snazzy template', 'Trio layer template', 'Content aside template', 'Amaranthine template','Bright Scarlet template', 'Striking Template', 'Elementary Template', 'Valiant Template', 'Aquamarine Template', 'Ferocious Template', 'Overlay Template' );                    $s = 1;
                    foreach ($psfw_slider_names as $psfw_slider_name){
                        ?>
                        <option value="template-<?php echo $s; ?>" <?php if ( ! empty( $psfw_option[ 'psfw_slider_template' ] ) ) selected( $psfw_option[ 'psfw_slider_template' ], 'template-' . $s ); ?>><?php echo $psfw_slider_name; ?>
                        </option>
                        <?php
                        $s ++;
                    }
                    ?>    
                </select>
            </div>
        </div>
        <div class="psfw-slider-demo psfw-preview-image">
            <?php
            for ( $cnt = 1; $cnt <= 14; $cnt ++ ) {
                if ( isset( $psfw_option[ 'psfw_slider_template' ] ) ) {
                    $option_value = $psfw_option[ 'psfw_slider_template' ];
                    $exploed_array = explode( '-', $option_value );
                    $cnt_num = $exploed_array[ 1 ];
                    if ( $cnt != $cnt_num ) {
                        $style = "style='display:none;'";
                    } else {
                        $style = '';
                    }
                }
                ?>
                <div class="psfw-slider-common" id="psfw-slider-demo-<?php echo $cnt; ?>" <?php if ( isset( $style ) ) echo $style; ?>>
                    <h4><?php _e( 'Template', PSFW_TD ); ?> <?php echo $cnt; ?> <?php _e( 'Preview', PSFW_TD ); ?></h4>
                    <?php if ($cnt== 1 || $cnt== 2 || $cnt== 3 || $cnt== 4 || $cnt== 5 || $cnt== 6 || $cnt== 7  ){ ?>
                    <img src="<?php echo PSFW_IMG_DIR . '/demo/slider-templates/template-' . $cnt . '.png' ?>"/>
                <?php } else{ ?>
                    <img src="<?php echo PSFW_IMG_DIR . '/demo/slider-templates/template-' . $cnt . '.jpg' ?>"/>
                <?php } ?>
                </div>
            <?php } ?>
        </div>
        <div class ="psfw-post-option-wrap">
            <label><?php _e( 'Container Width', PSFW_TD ); ?></label>
            <div class="psfw-post-field-wrap">
                <input type="number" name="psfw_option[psfw_slider_container_width]" class="psfw_slider_container_width" value="<?php
                    if ( isset( $psfw_option[ 'psfw_slider_container_width' ] ) ) {
                        echo $psfw_option['psfw_slider_container_width'];
                    } else {
                        echo '';
                    } ?>">
                    <p class="description"><?php _e( 'Enter the width of the container in px', PSFW_TD ) ?></p>
            </div>
        </div>
        <?php 
            if(isset($psfw_option[ 'psfw_slider_template' ]) && ($psfw_option[ 'psfw_slider_template'] == "template-3" || $psfw_option[ 'psfw_slider_template'] == "template-5" || $psfw_option[ 'psfw_slider_template'] == "template-7" || $psfw_option[ 'psfw_slider_template'] == "template-14") ){
                    $abc ="style='display:none;'";
                }else{
                    $abc ="style='display:block;'";
                }
        ?>
        <div class ="psfw-post-option-wrap psfw-content-align-wrapper" <?php echo $abc ?> >
            <label><?php _e( 'Content Wrap Align', PSFW_TD ); ?></label>
            <div class="psfw-post-field-wrap">
                <label class="left">
                    <input type="radio" name="psfw_option[content_wrap_align]" class="content_wrap_align" value="left" <?php
                    echo (isset($psfw_option[ 'content_wrap_align' ] ) && $psfw_option[ 'content_wrap_align' ] == "left") ? "checked='checked'" : "";?>> <?php _e('Left', PSFW_TD) ?>
                </label>
                <label class="right">
                    <input type="radio" name="psfw_option[content_wrap_align]" class="content_wrap_align" value="right" <?php
                    echo (isset($psfw_option[ 'content_wrap_align' ] ) && $psfw_option[ 'content_wrap_align' ] == "right") ? "checked='checked'" : "";?>> <?php _e('Right', PSFW_TD) ?>
                </label>
                    <p class="description"><?php _e( 'Select the alignment for the content wrap of the slider', PSFW_TD ) ?></p>
            </div>
        </div>
    </div>
    <div class="psfw-carousel-setting-wrap" style="display:none;">
        <div class ="psfw-post-option-wrap">
            <label><?php _e( 'Carousel Template', PSFW_TD ); ?></label>
            <div class="psfw-post-field-wrap">
                <select name="psfw_option[psfw_carousel_template]" class="psfw-carousel-template">
                    <?php
                    $psfw_carousel_names = array( 'Persimmons Template', 'Jazzy Template', 'Nature Leafy Template', 'Bold Border Template', 'Rubyshine Template', 'Duet Boxed Template', 'Standard Template', 'Dueo Colored Template', 'Shadowy Template', 'Quadruple Template' , 'Classic Template', 'Boxy Template', 'Easy Hover Template', 'Enchant Template', 'Aqua Template', 'Catlinite Template', 'Rosette Template');
                    $c = 1;
                    foreach ( $psfw_carousel_names as $psfw_carousel_name ) {
                        ?>
                        <option value="template-<?php echo $c; ?>" <?php if ( ! empty( $psfw_option[ 'psfw_carousel_template' ] ) ) selected( $psfw_option[ 'psfw_carousel_template' ], 'template-' . $c ); ?>><?php echo $psfw_carousel_name; ?></option>
                        <?php
                        $c ++;
                    }
                    ?>    
                </select>
            </div>
        </div>
        <div class="psfw-carousel-demo psfw-preview-image">
            <?php
            for ( $cnt = 1; $cnt <= 17; $cnt ++ ) {
                if ( isset( $psfw_option[ 'psfw_carousel_template' ] ) ) {
                    $option_value = $psfw_option[ 'psfw_carousel_template' ];
                    $exploed_array = explode( '-', $option_value );
                    $cnt_num = $exploed_array[ 1 ];
                    if ( $cnt != $cnt_num ) {
                        $style = "style='display:none;'";
                    } else {
                        $style = '';
                    }
                }
                ?>
                <div class="psfw-carousel-common" id="psfw-carousel-demo-<?php echo $cnt; ?>" <?php if ( isset( $style ) ) echo $style; ?>>
                    <h4><?php _e( 'Template', PSFW_TD ); ?> <?php echo $cnt; ?> <?php _e( 'Preview', PSFW_TD ); ?></h4>
                    <?php if ($cnt== 1 || $cnt== 2 || $cnt== 3 || $cnt== 4 || $cnt== 5 || $cnt== 6 || $cnt== 7 || $cnt== 8|| $cnt== 9|| $cnt== 10 ){ ?>
                        <img src="<?php echo PSFW_IMG_DIR . '/demo/carousel-templates/template-' . $cnt . '.png' ?>"/>
                     <?php } else{ ?>
                        <img src="<?php echo PSFW_IMG_DIR . '/demo/carousel-templates/template-' . $cnt . '.jpg' ?>"/>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <div class ="psfw-post-option-wrap">
            <label> <?php _e( 'Slide Column', PSFW_TD ); ?> </label>
            <div class="psfw-post-field-wrap">
                <input type="number" name="psfw_option[psfw_slide_column]" min="1" max="4" class="psfw-slide-column" value="<?php
                if ( isset( $psfw_option[ 'psfw_slide_column' ] ) ) {
                    echo esc_attr( $psfw_option[ 'psfw_slide_column' ] );
                } else {
                    echo '3';
                }
                ?>">
            </div>
        </div>
        <div class ="psfw-post-option-wrap">
            <label><?php _e( 'Slide Width', PSFW_TD ); ?></label>
            <div class="psfw-post-field-wrap">
                <input type="text" name="psfw_option[psfw_slide_width]" class="psfw-slide-width" value="<?php
                if(isset($psfw_option['psfw_slide_width'])){
                    echo esc_attr( $psfw_option[ 'psfw_slide_width' ] );
                } else {
                    echo '350';
                }
                ?>">
            </div>
        </div>
        <div class ="psfw-post-option-wrap">
            <label for="psfw-title-view-check" class="psfw-title-view">
                <?php _e( 'Label Out Of Stock Products', PSFW_TD ); ?>
            </label>
            <div class="psfw-post-field-wrap">
                <label class="psfw-switch">
                    <input type="checkbox" class="psfw_label_ofsp psfw-checkbox" value="<?php
                    if ( isset( $psfw_option[ 'psfw_label_ofsp' ] ) ) {
                        echo esc_attr( $psfw_option[ 'psfw_label_ofsp' ] );
                    } else {
                        echo '0';
                    }
                    ?>" name="psfw_option[psfw_label_ofsp]" <?php if ( isset( $psfw_option[ 'psfw_label_ofsp' ] ) && $psfw_option[ 'psfw_label_ofsp' ] == '1' ) { ?>checked="checked"<?php } ?> />
                    <div class="psfw-slider round"></div>
                </label>
                <p class="description"><?php _e( 'Enable to auto add ribbon labeled "Out Of Stock"', PSFW_TD ) ?></p>
            </div>
        </div>
        <?php  include(PSFW_PATH . 'inc/admin/settings/psfw-out-of-stock.php'); ?>
    </div>
</div>