<?php
/**
 * Customer payment retry email
 *
 * @author  Prospress
 * @package WooCommerce_Subscriptions/Templates/Emails
 * @version 2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * NOTES ABOUT TEMPLATE EDIT FOR KADENCE WOOMAIL DESIGNER.
 * 1. add hook 'kadence_woomail_designer_email_details' to pull in main text
 * 2. Add option to Remove static main text area.
 */

do_action( 'woocommerce_email_header', $email_heading, $email );

$override_content = Kadence_Woomail_Customizer::opt( 'customer_payment_retry_override' );

if ( true == $override_content ) {

	/**
	 * Email Main Body Text Action
	 *
	 * @hooked Kadence_Woomail_Designer::email_main_text_area
	 */
	do_action( 'kadence_woomail_designer_email_details', $order, $sent_to_admin, $plain_text, $email );


} else {
	?>
	<p>
		<?php
		// translators: %1$s: name of the blog, %2$s: lowercase human time diff in the form returned by wcs_get_human_time_diff(), e.g. 'in 12 hours'
		echo wp_kses( sprintf( _x( 'The automatic payment to renew your subscription with %1$s has failed. We will retry the payment %2$s.', 'In customer renewal invoice email', 'woocommerce-subscriptions' ), esc_html( get_bloginfo( 'name' ) ), wcs_get_human_time_diff( $retry->get_time() ) ), array( 'a' => array( 'href' => true ) ) );
		?>
	</p>
	<p>
		<?php
		// translators: %1$s %2$s: link markup to checkout payment url, note: no full stop due to url at the end
		echo wp_kses( sprintf( _x( 'To reactivate the subscription now, you can also login and pay for the renewal from your account page: %1$sPay Now &raquo;%2$s', 'In customer renewal invoice email', 'woocommerce-subscriptions' ), '<a href="' . esc_url( $order->get_checkout_payment_url() ) . '">', '</a>' ), array( 'a' => array( 'href' => true ) ) );
		?>
	</p>

	<?php 
}

do_action( 'woocommerce_subscriptions_email_order_details', $order, $sent_to_admin, $plain_text, $email );

do_action( 'woocommerce_email_footer', $email );
