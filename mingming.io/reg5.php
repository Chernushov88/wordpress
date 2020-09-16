<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
if (!empty($_POST['idu']))
{
	$idus=$_POST['idu'];$link='';
	if (!empty($_POST['prez']))
	{
	update_user_meta( $idus, 'self', $_POST['prez']);	
	}
	if (!empty($_POST['cat']))
	{
	update_user_meta( $idus, 'who', $_POST['cat']);	
	}
	//if (!empty($_POST['desc']))
	//{
	//update_user_meta( $idus, 'description', $_POST['desc']);	
	//}
	$uploads_dir = $_SERVER['DOCUMENT_ROOT'].'/';
if (!empty($_FILES['img']["tmp_name"]))
{ 


$ur=$uploads_dir.'wp-content/uploads/'.$idus.'.png';
move_uploaded_file($_FILES['img']["tmp_name"], $ur);
$link='https://mingming.io/wp-content/uploads/'.$idus.'.png';

	update_user_meta( $idus, 'userimg', $link);
}


////////////////////////////////////

$fio=get_user_meta( $idus, 'first_name', true);
	$post = array(
	    'post_author' => 1,
        'post_content'  => $_POST['desc'],
	    'post_excerpt' => $_POST['prez'],
	    'post_status' => "pending",
	    'post_title' => $fio, 
	    'post_type' => "product",
	);
 
	//Create post
$post_id = wp_insert_post($post);
 
 update_user_meta( $idus, 'idtov', $post_id);
	
	//wp_set_object_terms( $post_id, $ProdCat, 'product_cat' );     //Категория товара
	wp_set_object_terms($post_id, 'simple', 'product_type');     //Тип товара (Простой товар)
    //wp_set_object_terms($post_id, '_regular_price', '20');   
    //wp_set_object_terms($post_id, '_price', '20'); 
	
	update_post_meta( $post_id, '_regular_price', 20);	
	update_post_meta( $post_id, '_price', 20);	
	
	
	
	if (!empty($_POST['cat0']))
	{
		
$ca=explode(',',$_POST['cat0']);	
$cat_ids0 = array_map('intval', $ca );
wp_set_object_terms($post_id,  $cat_ids0, 'product_cat');
		
	}

	
	
 	require_once(ABSPATH . 'wp-admin/includes/file.php');
	require_once(ABSPATH . 'wp-admin/includes/media.php');
	require_once(ABSPATH . "wp-admin" . '/includes/image.php');

$url     = $link;

$desc    = $fio;

// Загрузим файл
$tmp = download_url( $url );

// Установим данные файла
$file_array = [
	'name'     => basename( $url ), // 
	'tmp_name' => $tmp,
	'error'    => 0,
	'size'     => filesize($tmp),
];

// загружаем файл
$id = media_handle_sideload( $file_array, $post_id, $desc );

 
update_post_meta( $post_id, '_thumbnail_id', $id );







///////////////////////////////

///////////////////////заказы
if ($post_id)
{
	 $idza=array();
$order=wc_create_order(array('customer_id' => 29)); //создаём новый заказ
$address = array(
        'email'      => 'getagazoff@yandex.ru',
    ); 
 $order->add_product( get_product( $post_id ), 1 );
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
 $order1->add_product( get_product( $post_id ), 1 );
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
 $zakaz=implode('++',$idza);
$data = array('message' => $zakaz);
header('Content-Type: application/json');
echo json_encode($data);
 
 

	
}
//////////////////////


}


?>