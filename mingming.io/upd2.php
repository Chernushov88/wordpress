<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');




$user_id = wp_update_user( array(
  'ID'              => $_POST['id'],
  'user_email'      => $_POST['email'],
  'first_name'      => $_POST['name'],
 ));





if (!empty( $_POST['followerCount']))
{
update_user_meta( $_POST['id'], 'followers', $_POST['followerCount'] );	
}

if (!empty( $_POST['phone']))
{
update_user_meta( $_POST['id'], 'phone', $_POST['phone'] );
}
if (!empty( $_POST['handle']))
{
update_user_meta( $_POST['id'], 'handle', $_POST['handle'] );
}


?>