<?php
defined( 'ABSPATH' ) or die( "No script kiddies please!" );
global $post;
$post_id = $post -> ID;
$psfw_advance_option = get_post_meta( $post_id, 'psfw_advance_option', true );
?>
<div class="psfw-general-outer-wrap">
    <?php for ( $r = 1; $r <= 6; $r ++ ) { ?>
        <div class="psfw-ribbon-outer-wrap">
            <div class="psfw-post-option-wrap psfw-extra-wrap">
                <div class="psfw-down-wrap">
                    <label for="psfw-ribbon-view-check" class="psfw-ribbon-view">
                        <?php _e( 'Ribbon Position ' . $r, PSFW_TD ); ?>
                    </label>
                    <img src="<?php echo PSFW_IMG_DIR . '/demo/banner/' . $r . '.png' ?>">
                </div>
                <div class="psfw-post-field-wrap">
                    <select name="psfw_advance_option[individual_ribbon_<?php echo $r; ?>_template]" class="psfw-indi-ribbon-template">
                        <option value="default" <?php if ( ! empty( $psfw_advance_option[ 'individual_ribbon_' . $r . '_template' ] ) ) selected( $psfw_advance_option[ 'individual_ribbon_' . $r . '_template' ], 'default' ); ?>><?php _e( 'Default', PSFW_TD ) ?></option>
                        <?php
                        $psfw_ind_ribbon_names = array( 'Gemstone template', 'Plain border template', 'Circular template', 'Testimony template', 'Bow template', 'Cathedra template', 'Mulberry template', 'Edge template' );
                        $irb = 1;
                        foreach ( $psfw_ind_ribbon_names as $psfw_ind_ribbon_name ) {
                            ?>
                            <option value="template-<?php echo $irb; ?>" <?php if ( ! empty( $psfw_advance_option[ 'individual_ribbon_' . $r . '_template' ] ) ) selected( $psfw_advance_option[ 'individual_ribbon_' . $r . '_template' ], 'template-' . $irb ); ?>><?php echo $psfw_ind_ribbon_name; ?></option>
                            <?php
                            $irb ++;
                        }
                        ?>
                        <option value="none" <?php if ( ! empty( $psfw_advance_option[ 'individual_ribbon_' . $r . '_template' ] ) ) selected( $psfw_advance_option[ 'individual_ribbon_' . $r . '_template' ], 'none' ); ?>><?php _e( 'None', PSFW_TD ) ?></option>
                    </select>
                    <div class="psfw-ribbon-demo psfw-preview-image">
                        <?php
                        for ( $cnt = 1; $cnt <= 8; $cnt ++ ) {
                            $individual_ribbon = (isset( $psfw_advance_option[ 'individual_ribbon_' . $r . '_template' ] ) && $psfw_advance_option[ 'individual_ribbon_' . $r . '_template' ] != '') ? esc_attr( $psfw_advance_option[ 'individual_ribbon_' . $r . '_template' ] ) : 'default';
                            if ( $individual_ribbon == 'default' || $individual_ribbon == 'none' ) {
                                $style = "style='display:none;'";
                            } else {
                                $option_value = $individual_ribbon;
                                $exploed_array = explode( '-', $option_value );
                                $cnt_num = $exploed_array[ 1 ];
                                if ( $cnt != $cnt_num ) {
                                    $style = "style='display:none;'";
                                } else {
                                    $style = '';
                                }
                            }
                            ?>
                            <div class="psfw-ribbon-common" id="psfw-ribbon-demo-<?php echo $cnt; ?>" <?php if ( isset( $style ) ) echo $style; ?>>
                                <h4><?php _e( 'Template', PSFW_TD ); ?> <?php echo $cnt; ?> <?php _e( 'Preview', PSFW_TD ); ?></h4>
                                <img src="<?php echo PSFW_IMG_DIR . '/demo/ribbons/ribbon' . $cnt . '.png' ?>"/>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php
            if ( isset( $psfw_advance_option[ 'individual_ribbon_' . $r . '_template' ] ) && $psfw_advance_option[ 'individual_ribbon_' . $r . '_template' ] == 'default' ) {
                $inline_style = 'none';
            } else if ( ! isset( $psfw_advance_option[ 'individual_ribbon_' . $r . '_template' ] ) ) {
                $inline_style = 'none';
            } else if ( isset( $psfw_advance_option[ 'individual_ribbon_' . $r . '_template' ] ) && $psfw_advance_option[ 'individual_ribbon_' . $r . '_template' ] == 'none' ) {
                $inline_style = 'none';
            } else {
                $inline_style = 'block';
            }
            ?>
            <div class="psfw-ribbon-individual-settings" style="display: <?php echo $inline_style; ?>">
                <div class="psfw-post-option-wrap">
                    <label for="psfw-label" class="psfw-label">
                        <?php _e( 'Ribbon Type', PSFW_TD ); ?>
                    </label>

                    <div class="psfw-post-field-wrap">
                        <label><input type="radio" value="text" name="psfw_advance_option[individual_ribbon_type_<?php echo $r; ?>]" <?php
                            if ( isset( $psfw_advance_option[ 'individual_ribbon_type_' . $r ] ) ) {
                                checked( $psfw_advance_option[ 'individual_ribbon_type_' . $r ], 'text' );
                            }
                            ?> class="psfw-ribbon-type"/><?php _e( "Text", PSFW_TD ); ?></label>
                        <label><input type="radio" value="icon" name="psfw_advance_option[individual_ribbon_type_<?php echo $r; ?>]" <?php
                            if ( isset( $psfw_advance_option[ 'individual_ribbon_type_' . $r ] ) ) {
                                checked( $psfw_advance_option[ 'individual_ribbon_type_' . $r ], 'icon' );
                            }
                            ?>  class="psfw-ribbon-type"/><?php _e( 'Icon', PSFW_TD ); ?></label>
                        <div class="psfw-ribbon-text-wrap" <?php if ( isset( $psfw_advance_option[ 'individual_ribbon_type_' . $r ] ) && $psfw_advance_option[ 'individual_ribbon_type_' . $r ] == 'text' ) { ?> style="display: block;" <?php } else { ?> style="display: none;" <?php } ?>>
                            <input type="text" class="psfw-ribbon-<?php echo $r; ?>-text" name="psfw_advance_option[individual_ribbon_<?php echo $r; ?>_text]" value="<?php
                            if ( isset( $psfw_advance_option[ 'individual_ribbon_' . $r . '_text' ] ) ) {
                                echo esc_attr( $psfw_advance_option[ 'individual_ribbon_' . $r . '_text' ] );
                            }
                            ?>">
                        </div>
                        <div class="psfw-ribbon-icon-wrap" <?php if ( isset( $psfw_advance_option[ 'individual_ribbon_type_' . $r ] ) && $psfw_advance_option[ 'individual_ribbon_type_' . $r ] == 'icon' ) { ?> style="display: block;" <?php } else { ?> style="display: none;" <?php } ?>>
                            <input class="regular-text" type="hidden" id="psfw_icon_<?php echo $r; ?>_picker_id" name="psfw_advance_option[individual_ribbon_<?php echo $r; ?>_icon]" value="<?php
                            if ( isset( $psfw_advance_option[ 'individual_ribbon_' . $r . '_icon' ] ) ) {
                                echo esc_attr( $psfw_advance_option[ 'individual_ribbon_' . $r . '_icon' ] );
                            }
                            ?>"/>
                            <div id="preview_icon_picker_example_icon<?php echo $r; ?>" data-target="#psfw_icon_<?php echo $r; ?>_picker_id" class="psfw-icon-picker button icon-picker <?php
                                 if ( isset( $psfw_advance_option[ 'individual_ribbon_' . $r . '_icon' ] ) ) {
                                     $v = explode( '|', $psfw_advance_option[ 'individual_ribbon_' . $r . '_icon' ] );
                                     echo $v[ 0 ] . ' ' . $v[ 1 ];
                                 } else {
                                     echo esc_attr( 'dashicons dashicons-plus' );
                                 }
                                 ?>"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>