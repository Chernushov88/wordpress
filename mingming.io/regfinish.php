<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
$idus=$_POST['idu'];

$link1=get_user_meta( $idus, 'uservideo1', true);
//$link2=get_user_meta( $idus, 'uservideo2', true);
$zaka=explode('++',$_POST['zak']);

update_post_meta( $zaka[0], 'billing_link',$link1 );
//update_post_meta( $zaka[1], 'billing_link',$link2 );


?>