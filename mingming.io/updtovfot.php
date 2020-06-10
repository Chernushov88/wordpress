<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

$uploads_dir = $_SERVER['DOCUMENT_ROOT'].'/';
if (!empty($_FILES['img']["tmp_name"]))
{ 




$url     = 'https://mingming.io/'.$_FILES['img']["name"];
$post_id = $_POST['id'];


$id = $_POST['id'];
$attachment_image = get_children( array(
	'numberposts' => -1,
	'post_mime_type' => 'image',
	'post_parent' => $id,
	'post_type' => 'attachment'
) );

$thumb = get_the_post_thumbnail( $id, 'thumbnail' );
$ppp0=explode('src=',$thumb);
$ppp1=explode('"',$ppp0[1]);


$attachment_image = array_shift($attachment_image);
//$img =wp_get_attachment_url($attachment_image->ID);
$img=$ppp1[1];
if (strlen($img)>3)
{
$img=str_replace('-150x150','',$img);
	

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
   


   
?>