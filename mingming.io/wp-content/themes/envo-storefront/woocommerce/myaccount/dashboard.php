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
<div class="dashbourd-page">
<p>
	<?php
	printf(
		/* translators: 1: user display name 2: logout url */
		/* __( 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce' ), */
		__( '你好 %1$s ', 'woocommerce' ),
		'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
		esc_url( wc_logout_url() )
	);
	?>

</p>


	<?php
	$nam=esc_html( $current_user->display_name );


 $current_user = wp_get_current_user();
  $idu=get_user_meta( $current_user->ID, 'idtov', true);
  if (!empty($idu))
  {

	//echo $text='Dear '.$nam.', we are glad to say that your account is ready for use! When someone will make an order we will send you a mail! Also you may change photo and description in your account details. Yours MingMing group!';
/*
<div class="text-en hidden">
    <p>Congratulations, you have passed the verification and now you can fully benefit from our platform!</p>
    <p>Now click "<a href="/my-account-2/edit-account/">Account details</a>" and fill in the fields with information about you, including photo, description, and price per order. Our recommended price is USD 25 for every 100.000 of your fans. Even with 1% conversion that is 100000 * 1% *  25 USD = 25000 USD  if you have 100.000 active followers. </p>
    <p>Once you have filled out your profile, open "<a href="/my-account-2/orders/">Orders</a>" and record an introduction video for your fans and mingming customers. Please use the video to introduce yourself, mention our platform name, and tell your fans that you would be happy to make a shoutout video for them or wish them a happy holiday in your own style.</p>
    <p>Post the video and website link on your social platforms or notify your fans in any other way and wait for orders! </p>
    <p>When a buyer orders your video, you will receive an email notification. You will have 7 days to record the video and upload it to the platform. Video requests and your customers’ names can be found in the "<a href="/my-account-2/orders/">Orders</a>" section of your profile. From there, you can record or upload a video. You will receive the payment after our staff reviews the video.</p>
    <p>If you have any questions or suggestions, don\'t hesitate to contact us at hello@mingming.io Thanks for using mingming.io!</p>
</div>
*/
	echo $text = '<div class="text-chine-">
   <p>恭喜你，你已经通过了验证，现在您可以充分利用我们的平台！</p>
   <p>点击<a href="/my-account-2/edit-account/">“账户详情”</a>并在字段中填写您的信息，包括照片、介绍和订单的价格。我们的建议价格是每10万你的粉丝25美元。即使有1% 的转化率，假如你有10万活跃的追随者，也就是100000*1%*25美元=25000美元。</p>
   <p>填写完个人资料后，打开<a href="/my-account-2/orders/"><a href="/my-account-2/orders/">“订单”</a></a>并为您的粉丝和名明客户录制一段介绍视频。请在这段视频中介绍你自己，提到我们的平台名称，并告诉你的粉丝，你很乐意为他们制作一段欢呼视频，或者用你自己的风格祝他们节日快乐。</p>
   <p>在你的社交平台上发布视频和网站链接，或者以任何其他方式通知你的粉丝并等待订单！</p>
   <p>当买家订购你的视频时，你将收到一封电子邮件通知。你将有7天的时间录制视频并上传到平台。视频请求和客户姓名可以在您的个人资料的<a href="/my-account-2/orders/"><a href="/my-account-2/orders/">“订单”</a></a>部分找到。从那里，你可以录制或上传视频。您将收到付款后，我们的工作人员审查视频。</p>
   <p>如果你有任何问题，请随时联系我们客服 support@mingming.io 感谢您使用mingming.io!</p>
</div><div class="dashbourd-baner"><img src="/wp-content/themes/envo-storefront/img/banerMyAccount.png" alt="" ></div>';

  }
  else
  {

	  if( current_user_can('actor') )
    {

		 printf(
		__( '<div class="text-en">
   <p>恭喜你，你已经通过了验证，现在您可以充分利用我们的平台！</p>
   <p>点击<a href="/my-account-2/edit-account/">“账户详情”</a>并在字段中填写您的信息，包括照片、介绍和订单的价格。我们的建议价格是每10万你的粉丝25美元。即使有1%的转化率，假如你有10万活跃的追随者，也就是100000*1%*25美元=25000美元。</p>
   <p>填写完个人资料后，打开<a href="/my-account-2/orders/"><a href="/my-account-2/orders/">“订单”</a></a>并为您的粉丝和名明客户录制一段介绍视频。请在这段视频中介绍你自己，提到我们的平台名称，并告诉你的粉丝，你很乐意为他们制作一段欢呼视频，或者用你自己的风格祝他们节日快乐。</p>
   <p>在你的社交平台上发布视频和网站链接，或者以任何其他方式通知你的粉丝并等待订单！</p>
   <p>当买家订购你的视频时，你将收到一封电子邮件通知。你将有7天的时间录制视频并上传到平台。视频请求和客户姓名可以在您的个人资料的<a href="/my-account-2/orders/"><a href="/my-account-2/orders/">“订单”</a></a>部分找到。从那里，你可以录制或上传视频。您将收到付款后，我们的工作人员审查视频。</p>
   <p>如果你有任何问题，请随时联系我们客服 support@mingming.io 感谢您使用mingming.io!</p>
</div><div class="dashbourd-baner"><img src="/wp-content/themes/envo-storefront/img/banerMyAccount.png" alt="" ></div> ', 'woocommerce' ),
		esc_url( wc_get_endpoint_url( 'orders' ) ),
		esc_url( wc_get_endpoint_url( 'edit-address' ) ),
		esc_url( wc_get_endpoint_url( 'edit-account' ) )
	);




	}
	else
	{

		  printf(
		__( '<div class="text-en">
   <p>欢迎来到明名！在这里你可以找到你喜欢的名人，并为你，你的朋友，或家人得到一个人的欢呼！如果你想从不在平台上的人得到一段视频，请随时代表我们邀请他们！</p>
</div>
  <div class="dashbourd-baner"><img src="/wp-content/themes/envo-storefront/img/banerMyAccount.png" alt="" ></div>

', 'woocommerce' ),
		esc_url( wc_get_endpoint_url( 'orders' ) ),
		esc_url( wc_get_endpoint_url( 'edit-address' ) ),
		esc_url( wc_get_endpoint_url( 'edit-account' ) )
	);
	}




  }

	?>
</div>
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
