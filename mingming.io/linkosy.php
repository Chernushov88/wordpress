<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
if (!empty($_POST['idu']))
{
$link1=get_user_meta($_POST['idu'], 'uservideo1', true);
if ($link1)
{
$ur='https://mingming.io/pipe/'.$_POST['link'].'.mp4';
update_user_meta( $_POST['idu'], 'uservideo2', $ur);	
}
else
{
$ur='https://mingming.io/pipe/'.$_POST['link'].'.mp4';
 update_user_meta( $_POST['idu'], 'uservideo1', $ur);	
}

} 
?>