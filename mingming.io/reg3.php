<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
$em=array();
$users = get_users( array( ) );
foreach( $users as $user )
{
$em[]=$user->user_email;
}
if (in_array($_POST['email'], $em)) 
{
echo '0';   
}
else
{
$userdata = array(
	'ID'              => 0,  
	'user_pass'       => $_POST['password'], 
	'user_login'      => $_POST['username'], 
	'user_nicename'   => $_POST['username'],
	'user_url'        => '',
	'user_email'      => $_POST['email'],
	'display_name'    => $_POST['username'],
	'nickname'        => '',
	'first_name'      => $_POST['username'],
	'last_name'       => '',
	'description'     => '',
	'rich_editing'    => 'true', // false - выключить визуальный редактор
	'user_registered' => date('Y-m-d H:i:s'), 
	'role'=> 'actor', // (строка) роль пользователя
);
echo $id=wp_insert_user( $userdata );
$user_id->get_error_message();
}

?>