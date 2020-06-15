<?
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
if (!empty($_POST['idu']))
{
$idus=$_POST['idu'];
$uploads_dir = $_SERVER['DOCUMENT_ROOT'].'/';
if (!empty($_FILES['img']["tmp_name"]))
{ 
$ur=$uploads_dir.'wp-content/uploads/'.$idus.'.png';
move_uploaded_file($_FILES['img']["tmp_name"], $ur);
}
}
?>