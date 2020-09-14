<?php
defined( 'ABSPATH' ) or die( "No script kiddies please!" );
$product_item_id = sanitize_text_field( $_POST[ 'post_id' ] );
$shortcode_id = sanitize_text_field( $_POST[ 'shortcode_id' ] );
$post_id = $shortcode_id;
$post = get_post($shortcode_id); 
$slug = $post->post_name;
$psfw_option = get_post_meta( $shortcode_id, 'psfw_option', true );
$psfw_advance_option = get_post_meta( $product_item_id, 'psfw_advance_option', true );
$post_type = $psfw_option[ 'product_type' ];
$args = array(
    'p' => $product_item_id, // ID of a page, post, or custom type
    'post_type' => $post_type
);
$query = new WP_Query( $args );

if ( $query -> have_posts() ) {
    while ( $query -> have_posts() ) {
        $query -> the_post();
        include (PSFW_PATH . '/inc/frontend/data/lightbox-content.php');
    }
} else {
    _e( 'No post found', PSFW_TD );
}
wp_reset_postdata();