<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');













print_r($_POST);
print_r($_FILES);
$uploads_dir = $_SERVER['DOCUMENT_ROOT'].'/';
if (!empty($_FILES['img']["tmp_name"]))
{ 




$url     = 'http://pozdr.beget.tech/'.$_FILES['img']["name"];
$post_id = $_POST['id'];


$id = $_POST['id'];
$attachment_image = get_children( array(
	'numberposts' => 1,
	'post_mime_type' => 'image',
	'post_parent' => $id,
	'post_type' => 'attachment'
) );
$attachment_image = array_shift($attachment_image);
$img =wp_get_attachment_url($attachment_image->ID);
if (strlen($img)>3)
{
	

$ppp=explode('/uploads/',$img );
$ur=$uploads_dir.'wp-content/uploads/'.$ppp[1];
move_uploaded_file($_FILES['img']["tmp_name"], $ur);

$gg=explode('/',$ppp[1]);

$kon=$gg[count($gg)-1];
$yy=explode('.',$kon);
$razr=$yy[1];
$nazva=$yy[0].'-150x150.'.$razr;
$nazva1=$yy[0].'-100x100.'.$razr;
$nazva3=$yy[0].'-300x300.'.$razr;
$gg1=explode('/',$ppp[1]);
array_pop($gg1);

$itoh=implode('/',$gg1);
$re1=$itoh.'/'.$nazva;
$re2=$itoh.'/'.$nazva1;
$re3=$itoh.'/'.$nazva3;
$ur1=$uploads_dir.'wp-content/uploads/'.$re1;
$ur2=$uploads_dir.'wp-content/uploads/'.$re2;
$ur3=$uploads_dir.'wp-content/uploads/'.$re3;
copy($ur, $ur1);
copy($ur, $ur2);
copy($ur, $ur3);

}

}
   

$my_post = array();
$my_post['ID'] =$_POST['id'];
if (!empty( $_POST['prez']))
{
$my_post['post_excerpt'] = '<em>'.$_POST['prez'].'</em>';
$my_post['post_content'] = $_POST['des'];
$my_post['post_title'] = $_POST['nam'];
}
wp_update_post( wp_slash($my_post) );





if (!empty( $_POST['price']))
{
update_post_meta( $_POST['id'], '_regular_price', $_POST['price'] );	
update_post_meta( $_POST['id'], '_price', $_POST['price'] );	

}
if (!empty( $_POST['tag']))
{
$ta=explode(',',$_POST['tag']);	

wp_set_object_terms($_POST['id'],  $ta, 'product_tag');
}
   
if (!empty( $_POST['cat']))
{

$ca=explode(',',$_POST['cat']);	
$cat_ids = array_map('intval', $ca );
wp_set_object_terms($_POST['id'],  $cat_ids, 'product_cat');

}  
   
//////////////////////////
$iduu=array();

	 $users = get_users( array(
	'meta_key'     => 'idtov',
	'meta_value'   =>  $_POST['id']
     ) );

foreach( $users as $user )
{
	
	$iduu[]=$user->ID;
}


if (!empty($iduu))
{
update_user_meta( $iduu[0], 'charity', $_POST['cher']);
	
}
/////////////////
   
?>