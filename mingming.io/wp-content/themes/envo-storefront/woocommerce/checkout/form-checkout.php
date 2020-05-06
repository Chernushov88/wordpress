<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>
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

.container-fluid{
  padding: 0;
}
  #order-form{
  font-size: 14px;
  /*background: #3bc8e7;*/
  border-radius: 10px;
  margin: 15px 0 10px;
  padding: 10px 25px;
  /*color: #fff;*/
  }
  #order-form a{
    /*color: #fff;*/
  }
  .col-sidebar{
    padding-top: 15px;
    float: right;
  }
  .sidebar-booking{
/*    background: #3bc8e7;
    border: 5px solid #3bc8e7;*/
    border-radius: 10px;
    margin-right: 20px;
    max-width: 400px;
    padding: 20px 24px 0;
    position: relative;
  }
  .sidebar-booking h3{
  margin-bottom: 24px;
  margin-top: 0;
  font-size: 25px;
  /*color: #fff;*/
  }
  .block-img{
  align-items: flex-start;
  display: flex;
  line-height: 24px;
  margin-left: 15px;
  min-height: 40px;
  padding-bottom: 8px;
  }
  .block-img-in{
  background: transparent;
  left: -15px;
  padding: 6px 0 10px;
  position: relative;
  }
  .block-img-in img{
  flex-grow: 1;
  width: 30px;
  height: 30px;
  vertical-align: middle;
  }
  .block-img p{
  flex: 1;
  margin: 0 0 1em;
  font-size: 12px;
  line-height: 1.5;
  }
  b, strong {
  font-weight: 700;
  }
  .form-group-in{
  margin-top: 10px;
  }
  .form-group-in label {
  margin-bottom: 0;
  }
  /* Tooltip container */
  .tooltip {
  position: relative;
  }
  /* Tooltip text */
  .tooltip .tooltiptext {
  visibility: hidden;
  width: 100%;
  min-width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  padding: 5px 0;
  border-radius: 6px;
  /* Position the tooltip text - see examples below! */
  position: absolute;
  z-index: 1;
  font-size: 10px;
  }
  .tooltip-top {
  bottom: 125%;
  left: 50%;
  transform: translate(-50%, 0);
  }
  .tooltip-top::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
  }
  /* Show the tooltip text when you mouse over the tooltip container */
  .tooltip:hover .tooltiptext {
  visibility: visible;
  }
  .tooltip .fa{
  margin-left: 5px;
  }
  .row-radio,
  .row-radio-textarea{
    display: none;
  }
  .row-radio.active,
  .row-radio-textarea.active{
    display: block;
  }
  .row-radio-textarea{
    min-height: 90px;
    padding-bottom:9px;resize:none;height:80px
  }
    .CardNumberField{
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
  }
  .CardNumberField .InputElement{
    width: auto;
    border: 0;
    outline: 0;
    background: transparent;
    padding: 6px 10px;
    height: 100%;

  }
  .InputElement.is-empty{
    width: 60px;
    padding: 6px 0;
    margin-left: auto;
  }
  .InputElement.is-empty:last-child{
    margin-left: 0;
  }
.popup{position:fixed;left:50%;top:-200%;transform:translate(-50%,-50%);z-index:99999;background:#fff;box-shadow:0 2px 4px 3px rgba(0,0,0,.1);transition:1s ease-in-out all; width: 100%;max-width: 600px;}
 .popup.open{top: 50%;
    margin: 10px;padding: 15px 15px 10px;}
 .popup .hidden_modal{display:block}
 .popup .close{position:absolute;right:24px;top:24px;z-index:9;width:12px;height:12px}
 .popup .close img{display:block}
 .popup .close:hover{opacity:.5}


  .darken{display:none;width:100%;height:100%;position:fixed;left: 0;top:0;background:rgba(0,0,0,.6);overflow:hidden;z-index:100;cursor:pointer}
 .darken.open{display:block}

#dva
 {
	 display:none;

 }
 #order-form
 {
	 display:block;

 }
 .woocommerce-notices-wrapper.test{
  display: none;
 }
 .modal-body{
  margin-top: 20px;
 }
 .popup .ms_btn{
      height: 40px;
    font-size: 20px;
    padding: 0 30px;
 }
</style>

<?
  global $woocommerce;
$ito=$woocommerce->cart->total;
$WC_Cart = new WC_Cart();
$var = WC()->cart->get_cart();

$items = $woocommerce->cart->get_cart();
  foreach($items as $item => $values) {

   $_product = $values['data']->post;
     $nam=$_product->post_title;
}

$current_user = wp_get_current_user();
$ema=$current_user->data->user_email;
$phon=get_user_meta( $current_user->ID, 'billing_phone', true);
?>




<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-5 hidden-sm hidden-xs col-sidebar" data-testid="booking-page-faq-section">
      <div class="sidebar-booking blue_backg">
        <h3 >What happens next?</h3>
        <div class="block-img">
          <div class="block-img-in"><img alt="Calendar" class="calendar" src="https://d3el26csp1xekx.cloudfront.net/static/assets/confirmation-page/confirmation-calendar.svg"></div>
          <p>
            <b><?=$nam?></b> has <!-- -->7<!-- --> <!-- -->days<!-- --> to complete your request.
          </p>
        </div>
        <div class="block-img">
          <div class="block-img-in"><img alt="Receipt" class="calendar" src="https://d3el26csp1xekx.cloudfront.net/static/assets/confirmation-page/confirmation-receipt.svg"></div>
          <p>Your receipt and order updates will be sent to the email provided under <b>Delivery Information</b>.</p>
        </div>
        <div class="block-img">
          <div class="block-img-in"><img alt="Phone" class="calendar" src="https://d3el26csp1xekx.cloudfront.net/static/assets/confirmation-page/confirmation-phone.svg"></div>
          <p>
            When your request is completed,<!-- --> <b>we'll email and text you</b> a link to view, share, or download your MingMing.
          </p>
        </div>
        <div class="block-img">
          <div class="block-img-in"><img alt="Credit card" class="calendar" src="https://d3el26csp1xekx.cloudfront.net/static/assets/confirmation-page/confirmation-credit-card.svg"></div>
          <p>
            If for some reason your video isn't completed, the<!-- --> <b><span><?=$ito?>$</span></b> <!-- -->hold on your card will be removed within 5-7 business days.
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-8 -col-lg-offset-2 col-md-7">
      <div class="">
        <form id="order-form" data-testid="order-form" class="blue_backg">
          <div class="form-group-in">
            <label>This video is for:</label>
            <div class="input-group">
              <div><label><input class="radio" data-input="someoneElse" type="radio" name="bookedFor" rel="Someone else" value="someoneElse" style="margin-right:8px" checked>Someone else</label></div>

              <div><label><input class="radio" data-input="purchaser" type="radio" name="bookedFor" rel="Myself" value="purchaser" style="margin-right:8px">Myself</label></div>

              <div>
                <label>
                  <input class="radio" data-input="brandBusiness" type="radio" name="bookedFor" rel="A brand or business" value="brandBusiness" style="margin-right:8px">A brand or business
                </label>
              </div>
            </div>
          </div>

          <div class="row row-radio active" id="someoneElse">
            <div class="col-md-6">
              <div class="form-group-in">
                <label for="customerName">To</label>
                <div class="input-group" style="width:100%"><input type="text" name="customerName" value="" maxlength="40" placeholder="Brad" autocomplete="new-password" autocorrect="off" id="customerName1" class="form-control"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group-in">
                <label for="purchaserName">From</label>
                <div class="input-group" style="width: 100%;"><input name="purchaserName" maxlength="40" placeholder="Carissa" autocomplete="new-password" autocorrect="off" id="purchaserName" type="text" class="form-control" value=""></div>
              </div>
            </div>
          </div>
          <div class="row row-radio" id="purchaser">
            <div class="col-md-12">
              <div class="form-group-in">
                <label for="customerName">My name is</label>
                <div class="input-group" style="width:100%">
                  <input type="text" name="customerName" value="" maxlength="40" placeholder="Chas" autocomplete="new-password" autocorrect="off" id="customerName2" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
          <div class="row row-radio" id="brandBusiness">
            <div class="col-md-12">
              <div class="form-group-in">
                <label for="customerName">This shoutout is for</label>
                <div class="input-group" style="width:100%">
                  <input type="text" name="customerName" value="" maxlength="40" placeholder="Johnny Coffee Shop" autocomplete="new-password" autocorrect="off" id="customerName3" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group-in">
                <label for="occasion">What's the occasion?</label>
                <select id="oca" name="occasion" data-testid="occasion-select" class="form-control">
                  <option value="---">Select an occasion</option>
                  <option selected="selected" value="birthday">Birthday</option>
                  <option value="valentines">Valentine's Day</option>
                  <option value="mothersday">Mother's Day</option>
                  <option value="pepTalk">Pep Talk</option>
                  <option value="announcement">Announcement</option>
                  <option value="advice">Advice</option>
                  <option value="roast">Roast</option>
                  <option value="wedding">Wedding</option>
                  <option value="anniversary">Anniversary</option>
                  <option value="question">Question</option>
                  <option value="holiday">Holiday</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group-in">
            <label for="instructions">My instructions for <?=$nam?> are</label>
            <div>
              <textarea  name="instructions" minrows="2" placeholder="Hey I'm having a tough week with classes and I could use some cheering up!" class="row-radio-textarea form-control active" id="someoneElse-textarea"></textarea>
              <textarea name="instructions" minrows="2" placeholder="Hi! My friend Carissa just went through a breakup and needs some cheering up! (my name is Megan)" class="row-radio-textarea form-control" id="purchaser-textarea"></textarea>
              <textarea name="instructions" minrows="2" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco" class="row-radio-textarea form-control" id="brandBusiness-textarea"></textarea>
            </div>
          </div>

          <h4 class="" style="padding-top: 20px">Delivery Information</h4>

          <div class="row">
            <div class="col-md-6">
              <label for="purchaserEmail">
                <div class="tooltip">My email<i class="fa-label fa fa-question-circle-o" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i>
                  <span class="tooltiptext tooltip-top">Tooltip text email</span>
                </div>
              </label>
              <div class="input-group" style="width:100%">
                <input type="email" name="purchaserEmail" value="<?=$ema?>" maxlength="50" placeholder="chas@example.com" data-testid="my-email-input" id="purchaserEmail" class="form-control" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="phone">
                <div class="tooltip">Text video (Optional)<i class="fa-label fa fa-question-circle-o"></i>
                  <span class="tooltiptext tooltip-top">Tooltip text video</span>
                </div>
              </label>
              <div class="input-group" style="width:100%"><input type="text" name="phone" value="<?=$phon?>" maxlength="15" placeholder="(555) 555-5555" id="phone" class="form-control"></div>
            </div>
          </div>
          <div class="form-group-in">
            <div class="">
              <input type="checkbox" name="optInMarketingEmails" value="true" class="" id="optInMarketingEmails">
              <label for="optInMarketingEmails" class="">Email me exclusive offers and discounts</label>
            </div>
          </div>
          <div class="form-group-in">
            <div class="">
              <input type="checkbox" name="bookedPrivately" value="" data-testid="booked-privately-checkbox" id="bookedPrivately" class="_25YQR28_rBVJNkL7Bmcwvh"
                >
              <label for="bookedPrivately" class=""> Hide this video from <?=$nam?>'s profile</label>
            </div>
          </div>
          <h4 class="_3gM5kX-w10viDIabocTpmE">Payment Information</h4>
          <div id="cc-disclaimer" class="">
            <p>Your card isn't charged until the video is complete.<i class="fa-label fa fa-question-circle-o"></i></p>
          </div>
          <div class="form-group-in form-control" style="margin-bottom: 12px;padding: 0;">
            <label style="width: 100%;">
              <div class="StripeElement StripeElement--empty">
                <div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;">

                  <!-- <form action="">
                    <input placeholder="Card number" type="tel" name="number">

                    <input placeholder="MM/YY" type="tel" name="expiry">
                    <input placeholder="CVC" type="number" name="cvc">
                  </form> -->

<!--                   <iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame5" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-9644e07c31a2896df020dd41f9592b8d.html#style[base][fontSize]=18px&amp;style[base][fontFamily]=spinnler&amp;fonts[0][family]=spinnler&amp;fonts[0][src]=url(https%3A%2F%2Fs3-us-west-2.amazonaws.com%2Fstarboard-media%2Fstatic%2Fassets%2FAauxNextCond-Md.otf)&amp;fonts[0][__resolveFontRelativeTo]=https%3A%2F%2Fwww.cameo.com%2Ftammie%2Fbook&amp;componentName=card&amp;wait=false&amp;rtl=false&amp;keyMode=live&amp;apiKey=pk_live_YR2G0JQsuTK4cw7mTUHl4TTW&amp;origin=https%3A%2F%2Fwww.cameo.com&amp;referrer=https%3A%2F%2Fwww.cameo.com%2Ftammie%2Fbook&amp;controllerId=__privateStripeController1" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 21.6px;"></iframe>
                   -->

          <div tabindex="-1" class="CardNumberField ">
              <input id="card1" class="InputElement" autocomplete="cc-number" autocorrect="off" spellcheck="false" name="cardnumber" inputmode="numeric" aria-label="Credit or debit card number" placeholder="card number" aria-invalid="false" value="">
              <input id="card2" class="InputElement is-empty" autocomplete="cc-exp" autocorrect="off" spellcheck="false" name="exp-date" inputmode="numeric" aria-label="Credit or debit card expiration date" placeholder="mm / cc" aria-invalid="false" value="">
              <input id="card3" class="InputElement is-empty" autocomplete="cc-csc" autocorrect="off" spellcheck="false" name="cvc" inputmode="numeric" aria-label="Credit or debit card CVC/CVV" placeholder="CVC" aria-invalid="false" value="">
          </div>


<style>

</style>


                </div>
              </div>
            </label>
          </div>
          <div class=""><a href="#" onclick="ShowPopup('#popupPromoCode');">Apply a promo code</a></div>
          <div class="form-group-in">
            <button onclick="send()" id="order-submit-button" type="button" style="margin-bottom:8px" class="btn btn-login">
              <span>
                &nbsp;Book for<!-- --> <span><?=$ito?> USD</span>
              </span>
            </button>
          </div>
        </form>
        <div class="">
          <p>
            <span>By signing up, you agree to mingming's <a href="javascript:void(0);" onclick="ShowPopup('#popupTerms');">Terms of Service</a>
        and <a href="javascript:void(0);" onclick="ShowPopup('#popupPolicy');">Privacy Policy</a></span>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<div id="popupPromoCode" class="popup">
  <div class="close" onclick="HidePopup('#popupPromoCode');"><img width="20px" height="20px" src="/wp-content/themes/envo-storefront/img/close.svg" alt="Close"></div>
  <div class="modal-content" role="document">
    <div class="modal-header">
      <h4 class="modal-title">Enter your code</h4>
    </div>
    <div class="modal-body">
      <form class="form-horizontal col-md-12">
        <div class="form-group">
          <div class="input-group"><input name="promo" placeholder="MingMing" type="text" id="promo" class="form-control" value="" required></div>
        </div>
        <div class="form-group">
          <button type="button" onclick="jQuery('#coupon_code').val(jQuery('#promo').val());jQuery('#coupon_code').parent().parent().find('button').click();HidePopup('#popupPromoCode');" class="btn ms_btn">Submit</button>
          <div class="text-danger" style="padding-top: 8px;"></div>
        </div>
      </form>
    </div>
    <div class="modal-footer"></div>
  </div>
</div>
<div class="darken"></div>
<script src="/wp-content/themes/envo-storefront/js/card.js"></script>
    <script>
        new Card({
            form: document.querySelector('form'),
            container: '.card-wrapper'
        });
    </script>
<script>
function send()
{

	if (jQuery('#billing_videofor').val()=='Someone else')
	{
	jQuery('#billing_who').val(jQuery('#customerName1').val());
	jQuery('#billing_from').val(jQuery('#purchaserName').val());
	jQuery('#billing_instructions').val(jQuery('#someoneElse-textarea').val());
	}
	else if (jQuery('#billing_videofor').val()=='Myself')
	{
    jQuery('#billing_who').val(jQuery('#customerName2').val());
	jQuery('#billing_from').val('');
	jQuery('#billing_instructions').val(jQuery('#purchaser-textarea').val());
	}
	else if (jQuery('#billing_videofor').val()=='A brand or business')
	{
	jQuery('#billing_who').val(jQuery('#customerName3').val());
	jQuery('#billing_from').val('');
	jQuery('#billing_instructions').val(jQuery('#brandBusiness-textarea').val());
	}

	var oca=jQuery("#oca option:selected").text();
	jQuery('#billing_occasion').val(oca);

	jQuery('#billing_email').val(jQuery('#purchaserEmail').val());
	jQuery('#billing_phone').val(jQuery('#phone').val());



     if (jQuery("#optInMarketingEmails").prop('checked'))
	 {
	jQuery('#billing_exclusive').val('Yes');
	 }
	 else
	 {
	jQuery('#billing_exclusive').val('No');
	 }

	 if (jQuery("#bookedPrivately").prop('checked'))
	 {
	jQuery('#billing_video').val('Yes');
	 }
	 else
	 {
	jQuery('#billing_video').val('No');
	 }


	jQuery('#billing_card1').val(jQuery('#card1').val());
	jQuery('#billing_card2').val(jQuery('#card2').val());
	jQuery('#billing_card3').val(jQuery('#card3').val());

jQuery('#place_order').click();



}
  jQuery(function($){

 $('#billing_email').val($('#purchaserEmail').val());
 $('#billing_phone').val($('#phone').val());
  $('#billing_videofor').val('Someone else');
   $('#billing_instructions').val('');
  $('#billing_from').val('');
  $('#billing_who').val('');
   $('#billing_card1').val('');
   $('#billing_card2').val('');
   $('#billing_card3').val('');
   $('#billing_link').val('');
    $('#billing_exclusive').val('');
	 $('#billing_video').val('');



    $('.radio').change(function(e){
      let dataInput = $(this).attr('data-input');
	  $('#billing_videofor').val($(this).attr('rel'));
      $('.row-radio, .row-radio-textarea').removeClass('active');
      if( $(this).prop("checked") ){
        $('#' + dataInput).addClass('active');
        $('#' + dataInput+'-textarea').addClass('active');
      }
      else {
        $('#' + dataInput).removeClass('active');
        $('#' + dataInput+'-textarea').removeClass('active');
      }



    });
    $(".darken").click(function(){
      $(".darken").fadeOut(300);
      $('.popup').removeClass('open');
    });
  })
  function ShowPopup(target){
    // event.preventDefault();
    console.log(target);
    jQuery(".darken").fadeIn();
    jQuery(target).addClass('open');
  }
  function HidePopup(target){
    jQuery(".darken").fadeOut(300);
    jQuery(target).removeClass('open');
  }
</script>
<form name="checkout" id="dva" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>

	<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>

	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
