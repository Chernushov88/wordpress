<?php
  /*
   * Template name: rank
   */
  get_header();



  if( wp_is_mobile() )
  {



    if( current_user_can('actor') )
    {

  $current_user = wp_get_current_user();
  $idu=get_user_meta( $current_user->ID, 'idtov', true);
$fio=get_user_meta( $current_user->ID, 'nickname', true);
$rank=array();
$ra0=get_user_meta( $current_user->ID, 'rank0', true);
$ra1=get_user_meta( $current_user->ID, 'rank1', true);
$ra2=get_user_meta( $current_user->ID, 'rank2', true);
$ra3=get_user_meta( $current_user->ID, 'rank3', true);
$ra4=get_user_meta( $current_user->ID, 'rank4', true);
$ra5=get_user_meta( $current_user->ID, 'rank5', true);

$rank[]=$ra0;
$rank[]=$ra1;
$rank[]=$ra2;
$rank[]=$ra3;
$rank[]=$ra4;
$rank[]=$ra5;
$new_array = array_diff($rank, array(''));
$ran=count($new_array)-1;
$cher=get_user_meta( $current_user->ID, 'charity', true);
$vip=get_user_meta( $current_user->ID, 'vip', true);

$post_id_7 = get_post($idu);
$excerpt = strip_tags($post_id_7->post_excerpt);



?>
<style>
  .single-head.page-head.no-thumbnail {
    clear: both;
    margin-bottom: 10px;
    padding: 10px 0%;
    margin: 0 0%;
  }
  .main-content-page.single-content{
    padding: 0;
  }
  .woocommerce-MyAccount-navigation-link--dashboard,
  .woocommerce-MyAccount-navigation-link--downloads,
  .woocommerce-MyAccount-navigation-link--payment-methods,
  .woocommerce-MyAccount-navigation-link--edit-address{display: none;}
</style>
<div class="site-content-sm-p-0">
  <div class="sm-visible">
    <div class="user-head">
      <div class="user-head-img"><? echo $thumb = get_the_post_thumbnail( $idu, 'thumbnail' );?></div>
      <div class="user-head-name">
        <div class="h3"><?=$fio?></div>
        <p><?=$excerpt?></p>
        <ul class="icons">
          <li>
            <?
              if ($vip>0) { ?>
            <? if ($vip==1){ ?>
            <div class="vip-ico vip-copper"></div>
            <? }
              elseif ($vip==2) { ?>
            <div class="vip-ico vip-sliver"></div>
            <? }
              elseif ($vip==3) { ?>
            <div class="vip-ico vip-gold"></div>
            <? } ?>
            <? } ?>
          </li>
          <li>
            <?
              if ($cher>0){

            if ($cher==10){?>
            <!-- <img class="fiy-status" src="/wp-content/themes/envo-storefront/img/Copper.png" alt=""> -->
            <div class="charity-ico charity-copper"></div>
            <?}
              elseif ($cher==50){ ?>
            <!-- <img class="fiy-status" src="/wp-content/themes/envo-storefront/img/Sliver.png" alt=""> -->
            <div class="charity-ico charity-sliver"></div>
            <? }
              elseif ($cher==100) { ?>
            <!-- <img class="fiy-status" src="/wp-content/themes/envo-storefront/img/Gold.png" alt=""> -->
            <div class="charity-ico charity-gold"></div>
            <? } ?>
            <? }
              ?>
          </li>
          <li>
            <div class="icon-number"><?=$ran?></div>
          </li>
        </ul>
      </div>
    </div>
    <div class="user-navigation">
      <ul class="nav nav-ranking">
        <li>
          <div class="icon-number">0</div>
          <p><b>註冊 +$5</b>在MingMing上註冊。 你太完美了！</p>
          <a href="#" class="btn
            <?
              if ($ra0)
              {
                    ?>
            btn_grey
            <?
              }
              else
              {
              ?>
            btn_blue
            <?
              }
              ?>
            ">已领取</a>
        </li>
        <li>
          <div class="icon-number">1</div>
          <p><b>新手 +$20</b>錄製介紹視頻並將其上傳到您的Mingming頁面。告訴觀眾您是誰：您的名字，愛好，頻道，成名原因，來歷和目標，以及為什麼您的視頻是最好的。</p>
          <a href="#" class="btn  <?
            if ($ra1)
            {
                  ?>
            btn_grey
            <?
              }
              else
              {
              ?>
            btn_blue
            <?
              }
              ?>">去完成</a>
        </li>
        <li>
          <div class="icon-number">2</div>
          <p><b>準備開始 +$10</b>添加您的帳戶信息。寫一些關於你和你的愛好的東西。</p>
          <a href="#" class="btn  <?
            if ($ra2)
            {
                  ?>
            btn_grey
            <?
              }
              else
              {
              ?>
            btn_blue
            <?
              }
              ?>">去完成</a>
        </li>
        <li>
          <div class="icon-number">3</div>
          <p><b>初學者 +$10</b>與您的關注者分享您現在正在使用明明的事實。</p>
          <a href="#" class="btn  <?
            if ($ra3)
            {
                  ?>
            btn_grey
            <?
              }
              else
              {
              ?>
            btn_blue
            <?
              }
              ?>">去完成</a>
        </li>
        <li>
          <div class="icon-number">4</div>
          <p><b>新星 +$20</b>獲得第一個訂單–訂單價格增加$ 20。</p>
          <a href="#" class="btn  <?
            if ($ra4)
            {
                  ?>
            btn_grey
            <?
              }
              else
              {
              ?>
            btn_blue
            <?
              }
              ?>">去完成</a>
        </li>
        <li>
          <div class="icon-number">5</div>
          <p><b>準備施加影響力 +$15</b>在您的社交媒體上寫有關MingMing的帖子。問好！”並邀請他們到明明。在這裡，您可以分享有關您的第一筆訂單的信息，並解釋Mingming的工作方式。</p>
          <a href="#" class="btn  <?
            if ($ra5)
            {
                  ?>
            btn_grey
            <?
              }
              else
              {
              ?>
            btn_blue
            <?
              }
              ?>">去完成</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<link rel="stylesheet" href="/wp-content/themes/envo-storefront/css/cssprogress.css">
<?
  }
  }
  else
  {


  	if( current_user_can('actor') )
      {

  	$current_user = wp_get_current_user();
   $idu=get_user_meta( $current_user->ID, 'idtov', true);
$fio=get_user_meta( $current_user->ID, 'nickname', true);
$rank=array();
$ra0=get_user_meta( $current_user->ID, 'rank0', true);
$ra1=get_user_meta( $current_user->ID, 'rank1', true);
$ra2=get_user_meta( $current_user->ID, 'rank2', true);
$ra3=get_user_meta( $current_user->ID, 'rank3', true);
$ra4=get_user_meta( $current_user->ID, 'rank4', true);
$ra5=get_user_meta( $current_user->ID, 'rank5', true);

$rank[]=$ra0;
$rank[]=$ra1;
$rank[]=$ra2;
$rank[]=$ra3;
$rank[]=$ra4;
$rank[]=$ra5;
$new_array = array_diff($rank, array(''));
$ran=count($new_array)-1;
$cher=get_user_meta( $current_user->ID, 'charity', true);
$vip=get_user_meta( $current_user->ID, 'vip', true);

$post_id_7 = get_post($idu);
$excerpt = strip_tags($post_id_7->post_excerpt);



?>
<style>
  .single-head.page-head.no-thumbnail {
    clear: both;
    margin-bottom: 10px;
    padding: 10px 0%;
    margin: 0 0%;
  }
  .main-content-page.single-content{
    padding: 0;
  }
  .woocommerce-MyAccount-navigation-link--dashboard,
  .woocommerce-MyAccount-navigation-link--downloads,
  .woocommerce-MyAccount-navigation-link--payment-methods,
  .woocommerce-MyAccount-navigation-link--edit-address{display: none;}
  .woocommerce-account .woocommerce-MyAccount-navigation {
    width: 20%;
    min-width: 300px;
    padding: 0 30px 15px;
    background: #fff;
  }
  .woocommerce-account .woocommerce-MyAccount-content {
    width: 80%;
    margin-left: auto;
    padding: 50px 25px 30px;
    font-weight: 100;
    color: #000;
  }
  .woocommerce-account .woocommerce-MyAccount-navigation-in{
    display: flex;
    flex-direction: column;
    height: calc(100vh - 100px);
  }
  .woocommerce-account .woocommerce-MyAccount-navigation>ul{
    display: flex;
    flex-direction: column;
  }
  .woocommerce-account .woocommerce-MyAccount-navigation>ul .woocommerce-MyAccount-navigation-link--customer-logout{
    order: 1;
  }
  .woocommerce-account .woocommerce-MyAccount-navigation .h3 {
    margin: 25px 0;
    font-weight: 900;
    font-size: 22px;
    color: #231815
  }

  .woocommerce-account .woocommerce-MyAccount-content {
    width: 80%;
    margin-left: auto;
    padding: 50px 25px 30px;
    font-weight: 100;
    color: #000
  }

  .woocommerce-account .woocommerce-MyAccount-content a {
    height: 30px;
    margin: 5px 2px;
    padding: 0 15px;
    line-height: 30px
  }
  @media (max-width: 991px){
    .woocommerce-account .woocommerce-MyAccount-content{
      width: 100%;
    }
    .woocommerce-MyAccount-content__ranking.md-hide{
    //display: block !important;
      width: 100%;
    }
    .purple_backg {
      background: transparent;
    }
  }

</style>
<div class="woocommerce-account">
  <div class="main-content-page single-content">
    <div class="single-entry-summary">
      <div class="woocommerce">
        <div class="md-visible">

        </div>
        <?
          do_action( 'woocommerce_account_navigation' );
        ?>
        <div class="woocommerce-MyAccount-content purple purple_backg">
          <div class="woocommerce-MyAccount-content__ranking -md-hide">
            <div class="h1 h1-top-new">我的排行 (1)</div>
            <div class="h3">现在您是“新手”。 请遵循以下规则，让您的Mingming帐户再次出色！</div>
            <div class="user-navigation">
              <ul class="nav nav-ranking">
                <li>
                  <div class="icon-number">0</div>
                  <p><b>註冊 <span class="span-md-visible">+$5</span></b>在MingMing上註冊。 你太完美了！</p>
                  <div class="price">+$5</div>
                  <a href="#" class="btn  <?
          if ($ra0)
          {
                ?>
          btn_grey
          <?
            }
            else
            {
            ?>
          btn_blue
          <?
            }
            ?>">已领取</a>
                </li>
                <li>
                  <div class="icon-number">1</div>
                  <p><b>新手 <span class="span-md-visible">+$20</span></b>錄製介紹視頻並將其上傳到您的Mingming頁面。告訴觀眾您是誰：您的名字，愛好，頻道，成名原因，來歷和目標，以及為什麼您的視頻是最好的。</p>
                  <div class="price">+$20</div>
                  <a href="#" class="btn  <?
          if ($ra1)
          {
                ?>
          btn_grey
          <?
            }
            else
            {
            ?>
          btn_blue
          <?
            }
            ?>">去完成</a>
                </li>
                <li>
                  <div class="icon-number">2</div>
                  <p><b>準備開始 <span class="span-md-visible">+$10</span></b>添加您的帳戶信息。寫一些關於你和你的愛好的東西。</p>
                  <div class="price">+$10</div>
                  <a href="#" class="btn  <?
          if ($ra2)
          {
                ?>
          btn_grey
          <?
            }
            else
            {
            ?>
          btn_blue
          <?
            }
            ?>">去完成</a>
                </li>
                <li>
                  <div class="icon-number">3</div>
                  <p><b>初學者<span class="span-md-visible">+$10</span></b>與您的關注者分享您現在正在使用明明的事實。</p>
                  <div class="price">+$10</div>
                  <a href="#" class="btn  <?
          if ($ra3)
          {
                ?>
          btn_grey
          <?
            }
            else
            {
            ?>
          btn_blue
          <?
            }
            ?>">去完成</a>
                </li>
                <li>
                  <div class="icon-number">4</div>
                  <p><b>新星 <span class="span-md-visible">+$20</span></b>獲得第一個訂單–訂單價格增加$ 20。</p>
                  <div class="price">+$20</div>
                  <a href="#" class="btn  <?
          if ($ra4)
          {
                ?>
          btn_grey
          <?
            }
            else
            {
            ?>
          btn_blue
          <?
            }
            ?>">去完成</a>
                </li>
                <li>
                  <div class="icon-number">5</div>
                  <p><b>準備施加影響力 <span class="span-md-visible">+$10</span></b>在您的社交媒體上寫有關MingMing的帖子。問好！”並邀請他們到明明。在這裡，您可以分享有關您的第一筆訂單的信息，並解釋Mingming的工作方式。</p>
                  <div class="price">+$10</div>
                  <a href="#" class="btn  <?
          if ($ra5)
          {
                ?>
          btn_grey
          <?
            }
            else
            {
            ?>
          btn_blue
          <?
            }
            ?>">去完成</a>
                </li>
                <li>
                  <div class="icon-number">6</div>
                  <p><b>邀請大師 <span class="span-md-visible">+$10</span></b>邀請朋友（KOL）。無限選項。每次KOL使用推薦鏈接邀請他們的朋友加入MingMing時，
                    他們都會在此KOL經過授權過程並下載其介紹視頻（獲得等級1）後獲得10美元。
                  </p>
                  <div class="price">+$10</div>
                  <a href="#" class="btn  <?
          if ($ra6)
          {
                ?>
          btn_grey
          <?
            }
            else
            {
            ?>
          btn_blue
          <?
            }
            ?>">去完成</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?
  }
  }
  ?>
<?php get_footer(); ?>