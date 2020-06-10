<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
$ur='https://mingming.io/pipe/'.$_POST['link'].'.mp4';
update_post_meta( $_POST['zak'], 'billing_link',$ur );
?>