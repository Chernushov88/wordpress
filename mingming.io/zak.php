<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');



 $idza=array();
$order=wc_create_order(array('customer_id' => 29)); //создаём новый заказ
$address = array(
        'email'      => 'getagazoff@yandex.ru',
    ); 
 $order->add_product( get_product( '819' ), 1 );
 $order->set_address( $address, 'billing' ); 
 $order->set_status( 'payed' ); 
 $order->calculate_totals(); 
  $order->payment_complete();
   $order->save();
update_post_meta($order->id, 'billing_videofor', 'Someone else');
update_post_meta($order->id, 'billing_occasion', 'Birthday');
update_post_meta($order->id, 'billing_video', 'No');
update_post_meta($order->id, 'billing_exclusive', 'No');
update_post_meta($order->id, 'billing_instructions', 'Please use the video to introduce yourself, mention our platform name (MingMing), and tell your fans that you would be happy to make a personal video for them! Post the video on your social platforms or notify your fans in any other way, and wait for orders!');

 $idza[]=$order->id;

$order1=wc_create_order(array('customer_id' => 29)); //создаём новый заказ
$address1 = array(
        'email'      => 'getagazoff@yandex.ru',
  ); 
 $order1->add_product( get_product( '819' ), 1 );
 $order1->set_address( $address1, 'billing' ); 
 $order1->set_status( 'payed' ); 
 $order1->calculate_totals(); 
 $order1->payment_complete();
  $order1->save();



update_post_meta($order1->id, 'billing_videofor', 'Someone else');
update_post_meta($order1->id, 'billing_occasion', 'Birthday');
update_post_meta($order1->id, 'billing_video', 'No');
update_post_meta($order1->id, 'billing_exclusive', 'No');
update_post_meta($order1->id, 'billing_instructions', 'Please record a short video and tell that you support T.R.U.E. and MingMing!');

 $idza[]=$order1->id;
echo $zakaz=implode('++',$idza);
?>