<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
print_r($_POST);
$bir=explode('/',$_POST['dob']);
$bir1=$bir[2].'-'.$bir[1].'-'.$bir[0].' 00:00:00';
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
	'role'            => 'buyer', // (строка) роль пользователя
	'invite'             => $_POST['inviteCode'],
	'birthday'             =>$bir1
);

$id=wp_insert_user( $userdata );

?>