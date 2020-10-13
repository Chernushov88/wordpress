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

  .page-wrap{
    padding-bottom: 0;
  }
  ul{
    padding: 0;
    margin: 0;
    list-style-type: none;
  }
  #sidebar {
    display: none;
  }
  .col-md-9 {
    width: 100%;
    padding: 0;
  }
  .single-head {
    display: none;
  }
  #site-content{
    min-height: calc(100vh - 85px);
    padding: 0;
  }
  .page-area {
    padding-top: 0px;
  }
  .single-entry-summary,
  .row.row-account,
  article{
    margin: 0;
  }
</style>
<div class="sm-visible">
  <div class="user-head">
    <div class="user-head-img"><img src="/wp-content/themes/envo-storefront/img/sm/user-img.jpg" alt=""></div>
    <div class="user-head-name">
      <div class="h3">Haba Sir</div>
      <p>类别：博客，喜剧演员</p>
      <ul class="icons">
        <li>
          <div class="vip-ico vip-gold"></div>
        </li>
        <li>
          <div class="charity-ico charity-gold"></div>
        </li>
        <li>
          <div class="icon-number">1</div>
        </li>
      </ul>
    </div>
  </div>
  <div class="user-desc">
    <p>海港（人稱HabaSir），他是『少年警訊領袖團』及『特能龍舟隊』的創辦人，更是一位反恐及安保專家。 他的生活就像陀螺一樣每天轉個不停，為這個社會默默地奉獻自己的光和熱。</p>
  </div>
  <div class="user-navigation">
    <ul class="nav">
      <li>
        <a href="#">
          <img src="/wp-content/themes/envo-storefront/img/sm/nav/1.png" alt="">
          <span>我的订单</span>
          <i class="fa fa-caret-right" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <img src="/wp-content/themes/envo-storefront/img/sm/nav/2.png" alt="">
          <span>帐户资料</span>
          <i class="fa fa-caret-right" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <img src="/wp-content/themes/envo-storefront/img/sm/nav/3.png" alt="">
          <span>我的排行</span>
          <i class="fa fa-caret-right" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <img src="/wp-content/themes/envo-storefront/img/sm/nav/4.png" alt="">
          <span>我的通知</span>
          <i class="fa fa-caret-right" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <img src="/wp-content/themes/envo-storefront/img/sm/nav/5.png" alt="">
          <span>帐户结余</span>
          <i class="fa fa-caret-right" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <img src="/wp-content/themes/envo-storefront/img/sm/nav/6.png" alt="">
          <span>分享推荐人编号</span>
          <i class="fa fa-caret-right" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <img src="/wp-content/themes/envo-storefront/img/sm/nav/7.png" alt="">
          <span>帐户安全</span>
          <i class="fa fa-caret-right" aria-hidden="true"></i>
        </a>
      </li>
      <li>
        <a href="#">
          <img src="/wp-content/themes/envo-storefront/img/sm/nav/8.png" alt="">
          <span>联络我们</span>
          <i class="fa fa-caret-right" aria-hidden="true"></i>
        </a>
      </li>
    </ul>
  </div>
</div>
<div class="sm-hide">
<nav class="woocommerce-MyAccount-navigation">
  <div class="woocommerce-MyAccount-navigation-in">



    <div class="h3">我的帐户</div>

    <ul>
      <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
      <li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
        <a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">
          <span class="icon"></span>
          <?php echo esc_html( $label ); ?>
        </a>
      </li>
      <?php endforeach; ?>
      <?
      $url = $_SERVER['REQUEST_URI'];
      $ppp=explode('?',$url);
      if ($ppp[0]=='/my-account-2/orders/')
      {
      ?>
            <li>
              <a onclick="jQuery('#perv').hide();jQuery('#vtor').show();"href="javascript:void(0);">处理中</a> <? /*  – В обработке */?>
            </li>
            <li>
              <a  onclick="jQuery('#perv').show();jQuery('#vtor').hide();" href="javascript:void(0);">全部订单</a> <? /*  – Все заказы */?>
            </li>
            <?
      }
      ?>





    </ul>
    <div class="navigation-bottom">
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
      <li><div class="h3">结余</div></li>
      <li><div class="name-price"><div>总计</div> <b>USD:</b> '.$sum.'</div></li>
      <li><div class="name-price"><div>慈善机构</div> <b>USD:</b> '.$cherSum.'</div></li>
      <li><div class="name-price"><div>可用的</div> <b>USD:</b> '.$result.'</div></li>
    </ul>';
      };
      ?>




      <a href="javascript:void(0);" onclick="showPopup('#popupUserRole');" class="btn_money ">
        <img class="img-active" src="/wp-content/themes/envo-storefront/img/navigation/money-active.png" alt="">
        <img class="img" src="/wp-content/themes/envo-storefront/img/navigation/money.png" alt="">结余</a>
      <a href="javascript:void(0);" class="ms_btn writing_btn" onclick="ShowPopup('#popupWriting')">
        <img class="img-active" src="/wp-content/themes/envo-storefront/img/navigation/writing-active.png" alt="">
        <img class="img" src="/wp-content/themes/envo-storefront/img/navigation/writing.png" alt="">联络我们</a>

    </div>
  </div>
</nav>
</div>
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
        <h3 class="modal-title"><label >收钱</label></h3>
      </div>

    </div>
    <div class="modal-body">
      <form id="spi" enctype="multipart/form-data"  class="form-horizontal col-md-12-"  method="post" maxlength="12">
        <div class="form-group" style=" margin: 0 0 5px;">
          <b>你的余额 （美金）: <?=$result?></b>
        </div>
        <div class="form-group" style=" margin: 0 0 5px;">
          <ul>
            <li style="margin-right: auto;"><h4  style="margin: 0;">发到:</h4></li>
            <li></li>

          </ul>


        </div>
        <div class="form-group">
          <ul>
            <li>
              <label for="">
                <input type="radio" name="radio" value="Striples"><span> Stripe</span>
              </label>
            </li>
            <li>
              <label>
                <input type="radio" name="radio" value="Paypal"><span> 贝宝</span>
              </label>
            </li>
          </ul>
        </div>
        <div class="form-group">
          <input type="number" id="man" onkeyup="return proverka(this);" onchange="return proverka(this);" value="<?=$result?>" placeholder="你会得到多少。">
        </div>
        <div class="form-group form-control">
          <div tabindex="-1" class="CardNumberField ">
            <input id="ra1" class="InputElement" autocomplete="cc-number" autocorrect="off" spellcheck="false" name="cardnumber" inputmode="numeric" aria-label="Credit or debit card number" aria-invalid="false" value="" placeholder="在此输入付款要求">
            <!-- <input id="ra2" class="InputElement is-empty" autocomplete="cc-exp" autocorrect="off" spellcheck="false" name="exp-date" inputmode="numeric" aria-label="Credit or debit card expiration date" placeholder="mm / cc" aria-invalid="false" value="">
            <input id="ra3" class="InputElement is-empty" autocomplete="cc-csc" autocorrect="off" spellcheck="false" name="cvc" inputmode="numeric" aria-label="Credit or debit card CVC/CVV" placeholder="CVC" aria-invalid="false" value=""> -->
          </div>
        </div>

        <!-- <div class="form-group">
          <input type="number" placeholder="你会得到多少。">
        </div> -->
        <div class="form-group">
          <button type="button" onclick="send()" class="btn ms_btn btn" name="Submit">提交</button>
          <div class="text-danger" id="response2"></div>
        </div>
        <div class="small">你可以使用 Stripe 或者贝宝提现。提现要求需要1-5天进行。最小提现金额是100美金 （将来我们会加更多提现选项，如微信与支付宝。</div>
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
















<?
/*

UPDATE wp_options SET option_value = REPLACE (option_value, 'https://mingming.io', 'https://mingming.local') WHERE option_name = 'home' OR option_name = 'siteurl';

UPDATE wp_posts SET guid = REPLACE (guid, 'https://mingming.io', 'https://mingming.local');

UPDATE wp_posts SET post_content = REPLACE (post_content, 'https://mingming.io','https://mingming.local');

*/
?>

