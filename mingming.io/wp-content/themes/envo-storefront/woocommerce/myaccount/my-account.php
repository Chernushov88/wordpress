<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
?>
<!-- test my-account -->
<?do_action( 'woocommerce_account_navigation' ); ?>
<style>
    .row-account .single-head.page-head.no-thumbnail {
        clear: both;
        margin-bottom: 10px;
        padding: 10px 0%;
        margin: 0 0%;
    }
    .row-account .main-content-page.single-content{
        padding: 0;
    }
    .row-account >.col-md-9{
        width: 100%;
    }
    .row-account #sidebar{display: none;}
    .woocommerce-MyAccount-navigation-link--dashboard,
    .woocommerce-MyAccount-navigation-link--downloads,
    .woocommerce-MyAccount-navigation-link--payment-methods,
    .woocommerce-MyAccount-navigation-link--edit-address{display: none;}
</style>
<div class="woocommerce-MyAccount-content purple_backg">

  <?/* get_template_part('mes'); */?>


	<?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_content' );
	?>
</div>
