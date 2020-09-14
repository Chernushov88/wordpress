<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); 
if ( isset( $psfw_option[ 'psfw_show_review' ] ) && $psfw_option[ 'psfw_show_review' ] == 1 ) {
    include (PSFW_PATH . '/inc/frontend/data/inner/review-detail.php');
}