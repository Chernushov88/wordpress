<?
  require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

  print_r($_POST);
  print_r($_FILES);
  $uploads_dir = $_SERVER['DOCUMENT_ROOT'].'/';
echo 'zakaz - ' . $_POST['zak'];
  if (!empty($_FILES['img']["tmp_name"])){




	   $ur=$uploads_dir.'wp-content/uploads/'.$_FILES['img']["name"];
       move_uploaded_file($_FILES['img']["tmp_name"], $ur);
      $lin = 'https://mingming.io/wp-content/uploads/.'$_FILES['img']["name"];
	  update_post_meta( trim($_POST['zak']), 'billing_link',  $lin );
	  $op=$_POST['zak'];
	   $order_meta = get_post_meta($_POST['zak']);
	   $ema=$order_meta['_billing_email'][0];

$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; utf-8\r\n";
$headers .= "From: no-reply@mingming.io\r\n";



       $message='Hello. Your order is ready. Please click at this <a target="_blank" href="https://mingming.io/my-account-2/view-order/'.$op.'/">link</a>!';
	   mail($ema, "You order is ready! MingMing.io", $message,$headers, "-fwebmaster@mingming.io");

	 // mail($ema, "Order finish", 'Hello. Your order is ready. Please click at this <a target="_blank" href="https://mingming.io/my-account-2/view-order/'. $op.'/">link</a>!');
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



  //$my_post = array();
  //$my_post['ID'] =$_POST['id'];


  //wp_update_post( wp_slash($my_post) );




?>