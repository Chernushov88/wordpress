<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
$idus=$_POST['idu'];
$link1=get_user_meta( $idus, 'uservideo1', true);
$link2=get_user_meta( $idus, 'uservideo2', true);
echo $zaka=$link1.'+++'.$link2;


?>