<?
  require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

  print_r($_POST);
  print_r($_FILES);
  $uploads_dir = $_SERVER['DOCUMENT_ROOT'].'/';
$_POST['id'];
$_POST['img'];
$_POST['link'];
$_POST['zak'];
  if (!empty($_FILES['img']["tmp_name"])){

	   $ur=$uploads_dir.'wp-content/uploads/'.$_FILES['img']["name"];
       move_uploaded_file($_FILES['img']["tmp_name"], $ur);

	  /*

      $url     = 'http://pozdr.beget.tech/'.$_FILES['img']["name"];
      $post_id = $_POST['id'];

      $id = $_POST['id'];
      $attachment_image = get_children( array(
        'numberposts' => 1,
        'post_mime_type' => 'image',
        'post_parent' => $id,
        'post_type' => 'attachment'
      ) );
      $attachment_image = array_shift($attachment_image);
      $img =wp_get_attachment_url($attachment_image->ID);

      if (strlen($img)>3){
          $ppp=explode('/uploads/',$img );
          $ur=$uploads_dir.'wp-content/uploads/'.$ppp[1];
          move_uploaded_file($_FILES['img']["tmp_name"], $ur);

      }
*/
  }


  $my_post = array();
  // $my_post['ID'] =$_POST['id'];
  $my_post['ID'] = 170;

  wp_update_post( wp_slash($my_post) );




?>