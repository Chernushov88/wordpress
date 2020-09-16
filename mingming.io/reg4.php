<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
if (!empty($_POST['idu']))
{
	$idus=$_POST['idu'];
	if (!empty($_POST['networkType']))
	{
	update_user_meta( $idus, 'findyou', $_POST['networkType']);	
	}
	if (!empty($_POST['handle']))
	{
	update_user_meta( $idus, 'handle', $_POST['handle']);	
	}
	if (!empty($_POST['followerCount']))
	{
	update_user_meta( $idus, 'followers', $_POST['followerCount']);	
	}
	
	
}


?>