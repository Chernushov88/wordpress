<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
print_r($_POST);

$userdata = array(
	'ID'              => 0,  
	'user_pass'       => $_POST['password'], // обязательно
	'user_login'      => $_POST['username'], // обязательно
	'user_nicename'   => $_POST['username'],
	'user_url'        => '',
	'user_email'      => $_POST['email'],
	'display_name'    => $_POST['username'],
	'nickname'        => '',
	'first_name'      => $_POST['name'],
	'last_name'       => '',
	'description'     => '',
	'rich_editing'    => 'true', // false - выключить визуальный редактор
	'user_registered' => date('Y-m-d H:i:s'), // дата регистрации (Y-m-d H:i:s) в GMT
	'role'=> 'actor', // (строка) роль пользователя
	'findyou'  => $_POST['networkType'],
	'handle'  =>$_POST['handle'],
	'followers' =>$_POST['followerCount'],
	'billing_phone' =>$_POST['phone'],
	'phone' =>$_POST['phone'],
);

echo $id=wp_insert_user( $userdata );
echo $user_id->get_error_message();
?>