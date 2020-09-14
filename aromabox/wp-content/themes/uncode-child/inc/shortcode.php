<?php
 add_shortcode('aroma_get_fio', 'aroma_get_fio');
  function aroma_get_fio(){
   	//element_connect_on_insert();
   	ob_start();
      $user_info = get_userdata(get_current_user_id());
      $first_name = $user_info->first_name;
      $last_name = $user_info->last_name;
      echo $first_name.' '. $last_name;

   return ob_get_clean();	
   	
}

 add_shortcode('aroma_get_email', 'aroma_get_email');
  function aroma_get_email(){
   	//element_connect_on_insert();
   	ob_start();
      $user_info = get_userdata(get_current_user_id());
      $user_email = $user_info->user_email;
    
      echo $user_email;

   return ob_get_clean();	
   	
}

 add_shortcode('aroma_get_phone', 'aroma_get_phone');
  function aroma_get_phone(){
   	//element_connect_on_insert();
   	ob_start();

   echo get_user_meta( get_current_user_id(), 'billing_phone', true );

   return ob_get_clean();	
   	
}

 add_shortcode('aroma_get_cart_total_price', 'aroma_get_cart_total_price');
  function aroma_get_cart_total_price(){
	  global $woocommerce;
   	//element_connect_on_insert();
   	ob_start();

  echo WC()->cart->get_cart_total();

   return ob_get_clean();	
   	
}

 add_shortcode('aroma_get_cart_total_count', 'aroma_get_cart_total_count');
  function aroma_get_cart_total_count(){
	  global $woocommerce;
   	//element_connect_on_insert();
   	ob_start();

  echo  WC()->cart->get_cart_contents_count() ;

   return ob_get_clean();	
   	
}

 add_shortcode('aroma_get_yith_wcwl_count_products', 'aroma_get_yith_wcwl_count_products');
  function aroma_get_yith_wcwl_count_products(){
	  global $woocommerce;
   	//element_connect_on_insert();
   	ob_start();

  echo  yith_wcwl_count_products() ;

   return ob_get_clean();	
   	
}


 add_shortcode('aroma_get_user_waitlists', 'aroma_get_user_waitlists');
  function aroma_get_user_waitlists(){
	$user_id  = get_current_user_id();
$products = yith_get_user_waitlists( $user_id );
//
   	//element_connect_on_insert();
   	ob_start();

  echo count($products) ;

   return ob_get_clean();	
   	
}


