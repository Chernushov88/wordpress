<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<p>
	<?php
	printf(
		/* translators: 1: user display name 2: logout url */
		__( 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce' ),
		'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
		esc_url( wc_logout_url() )
	);
	?>
</p>



<p>
	<?php
	$nam=esc_html( $current_user->display_name );


 $current_user = wp_get_current_user();
  $idu=get_user_meta( $current_user->ID, 'idtov', true);
  if (!empty($idu))
  {

	//echo $text='Dear '.$nam.', we are glad to say that your account is ready for use! When someone will make an order we will send you a mail! Also you may change photo and description in your account details. Yours MingMing group!';

	echo $text = '<div class="text-en">
    <p>Congratulations, you have passed the verification and now you can fully benefit from our platform!</p>
    <p>Now click "<a href="/my-account-2/edit-account/">Account details</a>" and fill in the fields with information about you, including photo, description, and price per order. Our recommended price is USD 25 for every 100.000 of your fans. Even with 1% conversion that is 100000 * 1% *  25 USD = 25000 USD  if you have 100.000 active followers. </p>
    <p>Once you have filled out your profile, open "<a href="/my-account-2/orders/">Orders</a>" and record an introduction video for your fans and mingming customers. Please use the video to introduce yourself, mention our platform name, and tell your fans that you would be happy to make a shoutout video for them or wish them a happy holiday in your own style.</p>
    <p>Post the video and website link on your social platforms or notify your fans in any other way and wait for orders! </p>
    <p>When a buyer orders your video, you will receive an email notification. You will have 7 days to record the video and upload it to the platform. Video requests and your customers’ names can be found in the "<a href="/my-account-2/orders/">Orders</a>" section of your profile. From there, you can record or upload a video. You will receive the payment after our staff reviews the video.</p>
    <p>If you have any questions or suggestions, don\'t hesitate to contact us at hello@mingming.io Thanks for using mingming.io!</p>
</div>
<div class="text-chine">
    <p>恭喜，您已通過驗證，現在您可以享受我們平台為您提供的福利。</p>
    <p>現在，請按下“帳戶詳細資料”，然後填寫您的個人信息，包括您的照片，個人簡介以及每筆訂單的價格。我們的建議價格是每10萬粉絲25美元。舉例而言，每20萬粉絲，若有1%的客戶訂閱視頻，即2000人訂閱，2000訂閱人數乘25美元，即5萬美元。</p>
    <p>填寫完個人資料後，打開“命令”，同時為你個人粉絲及明明的客戶錄製簡介的視頻。請使用視頻作自我介紹，同時提及我們平台的名稱，並告訴您的粉絲您樂意為他們製作視頻以及以你個人方式祝福他們度過愉快的假期。</p>
    <p>將視頻和網站連結發佈到您的社交平台，或以其他任何方式通知您的粉絲訂閱。</p>
    <p>當有客戶訂閱您的視頻時，您會收到一封電子郵件通知。您將有7天的時間錄製視頻，並將視頻上傳至平台。有關視頻的製作要求及您客戶的姓名，您可以在個人資料中“命令”部分中找到。您可以在此部分錄影及上載視頻。當我們的員工審核視頻後，您將收到付款。</p>
    <p>如果您有任何疑問或建議，請隨時通過hello@mingming.io與我們聯繫。感謝您使用mingming.io！</p>
</div>';

  }
  else
  {

	  if( current_user_can('actor') )
    {

		 printf(
		__( '<div class="text-en">
    <p>Congratulations, you have passed the verification and now you can fully benefit from our platform!<br/>
     Now click "Account details" and fill in the fields with information about you, including photo, description, and price per order. Our recommended price is USD 25 for every 100.000 of your fans. Even with 1% conversion that is 100000 * 1% *  25 USD = 25000 USD  if you have 100.000 active followers. <br/>
Once you have filled out your profile, open "Orders" and record an introduction video for your fans and mingming customers. Please use the video to introduce yourself, mention our platform name, and tell your fans that you would be happy to make a shoutout video for them or wish them a happy holiday in your own style.<br/>
Post the video and website link on your social platforms or notify your fans in any other way and wait for orders!  <br/>
When a buyer orders your video, you will receive an email notification. You will have 7 days to record the video and upload it to the platform. Video requests and your customers’ names can be found in the "Orders" section of your profile. From there, you can record or upload a video. You will receive the payment after our staff reviews the video.If you have any questions or suggestions, don\'t hesitate to contact us at hello@mingming.io Thanks for using mingming.io!</p>
</div>
<div class="text-chine">
    <p>恭喜，您已通過驗證，現在您可以享受我們平台為您提供的福利。
 <br/>
現在，請按下“帳戶詳細資料”，然後填寫您的個人信息，包括您的照片，個人簡介以及每筆訂單的價格。我們的建議價格是每10萬粉絲25美元。舉例而言，每20萬粉絲，若有1%的客戶訂閱視頻，即2000人訂閱，2000訂閱人數乘25美元，即5萬美元。
  <br/>
填寫完個人資料後，打開“命令”，同時為你個人粉絲及明明的客戶錄製簡介的視頻。請使用視頻作自我介紹，同時提及我們平台的名稱，並告訴您的粉絲您樂意為他們製作視頻以及以你個人方式祝福他們度過愉快的假期。
  <br/>
將視頻和網站連結發佈到您的社交平台，或以其他任何方式通知您的粉絲訂閱。
  <br/>
當有客戶訂閱您的視頻時，您會收到一封電子郵件通知。您將有7天的時間錄製視頻，並將視頻上傳至平台。有關視頻的製作要求及您客戶的姓名，您可以在個人資料中“命令”部分中找到。您可以在此部分錄影及上載視頻。當我們的員工審核視頻後，您將收到付款。
  <br/>
如果您有任何疑問或建議，請隨時通過hello@mingming.io與我們聯繫。感謝您使用mingming.io！
</p>
</div> ', 'woocommerce' ),
		esc_url( wc_get_endpoint_url( 'orders' ) ),
		esc_url( wc_get_endpoint_url( 'edit-address' ) ),
		esc_url( wc_get_endpoint_url( 'edit-account' ) )
	);




	}
	else
	{

		  printf(
		__( '<div class="text-en">
    <p>Welcome to the MingMing platform! Here you can find a celebrity you like and get a personal shoutout for you, your friends, or family! If you\'d like to get a video from someone who\'s not on the platform yet, feel free to invite them on our behalf!</p>
</div>
<div class="text-chine">
    <p>歡迎使用MingMing平台！在這裡，您可以找到自己喜歡的名人，並為自己、您的朋友或家人推廣。如果您希望在未使用此平台者中訂閱視頻，請隨時邀請他們。</p>
</div> ', 'woocommerce' ),
		esc_url( wc_get_endpoint_url( 'orders' ) ),
		esc_url( wc_get_endpoint_url( 'edit-address' ) ),
		esc_url( wc_get_endpoint_url( 'edit-account' ) )
	);
	}




  }

	?>
</p>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
