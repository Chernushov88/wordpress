<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
require_once ABSPATH . 'wp-admin/includes/user.php';

do_action( 'woocommerce_before_account_navigation' );
?>
<style>

    .single-entry-summary .woocommerce{
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        justify-content: space-between;
        padding: 25px;
    }
    .single-entry-summary .woocommerce .account-details h2{
        color: #fff;
    }
</style>

<nav class="woocommerce-MyAccount-navigation blue_backg">
	<ul>
		<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
			<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
				<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
			</li>
		<?php endforeach; ?>


<?
$user = wp_get_current_user();
if (is_user_role('actor', $user->ID)) {
 echo '<ul class="usel-lest-roles">
 <li><div class="name-price">My account: 147$</div></li>
 <li><a href="javascript:void(0);" onclick="showPopup(\'#popupUserRole\');" class="btn btn-login">Get money</a></li>
 </ul>';
 };
?>

    </ul>






</nav>
<script>
    function showPopup(target){
      jQuery(".darken").fadeIn();
      jQuery(target).addClass('open');
    }
</script>
<?php do_action( 'woocommerce_after_account_navigation' ); ?>
<div id="popupUserRole" class="popup">
  <div class="close" onclick="HidePopup('#popupUserRole');"><img width="20px" height="20px" src="/wp-content/themes/envo-storefront/img/close.svg" alt="Close"></div>
  <div class="modal-content" role="document">
    <div class="modal-header">
      <div class="form-group">
        <h3 class="modal-title"><label >Get money</label></h3>
      </div>

    </div>
    <div class="modal-body">
      <form id="spi" enctype="multipart/form-data"  class="form-horizontal col-md-12"  method="post" maxlength="12">
        <div class="form-group" style="text-align: left;">
            <b>You have 147$</b>
        </div>
        <div class="form-group">
          <input type="number" placeholder="how many you will get:">
        </div>
        <div class="form-group form-control">
            <div tabindex="-1" class="CardNumberField ">
                  <input class="InputElement" autocomplete="cc-number" autocorrect="off" spellcheck="false" name="cardnumber" inputmode="numeric" aria-label="Credit or debit card number" placeholder="card number" aria-invalid="false" value="">
                  <input class="InputElement is-empty" autocomplete="cc-exp" autocorrect="off" spellcheck="false" name="exp-date" inputmode="numeric" aria-label="Credit or debit card expiration date" placeholder="mm / cc" aria-invalid="false" value="">
                  <input class="InputElement is-empty" autocomplete="cc-csc" autocorrect="off" spellcheck="false" name="cvc" inputmode="numeric" aria-label="Credit or debit card CVC/CVV" placeholder="CVC" aria-invalid="false" value="">
              </div>
        </div>

        <!-- <div class="form-group">
          <input type="number" placeholder="how many you will get:">
        </div> -->
        <div class="form-group">
          <button type="button" class="btn ms_btn btn" name="Submit">Submit</button>
          <div class="text-danger" id="response2"></div>
        </div>
      </form>
    </div>
    <div class="modal-footer"></div>
  </div>
</div>