<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
print_r($_POST);

update_post_meta( $_POST['zak'], 'billing_link', $_POST['link'] );
?>