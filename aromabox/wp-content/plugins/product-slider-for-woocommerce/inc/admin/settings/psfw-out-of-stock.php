<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); ?>
<div class="psfw-post-option-wrap psfw-ofs psfw-extra-wrap" <?php echo(isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1 ? "style='display:block';" : "style='display:none;'");?> >
    <label>
        <?php _e( 'Enable Ribbon Position ', PSFW_TD ); ?>
    </label>
    <div class="psfw-post-field-wrap">
        <select name="psfw_option[ofs_position]" class="psfw-ofs_position">
            <?php
            $psfw_position_names = array( 'Top Left', 'Middle Left', 'Bottom Left','Top Right', 'Middle Right', 'Bottom Right' );
            $rn = 1;
            foreach ($psfw_position_names as $psfw_position_name){ ?>
                <option value="<?php echo  $rn; ?>" <?php if ( ! empty( $psfw_option['ofs_position'] ) ) selected( $psfw_option['ofs_position'], $rn ); ?>><?php echo $psfw_position_name; ?>
                </option>
                <?php
                $rn ++;
            }
            ?>    
        </select>
        <div class="psfw-ribbon-position-demo-ofs psfw-preview-image">
                    <?php
                    for ( $cnt = 1; $cnt <= 8; $cnt ++ ) {
                        $ribbon_template = (isset( $psfw_option['ofs_position']) && $psfw_option['ofs_position' ] != '') ? esc_attr( $psfw_option[ 'ofs_position' ] ) : 'template-1';
                        $option_value = $ribbon_template;
                        $cnt_num = $option_value;
                        if ( $cnt != $cnt_num ) {
                            $style = "style='display:none;'";
                        } else {
                            $style = '';
                        }
                        ?>
                        <div class="psfw-ribbon-position-common-ofs" id="psfw-ribbon-position-demo-<?php echo $cnt; ?>-ofs" <?php if ( isset( $style ) ) echo $style; ?>>
                            <h4><?php _e( 'Position', PSFW_TD ); ?> <?php _e( 'Preview', PSFW_TD ); ?></h4>
                            <img src="<?php echo PSFW_IMG_DIR . '/demo/banner/' . $cnt . '.png' ?>">

                        </div>
                    <?php } ?>
        </div>
        <p class="description"> <?php _e( 'Select a position for Ribbon', PSFW_TD ) ?> </p>
    </div>
</div>
<div class ="psfw-post-option-wrap psfw-ofs" <?php echo(isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1 ? "style='display:block;'" : "style='display:none;'");?>>
    <label><?php _e( 'Out Of Stock Template', PSFW_TD ); ?></label>
    <div class="psfw-post-field-wrap">
        <select name="psfw_option[ribbon_template_ofs]" class="psfw-ribbon-template-ofs">
                <?php
            $psfw_ribbon_names = array( 'Gemstone template', 'Plain border template', 'Circular template', 'Testimony template', 'Bow template', 'Cathedra template', 'Mulberry template', 'Edge template' );
            $rn = 1;
            foreach ( $psfw_ribbon_names as $psfw_ribbon_name ) {
            ?>
                <option value="template-<?php echo $rn; ?>" <?php if ( ! empty( $psfw_option[ 'ribbon_template_ofs' ] ) ) selected( $psfw_option[ 'ribbon_template_ofs' ], 'template-' . $rn ); ?>><?php echo $psfw_ribbon_name; ?></option>
                    <?php
                    $rn ++;
                }
                ?>
        </select>
        <div class="psfw-ribbon-demo-ofs psfw-preview-image">
            <?php
            for ( $cnt = 1; $cnt <= 8; $cnt ++ ) {
                $ribbon_template = (isset( $psfw_option['ribbon_template_ofs']) && $psfw_option['ribbon_template_ofs' ] != '') ? esc_attr( $psfw_option[ 'ribbon_template_ofs' ] ) : 'template-1';
                $option_value = $ribbon_template;
                $exploed_array = explode( '-', $option_value );
                $cnt_num = $exploed_array[ 1 ];
                if ( $cnt != $cnt_num ) {
                    $style = "style='display:none;'";
                } else {
                    $style = '';
                }
                ?>
                <div class="psfw-ribbon-common-ofs" id="psfw-ribbon-demo-<?php echo $cnt; ?>-ofs" <?php if ( isset( $style ) ) echo $style; ?>>
                    <h4><?php _e( 'Template', PSFW_TD ); ?> <?php echo $cnt; ?> <?php _e( 'Preview', PSFW_TD ); ?></h4>
                    <img src="<?php echo PSFW_IMG_DIR . '/demo/ribbons/ribbon' . $cnt . '.png' ?>"/>
                </div>
            <?php } ?>
        </div>
    </div>
</div>