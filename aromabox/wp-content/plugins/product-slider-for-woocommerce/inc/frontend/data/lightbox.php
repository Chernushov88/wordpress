<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); 

if ( isset( $psfw_option[ 'psfw_show_lightbox' ] ) && $psfw_option[ 'psfw_show_lightbox' ] == '1' ) {
    ?>
    <a class="psfw-content-lightbox <?php
    if ( empty( $psfw_option[ 'psfw_lightbox_label' ] ) ) {
        echo 'psfw-text-empty';
    }
    ?>">
           <?php if ( isset( $psfw_option[ 'psfw_grid_template' ] ) && $psfw_option[ 'psfw_grid_template' ] == 'template-2' ) {
               ?>
            <i class="fa fa-eye" aria-hidden="true"></i>
            <?php
        } else {
            ?>
            <i class="fa fa-search" aria-hidden="true"></i>
            <?php
        }
        if ( ! empty( $psfw_option[ 'psfw_lightbox_label' ] ) ) {
            ?>
            <span class="button-tooltip"> <?php
                if ( isset( $psfw_option[ 'psfw_lightbox_label' ] ) ) {
                    echo esc_attr( $psfw_option[ 'psfw_lightbox_label' ] );
                }
                ?></span>
        <?php } ?>
    </a>
    <?php
}