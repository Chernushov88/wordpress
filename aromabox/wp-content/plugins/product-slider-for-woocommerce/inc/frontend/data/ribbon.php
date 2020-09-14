<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); ?>
<div class="psfw-ribbon-wrapper">
    <?php
    $individual_ribbon_1 = isset( $psfw_advance_option[ 'individual_ribbon_1_template' ] ) ? esc_attr( $psfw_advance_option[ 'individual_ribbon_1_template' ] ) : 'default';

    if ( $individual_ribbon_1 == 'default' ) {
        if ( (isset ($psfw_option[ 'psfw_show_ribbon_1' ] ) && $psfw_option[ 'psfw_show_ribbon_1' ] == '1') || ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 1)) ) {
            $r = 1;
            ?>
            <div class="psfw-ribbon-1-outer-wrapper psfw-clearfix">
                <?php
                if ( ( isset($psfw_option[ 'psfw_show_ribbon_1' ] ) && $psfw_option[ 'psfw_show_ribbon_1' ] == '1')){
                    include (PSFW_PATH . '/inc/frontend/data/ribbon/ribbon-settings.php');
                }
                if ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 1)){
                    include(PSFW_PATH .'inc/frontend/data/ribbon/out-of-stock-ribbon.php');
                }
                ?>
            </div>
            <?php
        }
    } else if ( $individual_ribbon_1 == 'template-1' || $individual_ribbon_1 == 'template-2' || $individual_ribbon_1 == 'template-3' || $individual_ribbon_1 == 'template-4' || $individual_ribbon_1 == 'template-5' || $individual_ribbon_1 == 'template-6' || $individual_ribbon_1 == 'template-7' || $individual_ribbon_1 == 'template-8' ) {
        $individual_ribbon = 1;
        ?>
        <div class="psfw-ribbon-1-outer-wrapper psfw-clearfix">
                <?php
            include (PSFW_PATH . '/inc/frontend/data/ribbon/individual-ribbon.php');
            if ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 1)){
                    include(PSFW_PATH .'inc/frontend/data/ribbon/out-of-stock-ribbon.php');
                }
                ?>
        </div><?php
    }

    $individual_ribbon_2 = isset( $psfw_advance_option[ 'individual_ribbon_2_template' ] ) ? esc_attr( $psfw_advance_option[ 'individual_ribbon_2_template' ] ) : 'default';

    if ( $individual_ribbon_2 == 'default' ) {
        if ( (isset( $psfw_option[ 'psfw_show_ribbon_2' ] ) && $psfw_option[ 'psfw_show_ribbon_2' ] == '1') || ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 2)) ) {
            $r = 2;
            ?>
            <div class="psfw-ribbon-2-outer-wrapper psfw-clearfix">
                <?php
                if ( isset( $psfw_option[ 'psfw_show_ribbon_2' ] ) && $psfw_option[ 'psfw_show_ribbon_2' ] == '1' ) {
                    include (PSFW_PATH . '/inc/frontend/data/ribbon/ribbon-settings.php');
                }
                if ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 2)){
                    include(PSFW_PATH .'inc/frontend/data/ribbon/out-of-stock-ribbon.php');
                }
                ?>
            </div>
            <?php
        }
    } else if ( $individual_ribbon_2 == 'template-1' || $individual_ribbon_2 == 'template-2' || $individual_ribbon_2 == 'template-3' || $individual_ribbon_2 == 'template-4' || $individual_ribbon_2 == 'template-5' || $individual_ribbon_2 == 'template-6' || $individual_ribbon_2 == 'template-7' || $individual_ribbon_2 == 'template-8' ) {

        $individual_ribbon = 2;
        ?>
        <div class="psfw-ribbon-2-outer-wrapper psfw-clearfix">
                <?php
            include (PSFW_PATH . '/inc/frontend/data/ribbon/individual-ribbon.php');
            if ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 2)){
                    include(PSFW_PATH .'inc/frontend/data/ribbon/out-of-stock-ribbon.php');
                }
                ?>
        </div><?php
    }

    $individual_ribbon_3 = isset( $psfw_advance_option[ 'individual_ribbon_3_template' ] ) ? esc_attr( $psfw_advance_option[ 'individual_ribbon_3_template' ] ) : 'default';
    if ( $individual_ribbon_3 == 'default' ) {

        if ( (isset( $psfw_option[ 'psfw_show_ribbon_3' ] ) && $psfw_option[ 'psfw_show_ribbon_3' ] == '1') || ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 3))) {
            $r = 3;
            ?>
            <div class="psfw-ribbon-3-outer-wrapper psfw-clearfix">
                <?php
                if ( isset( $psfw_option[ 'psfw_show_ribbon_3' ] ) && $psfw_option[ 'psfw_show_ribbon_3' ] == '1' ) {
                    include (PSFW_PATH . '/inc/frontend/data/ribbon/ribbon-settings.php');
                }
                if ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 3)){
                    include(PSFW_PATH .'inc/frontend/data/ribbon/out-of-stock-ribbon.php');
                }
                ?>
            </div>
            <?php
        }
    } else if ( $individual_ribbon_3 == 'template-1' || $individual_ribbon_3 == 'template-2' || $individual_ribbon_3 == 'template-3' || $individual_ribbon_3 == 'template-4' || $individual_ribbon_3 == 'template-5' || $individual_ribbon_3 == 'template-6' || $individual_ribbon_3 == 'template-7' || $individual_ribbon_3 == 'template-8' ) {
        $individual_ribbon = 3;
        ?>
        <div class="psfw-ribbon-3-outer-wrapper psfw-clearfix">
                <?php
            include (PSFW_PATH . '/inc/frontend/data/ribbon/individual-ribbon.php');
            if ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 3)){
                    include(PSFW_PATH .'inc/frontend/data/ribbon/out-of-stock-ribbon.php');
                }
                ?>
        </div><?php
    }

    $individual_ribbon_4 = isset( $psfw_advance_option[ 'individual_ribbon_4_template' ] ) ? esc_attr( $psfw_advance_option[ 'individual_ribbon_4_template' ] ) : 'default';
    if ( $individual_ribbon_4 == 'default' ) {

        if ( (isset( $psfw_option[ 'psfw_show_ribbon_4' ] ) && $psfw_option[ 'psfw_show_ribbon_4' ] == '1') || ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 4)) ) {
            $r = 4;
            ?>
            <div class="psfw-ribbon-4-outer-wrapper psfw-clearfix">
                <?php
                if ( isset( $psfw_option[ 'psfw_show_ribbon_4' ] ) && $psfw_option[ 'psfw_show_ribbon_4' ] == '1' ) {
                    include (PSFW_PATH . '/inc/frontend/data/ribbon/ribbon-settings.php');
                }
                if ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 4)){
                    include(PSFW_PATH .'inc/frontend/data/ribbon/out-of-stock-ribbon.php');
                }
                ?>
            </div>
            <?php
        }
    } else if ( $individual_ribbon_4 == 'template-1' || $individual_ribbon_4 == 'template-2' || $individual_ribbon_4 == 'template-3' || $individual_ribbon_4 == 'template-4' || $individual_ribbon_4 == 'template-5' || $individual_ribbon_4 == 'template-6' || $individual_ribbon_4 == 'template-7' || $individual_ribbon_4 == 'template-8' ) {
        $individual_ribbon = 4;
        ?>
        <div class="psfw-ribbon-4-outer-wrapper psfw-clearfix">
                <?php
            include (PSFW_PATH . '/inc/frontend/data/ribbon/individual-ribbon.php');
            if ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 4)){
                    include(PSFW_PATH .'inc/frontend/data/ribbon/out-of-stock-ribbon.php');
                }
                ?>
        </div><?php
    }

    $individual_ribbon_5 = isset( $psfw_advance_option[ 'individual_ribbon_5_template' ] ) ? esc_attr( $psfw_advance_option[ 'individual_ribbon_5_template' ] ) : 'default';
    if ( $individual_ribbon_5 == 'default' ) {

        if ( (isset( $psfw_option[ 'psfw_show_ribbon_5' ] ) && $psfw_option[ 'psfw_show_ribbon_5' ] == '1') || ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 5)) ) {
            $r = 5;
            ?>
            <div class="psfw-ribbon-5-outer-wrapper psfw-clearfix">
                <?php
                if ( isset( $psfw_option[ 'psfw_show_ribbon_5' ] ) && $psfw_option[ 'psfw_show_ribbon_5' ] == '1' ) {
                    include (PSFW_PATH . '/inc/frontend/data/ribbon/ribbon-settings.php');
                }
                if ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 5)){
                    include(PSFW_PATH .'inc/frontend/data/ribbon/out-of-stock-ribbon.php');
                }
                ?>
            </div>
            <?php
        }
    } else if ( $individual_ribbon_5 == 'template-1' || $individual_ribbon_5 == 'template-2' || $individual_ribbon_5 == 'template-3' || $individual_ribbon_5 == 'template-4' || $individual_ribbon_5 == 'template-5' || $individual_ribbon_5 == 'template-6' || $individual_ribbon_5 == 'template-7' || $individual_ribbon_5 == 'template-8' ) {
        $individual_ribbon = 5;
        ?>
        <div class="psfw-ribbon-5-outer-wrapper psfw-clearfix">
                <?php
            include (PSFW_PATH . '/inc/frontend/data/ribbon/individual-ribbon.php');
            if ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 5)){
                    include(PSFW_PATH .'inc/frontend/data/ribbon/out-of-stock-ribbon.php');
                }
                ?>
        </div><?php
    }

    $individual_ribbon_6 = isset( $psfw_advance_option[ 'individual_ribbon_6_template' ] ) ? esc_attr( $psfw_advance_option[ 'individual_ribbon_6_template' ] ) : 'default';
    if ( $individual_ribbon_6 == 'default' ) {

        if ( (isset( $psfw_option[ 'psfw_show_ribbon_6' ] ) && $psfw_option[ 'psfw_show_ribbon_6' ] == '1')  || ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 6))) {
            $r = 6;
            ?>
            <div class="psfw-ribbon-6-outer-wrapper psfw-clearfix">
                <?php
                if ( isset( $psfw_option[ 'psfw_show_ribbon_6' ] ) && $psfw_option[ 'psfw_show_ribbon_6' ] == '1' ) {
                    include (PSFW_PATH . '/inc/frontend/data/ribbon/ribbon-settings.php');
                }
                if ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 6)){
                    include(PSFW_PATH .'inc/frontend/data/ribbon/out-of-stock-ribbon.php');
                }
                ?>
            </div>
            <?php
        }
    } else if ( $individual_ribbon_6 == 'template-1' || $individual_ribbon_6 == 'template-2' || $individual_ribbon_6 == 'template-3' || $individual_ribbon_6 == 'template-4' || $individual_ribbon_6 == 'template-5' || $individual_ribbon_6 == 'template-6' || $individual_ribbon_6 == 'template-7' || $individual_ribbon_6 == 'template-8' ) {
        $individual_ribbon = 6;

        ?>
        <div class="psfw-ribbon-6-outer-wrapper psfw-clearfix">
                <?php
            include (PSFW_PATH . '/inc/frontend/data/ribbon/individual-ribbon.php');
            if ((isset($psfw_option[ 'psfw_label_ofsp' ]) && $psfw_option[ 'psfw_label_ofsp' ] == 1) && (isset($psfw_option['ofs_position']) && $psfw_option['ofs_position']== 6)){
                    include(PSFW_PATH .'inc/frontend/data/ribbon/out-of-stock-ribbon.php');
                }
                ?>
        </div><?php
    }
    ?>
</div>