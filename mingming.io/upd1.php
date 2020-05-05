<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');




$user_id = wp_update_user( array(
  'ID'              => $_POST['id'],
  'user_email'      => $_POST['email'],
  'first_name'      => $_POST['name'],
 ));





if (!empty( $_POST['dob']))
{
update_user_meta( $_POST['id'], 'birthday', $_POST['dob'] );	
}

if (!empty( $_POST['inviteCode']))
{
update_user_meta( $_POST['id'], 'invite', $_POST['inviteCode'] );
}

?>