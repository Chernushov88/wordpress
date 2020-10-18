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

<b>********* ranking start *********</b>
<div class="woocommerce-MyAccount-content__ranking md-hide">

  <div class="h1 h1-top-new">我的排行 (1)</div>
  <div class="h3">现在您是“新手”。 请遵循以下规则，让您的Mingming帐户再次出色！</div>
  <div class="user-navigation">
    <ul class="nav nav-ranking">
      <li>
        <div class="icon-number">0</div>
        <p><b>註冊</b>在MingMing上註冊。 你太完美了！</p>
        <div class="price">+$5</div>
        <a href="#" class="btn btn_grey">已领取</a>
      </li>
      <li>
        <div class="icon-number">1</div>
        <p><b>新手</b>錄製介紹視頻並將其上傳到您的Mingming頁面。告訴觀眾您是誰：您的名字，愛好，頻道，成名原因，來歷和目標，以及為什麼您的視頻是最好的。</p>
        <div class="price">+$20</div>
        <a href="#" class="btn btn_blue">去完成</a>
      </li>
      <li>
        <div class="icon-number">2</div>
        <p><b>準備開始</b>添加您的帳戶信息。寫一些關於你和你的愛好的東西。</p>
        <div class="price">+$10</div>
        <a href="#" class="btn btn_blue">去完成</a>
      </li>
      <li>
        <div class="icon-number">3</div>
        <p><b>初學者</b>與您的關注者分享您現在正在使用明明的事實。</p>
        <div class="price">+$10</div>
        <a href="#" class="btn btn_blue">去完成</a>
      </li>
      <li>
        <div class="icon-number">4</div>
        <p><b>新星</b>獲得第一個訂單–訂單價格增加$ 20。</p>
        <div class="price">+$20</div>
        <a href="#" class="btn btn_blue">去完成</a>
      </li>
      <li>
        <div class="icon-number">5</div>

        <p><b>準備施加影響力</b>在您的社交媒體上寫有關MingMing的帖子。問好！”並邀請他們到明明。在這裡，您可以分享有關您的第一筆訂單的信息，並解釋Mingming的工作方式。</p>
        <div class="price">+$10</div>
        <a href="#" class="btn btn_blue">去完成</a>
      </li>
      <li>
        <div class="icon-number">6</div>
        <p><b>邀請大師</b>邀請朋友（KOL）。無限選項。每次KOL使用推薦鏈接邀請他們的朋友加入MingMing時，
          他們都會在此KOL經過授權過程並下載其介紹視頻（獲得等級1）後獲得10美元。</p>
        <div class="price">+$10</div>
        <a href="#" class="btn btn_blue">去完成</a>
      </li>
    </ul>
  </div>
</div>
<b>********* ranking stop *********</b>

<br>
<b>********* message_content start *********</b>
<div class="woocommerce-MyAccount-content__message_conten md-hidet">
  <div class="h1 h1-top-new">请录制一个简短的视频，并告诉您您支持TRUE和MingMing！</div>
  <div class="message_content-in">
    <p>現在點擊“帐户资料”，並在字段中填寫有關您的信息，包括照片，說明和每筆訂單的價格。我們的建議價格是每100.000粉絲USD 25。如果您有100.000個活躍關注者，則即使1％的轉化為100000 * 1％* 25 USD
      = 25000 USD。 </p>
    <p>填寫完個人資料後，打開“我的订单”，並為您的粉絲和吸引客戶錄製介紹視頻。請使用視頻介紹自己，提及我們的平台名稱，並告訴您的粉絲您很樂意為他們製作大聲疾呼的視頻，或者希望他們以自己的風格度過愉快的假期。</p>
    <p>將視頻和網站鏈接發佈到您的社交平台上，或以其他任何方式通知粉絲並等待訂單！</p>
    <p>買家訂購視頻時，您會收到一封電子郵件通知。您將有7天的時間來錄製視頻並將其上傳到平台。視頻請求和您的客戶名稱可以在個人資料的“訂單”部分中找到。從那裡，您可以錄製或上傳視頻。 我們的員工審核視頻後，您將收到付款。</p>
  </div>
</div>
<b>********* message_content stop *********</b>

<br>


<b>********* message_title start *********</b>
<div class="woocommerce-MyAccount-content__message_title md-hidet">
  <table class="shop_table">
    <thead class="tr">
      <th>日期</th>
      <th>標題</th>
    </thead>
    <tbody>
      <tr>
        <td>15.08.202</td>
        <td>请录制一个简短的视频，并告诉您您支持TRUE和MingMing！</td>
      </tr>
      <tr>
        <td>15.08.202</td>
        <td>请录制一个简短的视频，并告诉您您支持TRUE和MingMing！</td>
      </tr>
      <tr>
        <td>15.08.202</td>
        <td>请录制一个简短的视频，并告诉您您支持TRUE和MingMing！</td>
      </tr>
    </tbody>
  </table>
</div>
<b>********* message_title stop *********</b>




	<?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_content' );
	?>
</div>
