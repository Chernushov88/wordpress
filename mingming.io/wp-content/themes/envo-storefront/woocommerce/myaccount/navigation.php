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
	.woocommerce-MyAccount-navigation-link--payment-methods
	{
		display:none;
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
$sum=0;
$user = wp_get_current_user();
$cher=get_user_meta( $user->ID, 'charity', true);


if (is_user_role('actor', $user->ID)) {

$baln=get_user_meta( $user->ID, 'balance', true);
$baln = $baln * 1;
if($baln < 0){
    $baln2 = 0;
    echo '<div class="hide"> baln2 -'.$baln2.'</div>';
}
if($baln > 0){
    $baln2 = $baln;
    echo '<div class="hide"> baln - '.$baln.'</div>';
}


 if (empty($baln2)){
  $sum=0;
 } else{
  $sum = $baln2;
  $cherSum = $sum * $cher / 100;
  $result = $sum - $cherSum;
 }


 echo '<ul class="usel-lest-roles">
 <li><div class="name-price">Total (USD): '.$sum.'</div></li>
 <li><div class="name-price">Charity (USD): '.$cherSum.'</div></li>
 <li><div class="name-price">Available (USD): '.$result.'</div></li>
 <li><a href="javascript:void(0);" onclick="showPopup(\'#popupUserRole\');" class="btn btn-login">Get money</a></li>
 </ul>';
 };
?>

    </ul>

<a href="javascript:void(0);" class="ms_btn writing_btn" onclick="ShowPopup('#popupWriting')">Write to us</a>




</nav>
<script>
    function showPopup(target){
      jQuery(".darken").fadeIn();
      jQuery(target).addClass('open');
    }
</script>
<?php do_action( 'woocommerce_after_account_navigation' ); ?>
<div id="popupUserRole" class="popup">
  <div class="close" onclick="HidePopup('#popupUserRole');"><img width="20px" height="20px" src="/wp-content/themes/envo-storefront/img/close-white.svg" alt="Close"></div>
  <div class="modal-content" role="document">
    <div class="modal-header">
      <div class="form-group" style=" margin: 0 0 10px;">
        <h3 class="modal-title"><label >Get money</label></h3>
      </div>

    </div>
    <div class="modal-body">
      <form id="spi" enctype="multipart/form-data"  class="form-horizontal col-md-12-"  method="post" maxlength="12">
        <div class="form-group" style=" margin: 0 0 5px;">
          <b>You have (USD): <?=$result?></b>
        </div>
        <div class="form-group" style=" margin: 0 0 5px;">
          <ul>
            <li style="margin-right: auto;"><h4  style="margin: 0;">Send at:</h4></li>
            <li></li>

          </ul>


        </div>
        <div class="form-group">
          <ul>
            <li>
              <label for="">
                <input type="radio" name="radio" value="Striples"><span> Striples</span>
              </label>
            </li>
            <li>
              <label>
                <input type="radio" name="radio" value="Paypal"><span> Paypal</span>
              </label>
              </li>
          </ul>
        </div>
        <div class="form-group">
          <input type="number" id="man" onkeyup="return proverka(this);" onchange="return proverka(this);" value="<?=$result?>" placeholder="how many you will get:">
        </div>
        <div class="form-group form-control">
            <div tabindex="-1" class="CardNumberField ">
                  <input id="ra1" class="InputElement" autocomplete="cc-number" autocorrect="off" spellcheck="false" name="cardnumber" inputmode="numeric" aria-label="Credit or debit card number" aria-invalid="false" value="" placeholder="Input payment requirement here">
                  <!-- <input id="ra2" class="InputElement is-empty" autocomplete="cc-exp" autocorrect="off" spellcheck="false" name="exp-date" inputmode="numeric" aria-label="Credit or debit card expiration date" placeholder="mm / cc" aria-invalid="false" value="">
                  <input id="ra3" class="InputElement is-empty" autocomplete="cc-csc" autocorrect="off" spellcheck="false" name="cvc" inputmode="numeric" aria-label="Credit or debit card CVC/CVV" placeholder="CVC" aria-invalid="false" value=""> -->
              </div>
        </div>

        <!-- <div class="form-group">
          <input type="number" placeholder="how many you will get:">
        </div> -->
        <div class="form-group">
          <button type="button" onclick="send()" class="btn ms_btn btn" name="Submit">Submit</button>
          <div class="text-danger" id="response2"></div>
        </div>
        <div class="small">You can use Stripe or Paypal to withdraw money. Withdrawal requests are processed within 1 to 5 days. The minimum withdrawal amount is 100 USD.
(we will add more withdrawal options in the near future, including wechat pay and alipay) </div>
      </form>
    </div>
    <div class="modal-footer"></div>
  </div>
</div>
<script>
function send()
{
jQuery('#response2').html('');

var ra1=jQuery('#ra1').val();
var ra2=jQuery('#ra2').val();
var ra3=jQuery('#ra3').val();
var ra0=jQuery('#man').val();

if ( (ra1.length>0) && (ra2.length>0)  && (ra3.length>0) )
{
jQuery.ajax({
			type: "POST",
			url: "/getmoney.php",
			data: {
			id:'<?=$user->ID?>',
			man:ra0,
            ra1:ra1,
			ra2:ra2,
			ra3:ra3,
			},
success: function(data)
{
jQuery('#response2').html('');
jQuery('#response2').append('<p style="color:green">Success!</p>');
console.log(data);
}


	});


}
else
{
jQuery('#response2').html('');
jQuery('#response2').append('<p style="color:red">Empty fields!</p>');
}
}
function proverka(input)
{
	var sum=Number(<?=$result; ?>);
 if ( input.value>sum)
 {
input.value =sum;
 }
 else
 {
  input.value = input.value.replace(/[^\d]/g, '');
}
}
</script>