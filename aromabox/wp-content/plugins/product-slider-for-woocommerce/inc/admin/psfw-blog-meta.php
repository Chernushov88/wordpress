<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" );
global $post;
$post_id = $post -> ID;
$psfw_option = get_post_meta( $post_id, 'psfw_option', true );
//$this -> print_array( $psfw_option );
?>
<div class="psfw-backend-outer-wrap">
    <div class="psfw-menu-wrapper">
        <ul class="psfw-menu-tab">
            <li data-menu="general-settings" class="psfw-tab-tigger  psfw-active">
                <span class="dashicons dashicons-admin-generic"></span>
                <?php _e( 'General Settings', PSFW_PATH ); ?>
            </li>
           <li data-menu="layout-settings" class="psfw-tab-tigger">
                <span class="dashicons dashicons-layout"></span>
                <?php _e( 'Layout Settings', PSFW_PATH ); ?>
            </li>
            <li data-menu="product-settings" class="psfw-tab-tigger">
                <span class="dashicons dashicons-products"></span>
                <?php _e( 'Product Settings', PSFW_PATH ); ?>
            </li>
            <li data-menu="post-settings" class="psfw-tab-tigger">
                <span class="dashicons dashicons-welcome-write-blog"></span>
                <?php _e( 'Post Settings', PSFW_PATH ); ?>
            </li>
            <li data-menu="customization-settings" class="psfw-tab-tigger">
                <span class="dashicons dashicons-awards"></span>
                <?php _e( 'Customization Settings', PSFW_PATH ); ?>
            </li>

            <li data-menu="ribbon-settings" class="psfw-tab-tigger">
                <span class="dashicons dashicons-awards"></span>
                <?php _e( 'Ribbon/Banner Settings', PSFW_PATH ); ?>
            </li>
            <li data-menu="social-share-settings" class="psfw-tab-tigger">
                <span class="dashicons dashicons-share"></span>
                <?php _e( 'Social Share Settings', PSFW_PATH ); ?>
            </li>
            <li data-menu="lightbox-settings" class="psfw-tab-tigger">
                <span class="dashicons dashicons-search"></span>
                <?php _e( 'Lightbox Settings', PSFW_PATH ); ?>
            </li>
        </ul>
    </div>
    <div class ="psfw-settings-wrap psfw-active-container" data-menu-ref="general-settings">
        <?php include(PSFW_PATH . 'inc/admin/settings/psfw-general.php'); ?>
    </div>
    <div class ="psfw-settings-wrap" data-menu-ref="layout-settings">
        <?php include(PSFW_PATH . 'inc/admin/settings/psfw-layout.php'); ?>
    </div>
    <div class ="psfw-settings-wrap" data-menu-ref="product-settings">
        <?php include(PSFW_PATH . 'inc/admin/settings/psfw-product.php'); ?>
    </div>
    <div class ="psfw-settings-wrap"  data-menu-ref="post-settings">
        <?php include(PSFW_PATH . 'inc/admin/settings/psfw-post.php'); ?>
    </div>
    <div class ="psfw-settings-wrap" data-menu-ref="customization-settings">
        <?php include(PSFW_PATH . 'inc/admin/settings/psfw-customization.php'); ?>
    </div>
    <div class ="psfw-settings-wrap" data-menu-ref="ribbon-settings">
        <?php include(PSFW_PATH . 'inc/admin/settings/psfw-banner.php'); ?>
    </div>
    <div class ="psfw-settings-wrap" data-menu-ref="social-share-settings">
        <?php include(PSFW_PATH . 'inc/admin/settings/psfw-social.php'); ?>
    </div>
    <div class ="psfw-settings-wrap" data-menu-ref="lightbox-settings">
        <?php include(PSFW_PATH . 'inc/admin/settings/psfw-lightbox.php'); ?>
    </div>
</div>