<?php
defined( 'ABSPATH' ) or die( "No script kiddies please!" );
$product_item_id = sanitize_text_field( $_POST[ 'post_id' ] );
$args = array(
    'p' => $product_item_id, // ID of a page, post, or custom type
    'post_type' => 'product'
);
$query = new WP_Query( $args );
?>
<div class="woocommerce psfw-variation-container">
    <div class="psfw-close-variation">
        <i class="fa fa-close"></i>
    </div>
    <?php
    if ( $query -> have_posts() ) {
        while ( $query -> have_posts() ) {
            $query -> the_post();
            woocommerce_variable_add_to_cart();
        }
    } else {
        _e( 'There are no any product variations', PSFW_TD );
    }
    ?>
</div>
<?php
wp_reset_postdata();