<?php
  /*
   * Template name: mes
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
  

<?
do_action( 'woocommerce_account_navigation' ); 
?>


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

</div></div>
<link rel="stylesheet" href="/wp-content/themes/envo-storefront/css/cssprogress.css">
<?
}
}
else
{
	
		
	if( current_user_can('actor') )
    {
	?>
	<style>
	.woocommerce-MyAccount-navigation-link--my-notice a
	{
		background: #bf56fb!important;
    color: #fff!important;
    border-color: #bf56fb!important;
		
	}
	
	
	
	</style>
	<?
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
<div class="woocommerce-account">
<div class="main-content-page single-content">

<div class="single-entry-summary">

<div class="woocommerce">

<?
do_action( 'woocommerce_account_navigation' ); 
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
    color: #0
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



<div class="woocommerce-MyAccount-content purple_backg">
<div class="woocommerce-MyAccount-content__ranking md-hide">
  <div class="h1 h1-top-new">请录制一个简短的视频，并告诉您您支持TRUE和MingMing！</div>
  <div class="message_content-in">
    <p>現在點擊“帐户资料”，並在字段中填寫有關您的信息，包括照片，說明和每筆訂單的價格。我們的建議價格是每100.000粉絲USD 25。如果您有100.000個活躍關注者，則即使1％的轉化為100000 * 1％* 25 USD
      = 25000 USD。 </p>
    <p>填寫完個人資料後，打開“我的订单”，並為您的粉絲和吸引客戶錄製介紹視頻。請使用視頻介紹自己，提及我們的平台名稱，並告訴您的粉絲您很樂意為他們製作大聲疾呼的視頻，或者希望他們以自己的風格度過愉快的假期。</p>
    <p>將視頻和網站鏈接發佈到您的社交平台上，或以其他任何方式通知粉絲並等待訂單！</p>
    <p>買家訂購視頻時，您會收到一封電子郵件通知。您將有7天的時間來錄製視頻並將其上傳到平台。視頻請求和您的客戶名稱可以在個人資料的“訂單”部分中找到。從那裡，您可以錄製或上傳視頻。 我們的員工審核視頻後，您將收到付款。</p>
  </div>
</div>  </div>
</div></div></div>
<?	
	}
}
?>
</div>
<?php get_footer(); ?>