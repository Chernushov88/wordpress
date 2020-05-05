<?
  require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');


		  
	$order_id =305;  
	$order = wc_get_order( $order_id );	  
		  
	 $po=array();
		 
   
            foreach($order->get_items() as $item_id => $item)
            {
            $product_id = method_exists( $item, 'get_product_id' ) ? $item->get_product_id() : $item['product_id'];
            $po[]=$product_id;
            }
  
    echo $po[0];
	
 
$users = get_users( array(
	'meta_key'     => 'idtov',
	'meta_value'   =>  $po[0]
) );

foreach( $users as $user )
{
	print_r($user->user_email);
}



?>