<?php
  /*
   * Template name: Форма заказа
   */

  get_header(); ?>
<style>
.container-fluid{
  padding: 0;
}
  #order-form{
  font-size: 14px;
  }
  .col-sidebar{
        padding-top: 25px;
        float: right;
  }
  .sidebar-booking{
  background: #fcfcff;
  border: 5px solid #eaebfa;
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
  background: #fcfcff;
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
.popup{position:fixed;left:50%;top:-200%;transform:translate(-50%,-0%);z-index:999;background:#fff;box-shadow:0 2px 4px 3px rgba(0,0,0,.1);transition:1s ease-in-out all; width: 100%;max-width: 600px;}
 .popup.open{    top: 15px;
    margin: 10px;padding: 15px 15px 10px;}
 .popup .hidden_modal{display:block}
 .popup .close{position:absolute;right:24px;top:24px;z-index:9;width:12px;height:12px}
 .popup .close img{display:block}
 .popup .close:hover{opacity:.5}


  .darken{display:none;width:100%;height:100%;position:fixed;left: 0;top:0;background:rgba(0,0,0,.6);overflow:hidden;z-index:100;cursor:pointer}
 .darken.open{display:block}
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-5 hidden-sm hidden-xs col-sidebar" data-testid="booking-page-faq-section">
      <div class="sidebar-booking">
        <h3 >What happens next?</h3>
        <div class="block-img">
          <div class="block-img-in"><img alt="Calendar" class="calendar" src="https://d3el26csp1xekx.cloudfront.net/static/assets/confirmation-page/confirmation-calendar.svg"></div>
          <p>
            <b>Tammie Brown</b> has <!-- -->7<!-- --> <!-- -->days<!-- --> to complete your request.
          </p>
        </div>
        <div class="block-img">
          <div class="block-img-in"><img alt="Receipt" class="calendar" src="https://d3el26csp1xekx.cloudfront.net/static/assets/confirmation-page/confirmation-receipt.svg"></div>
          <p>Your receipt and order updates will be sent to the email provided under <b>Delivery Information</b>.</p>
        </div>
        <div class="block-img">
          <div class="block-img-in"><img alt="Phone" class="calendar" src="https://d3el26csp1xekx.cloudfront.net/static/assets/confirmation-page/confirmation-phone.svg"></div>
          <p>
            When your request is completed,<!-- --> <b>we'll email and text you</b> a link to view, share, or download your mingming.
          </p>
        </div>
        <div class="block-img">
          <div class="block-img-in"><img alt="Credit card" class="calendar" src="https://d3el26csp1xekx.cloudfront.net/static/assets/confirmation-page/confirmation-credit-card.svg"></div>
          <p>
            If for some reason your video isn't completed, the<!-- --> <b><span>$50</span></b> <!-- -->hold on your card will be removed within 5-7 business days.
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-8 -col-lg-offset-2 col-md-7">
      <div class="">
        <form id="order-form" data-testid="order-form">
          <h3>Форма заказа</h3>
          <div class="form-group-in">
            <label>This video is for:</label>
            <div class="input-group">
              <div><label><input class="radio" data-input="someoneElse" type="radio" name="bookedFor" value="someoneElse" style="margin-right:8px" checked>Someone else</label></div>

              <div><label><input class="radio" data-input="purchaser" type="radio" name="bookedFor" value="purchaser" style="margin-right:8px">Myself</label></div>

              <div>
                <label>
                  <input class="radio" data-input="brandBusiness" type="radio" name="bookedFor" value="brandBusiness" style="margin-right:8px">A brand or business
                </label>
              </div>
            </div>
          </div>

          <div class="row row-radio active" id="someoneElse">
            <div class="col-md-6">
              <div class="form-group-in">
                <label for="customerName">To</label>
                <div class="input-group" style="width:100%"><input type="text" name="customerName" value="" maxlength="40" placeholder="Brad" autocomplete="new-password" autocorrect="off" id="customerName" class="form-control"></div>
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
                  <input type="text" name="customerName" value="" maxlength="40" placeholder="Chas" autocomplete="new-password" autocorrect="off" id="customerName" class="form-control" required>
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
                  <input type="text" name="customerName" value="" maxlength="40" placeholder="Johnny Coffee Shop" autocomplete="new-password" autocorrect="off" id="customerName" class="form-control">
                </div>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group-in">
                <label for="occasion">What's the occasion?</label>
                <select name="occasion" data-testid="occasion-select" class="form-control">
                  <option value="---">Select an occasion</option>
                  <option value="birthday">Birthday</option>
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
            <label for="instructions">My instructions for Tammie Brown are</label>
            <div>
              <textarea name="instructions" minrows="2" placeholder="Hey I'm having a tough week with classes and I could use some cheering up!" class="row-radio-textarea form-control" required id="someoneElse-textarea"></textarea>
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
                <input type="email" name="purchaserEmail" value="" maxlength="50" placeholder="chas@example.com" data-testid="my-email-input" id="purchaserEmail" class="form-control" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="phone">
                <div class="tooltip">Text video (Optional)<i class="fa-label fa fa-question-circle-o"></i>
                  <span class="tooltiptext tooltip-top">Tooltip text video</span>
                </div>
              </label>
              <div class="input-group" style="width:100%"><input type="text" name="phone" value="" maxlength="15" placeholder="(555) 555-5555" id="phone" class="form-control"></div>
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
              <label for="bookedPrivately" class=""> Hide this video from Tammie Brown's profile</label>
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
              <input class="InputElement" autocomplete="cc-number" autocorrect="off" spellcheck="false" name="cardnumber" inputmode="numeric" aria-label="Credit or debit card number" placeholder="card number" aria-invalid="false" value="">
              <input class="InputElement is-empty" autocomplete="cc-exp" autocorrect="off" spellcheck="false" name="exp-date" inputmode="numeric" aria-label="Credit or debit card expiration date" placeholder="mm / cc" aria-invalid="false" value="">
              <input class="InputElement is-empty" autocomplete="cc-csc" autocorrect="off" spellcheck="false" name="cvc" inputmode="numeric" aria-label="Credit or debit card CVC/CVV" placeholder="CVC" aria-invalid="false" value="">
          </div>


<style>

</style>


                </div>
              </div>
            </label>
          </div>
          <div class=""><a href="#" onclick="ShowPopup('#popupPromoCode');">Apply a promo code</a></div>
          <div class="form-group-in">
            <button id="order-submit-button" type="submit" style="margin-bottom:8px" class="btn btn-primary btn-danger">
              <span>
                &nbsp;Book for<!-- --> <span>$50 USD</span>
              </span>
            </button>
          </div>
        </form>
        <div class="">
          <p>
            By booking, you agree to posdr<!-- --> <a href="/wp-content/themes/envo-storefront/file/Terms and Conditions - word doc.docx">Terms of Service</a> and<!-- --> <a href="/wp-content/themes/envo-storefront/file/Privacy Policy - word doc.docx">Privacy Policy</a>
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
          <div class="input-group"><input name="promo" placeholder="mingming" type="text" id="promo" class="form-control" value="" required></div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-danger btn-block">Submit</button>
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
  jQuery(function($){
    $('.radio').change(function(e){
      let dataInput = $(this).attr('data-input');
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
<?php get_footer(); ?>