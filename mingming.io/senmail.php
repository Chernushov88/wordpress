<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
$ida=$_POST['id'];
$user = get_user_by('id',$_POST['id']);
$kto=$user->data->user_login;
$ema=$user->data->user_email;
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; utf-8\r\n";
$headers .= "From: no-reply@mingming.io\r\n";
$message='Hello, your account at MingMing is approved. <br/>Please be ready to get orders. <br/>Your MingMing.';
mail($ema, "Account at MingMing is approved.", $message,$headers, "-fwebmaster@mingming.io");
?>