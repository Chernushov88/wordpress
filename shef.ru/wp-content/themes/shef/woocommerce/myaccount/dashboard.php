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

<?/*php
    printf(     
        __( 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce' ),
        '<strong>' . esc_html( $current_user->display_name ) . '</strong>',
        esc_url( wc_logout_url() )
    );
?></p>

<p><?php
    printf(
        __( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' ),
        esc_url( wc_get_endpoint_url( 'orders' ) ),
        esc_url( wc_get_endpoint_url( 'edit-address' ) ),
        esc_url( wc_get_endpoint_url( 'edit-account' ) )
    );
*/?>
 <script>
$(document).ready(function(){
   $('.show_more').click(function(){
    var zn = $(this).attr('data');
    if ($('#'+zn+'').is(":visible"))
    {
        $('#'+zn+'').fadeOut();
        $(this).html('<i class="fa fa-angle-down" aria-hidden="true"></i>');
        $(this).parent().parent().attr("class","");
    }
    else
    {
        $('#'+zn+'').fadeIn();
        $(this).html('<i class="fa fa-angle-up" aria-hidden="true"></i>');
        $(this).parent().parent().attr("class","open_grey");
    }
    
  
   }); 
});

</script>
<div class="wrapper relative">
        <? global $woocommerce; ?>
        <a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="mini_cart r desktop">
            <span class="count"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
        </a>
        <div class="my_soz">
            <?php dynamic_sidebar( 'sidebar-social' ); ?>
        </div>
        <div class="breadcrumbs_set"><a href="/">Главная</a> <span class="orange"><i class="fa fa-angle-right" aria-hidden="true"></i></span> Личный кабинет</div>
        <h1 class="ttl50">Личный кабинет</h1>
<?
$current_user = wp_get_current_user();
// print_r($current_user);
// echo 'Username: '         . $current_user->user_login     . '<br />';
// echo 'email: '            . $current_user->user_email     . '<br />';
// echo 'first name: '       . $current_user->user_firstname . '<br />';
// echo 'last name: '        . $current_user->user_lastname  . '<br />';
// echo 'Отображаемое имя: '   . $current_user->display_name   . '<br />';
// echo 'ID: '               . $current_user->ID             . '<br />';


$user_id = get_current_user_id();
$user_phone = get_user_meta($user_id, 'phone', true);
echo $user_phone;
if (isset($_POST['billing_phone'])) {
echo update_user_meta($current_user->ID , 'phone', sanitize_text_field($_POST['billing_phone']));
echo update_user_meta($current_user->ID , 'billing_phone', sanitize_text_field($_POST['billing_phone']));
}
/*
$customer_id = get_current_user_id();
$get_addresses = apply_filters(
    'woocommerce_my_account_get_addresses',
    array(
        'billing' => __( 'Billing address', 'woocommerce' ),
    ),
    $customer_id
    );
$oldcol = 1;
$col    = 1;
?>
<?php 

foreach ( $get_addresses as $name => $address_title ) : ?>

    <?php
        $address = wc_get_account_formatted_address( $name );
        $col     = $col * -1;
        $oldcol  = $oldcol * -1;
    ?>
<div class="u-column<?php echo $col < 0 ? 1 : 2; ?> col-<?php echo $oldcol < 0 ? 1 : 2; ?>">
<?php
    echo $address ;
    wp_kses_post( $address );
?>
</div>

<?php endforeach; 
*/
?>

        <div class="blk_lk">
            <div class="my_lk_left">
            <table>
                <tbody><tr>
                    <td>Ваше имя:</td>
                    <td><?= $current_user->user_lastname.' ' . $current_user->user_firstname ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?=$current_user->user_email;?></td>
                </tr>
                <tr>
                    <td>Телефон:</td>
                    <td><?=$current_user->phone;?></td>
                </tr>
                <tr>
                    <td>Адрес:</td>
                    <td></td>
                </tr>
            </tbody></table>
            </div>
            <div class="right_lk">
                <a class="green_btn" href="/lichnyj-kabinet/edit-account/">Редактировать данные</a>
                <a class="white_btn" href="/lichnyj-kabinet/smenit-parol/">Сменить пароль</a>
                <a class="black_btn" href="/wp-login.php?action=logout&_wpnonce=4279f605dd">Выход</a>
            </div>
            <div class="clb"></div>
        </div>
<?

## ==> Define HERE the statuses of that orders 
$order_statuses = array('wc-on-hold', 'wc-processing', 'wc-completed');

## ==> Define HERE the customer ID
$customer_user_id = get_current_user_id(); // current user ID here for example

// Getting current customer orders
$customer_orders = wc_get_orders( array(
    'meta_key' => '_customer_user',
    'meta_value' => $customer_user_id,
    'post_status' => $order_statuses,
    'numberposts' => -1
) );


// Loop through each customer WC_Order objects
foreach($customer_orders as $order ){

    // Order ID (added WooCommerce 3+ compatibility)
    $order_id = method_exists( $order, 'get_id' ) ? $order->get_id() : $order->id;

    // Iterating through current orders items
    foreach($order->get_items() as $item_id => $item){

        // var_dump($item);
        echo method_exists( $item, 'get_meta' );
        // The corresponding product ID (Added Compatibility with WC 3+) 
        $product_id = method_exists( $item, 'get_product_id' ) ? $item->get_product_id() : $item['product_id'];

        // Order Item data (unprotected on Woocommerce 3)
        if( method_exists( $item, 'get_data' ) ) {
             $item_data = $item->get_data();
             $subtotal = $item_data['subtotal'];
        } else {
             $subtotal = wc_get_order_item_meta( $item_id, '_line_subtotal', true );
        }

        // TEST: Some output
        echo '<p>Subtotal: '.$subtotal.'</p><br>';

        // Get a specific meta data
        $item_color = method_exists( $item, 'get_meta' ) ? $item->get_meta('pa_color') : wc_get_order_item_meta( $item_id, 'pa_color', true );

        // TEST: Some output
        echo '<p>Color: '.$item_color.'</p><br>';
    }
} 

?>
        <div class="blk_lk">
            <div class="lk_ttl">Ваши заказы:</div>
            <table class="lk_table">
                <tbody><tr>
                    <td><a class="show_more" data="id1"><i class="fa fa-angle-down" aria-hidden="true"></i></a></td>
                    <td>#123467890</td>
                    <td>15.04.2019 10:00</td>
                    <td><img src="/wp-content/themes/shef/verstka/image/cart/img1.jpg" alt="" class="lk_img"></td>
                    <td>1 позиция на сумму 4 800 <span class="ruble">Р</span></td>
                    <td class="status1">Выполнен</td>
                </tr>
                <tr id="id1" class="notvisible">
                    <td colspan="6">
                        <div class="spis_cart">
                        <ul>
                            <li class="relative">
                                
                                <div class="img"><img src="/wp-content/themes/shef/verstka/image/cart/img1.jpg" alt=""></div>
                                <div class="name"><a href="detail.html">Ассорти</a></div>
                                <div class="gram">1 шт</div>
                                <div class="spis_price">4 800 <span class="ruble">Р</span></div>
                                <div class="clb"></div>
                            </li>
                            <li>
                                <div class="green_txt">ОПЛАЧЕН</div>
                                <div class="ord_sum">4 800 <span class="ruble">Р</span></div>
                                <div class="ord_sum_itog">Итоговая сумма:</div>
                            </li>
                        </ul>
                        </div>
                    </td>
                </tr>
                <tr class="open_grey">
                    <td><a class="show_more" data="id2"><i class="fa fa-angle-up" aria-hidden="true"></i></a></td>
                    <td>#123467654</td>
                    <td>16.10.2019 14:30</td>
                    <td>
                        <img src="/wp-content/themes/shef/verstka/image/cart/img1.jpg" class="lk_img" alt="">
                        <img src="/wp-content/themes/shef/verstka/image/cart/img2.jpg" class="lk_img" alt="">
                    </td>
                    <td>2 позиции на сумму 8 000 <span class="ruble">Р</span></td>
                    <td class="status2">В обработке</td>
                </tr>
                <tr id="id2" class="visible">
                    <td colspan="6">
                        <div class="spis_cart">
                        <ul>
                            <li class="relative">
                                
                                <div class="img"><img src="/wp-content/themes/shef/verstka/image/cart/img1.jpg" alt=""></div>
                                <div class="name"><a href="detail.html">Ассорти</a></div>
                                <div class="gram">1 шт</div>
                                <div class="spis_price">4 800 <span class="ruble">Р</span></div>
                                <div class="clb"></div>
                            </li>
                            <li class="relative">
                                
                                <div class="img"><img src="/wp-content/themes/shef/verstka/image/cart/img2.jpg" alt=""></div>
                                <div class="name"><a href="detail.html">Идеальный завтрак</a></div>
                                <div class="gram">1 шт</div>
                                <div class="spis_price">3 200 <span class="ruble">Р</span></div>
                                <div class="clb"></div>
                            </li>
                            <li>
                                <div class="green_txt">ОПЛАЧЕН</div>
                                <div class="ord_sum">8 000 <span class="ruble">Р</span></div>
                                <div class="ord_sum_itog">Итоговая сумма:</div>
                            </li>
                        </ul>
                        </div>
                    </td>
                </tr>
                
            </tbody></table>
        </div>
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
