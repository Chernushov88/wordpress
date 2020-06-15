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
	if (!empty($_POST['desc']))
	{
	update_user_meta( $idus, 'description', $_POST['desc']);	
	}
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
 

 	require_once(ABSPATH . 'wp-admin/includes/file.php');
	require_once(ABSPATH . 'wp-admin/includes/media.php');
	require_once(ABSPATH . "wp-admin" . '/includes/image.php');

$url     = $link;
$post_id = $post_id;
$desc    = $fio;

// Загрузим файл
$tmp = download_url( $url );

// Установим данные файла
$file_array = [
	'name'     => basename( $url ), // ex: wp-header-logo.png
	'tmp_name' => $tmp,
	'error'    => 0,
	'size'     => filesize($tmp),
];

// загружаем файл
$id = media_handle_sideload( $file_array, $post_id, $desc );

 
update_post_meta( $post_id, '_thumbnail_id', $id );







///////////////////////////////






}


?>