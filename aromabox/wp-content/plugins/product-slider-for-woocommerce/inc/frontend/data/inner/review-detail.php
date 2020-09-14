<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); ?>
    <?php
    if((isset($psfw_option['product_type']) && $psfw_option['product_type'] == 'product') && class_exists('WooCommerce')){
    	/*echo"rating";
        $product = wc_get_product( $product_id );
        $rating_count = $product->get_rating_count();
        $average = $product->get_average_rating();
        echo wc_get_rating_html( $average, $rating_count );
        echo "REVIEW"; */
        woocommerce_template_loop_rating();
    }
    ?>