<?php
/*
Plugin Name: Webcam Comments mart2019
Plugin URI: https://github.com/slava37md2/WP-webcam-comments-plugin
Description: Attach videos to comments and build a new commenting experience.
Version: 1.0.0
Author: Deorditsa Veaceslav
Author URI: https://wikimoldia.org/wp/2016/05/10/hello-world/
Disclaimer: Use at your own risk. No warranty expressed or implied is provided.
*/

/*
    Copyright 2017 Deorditsa Veacheslav

*/













add_filter('comment_text', 'webcamcomments_comment_text');
function webcamcomments_comment_text( $comment = '')
{

    $id = get_comment_ID();
    $comment_date_Y_m = get_comment_date( "Y-m" ); $comment_date_day = get_comment_date( "d" );

	$pos = strpos($comment, '[videocomment=');
	if($pos !== false)
        {
		$siteurl = get_option('siteurl');
		$comment .= '<br><video width="320" height="240" controls="controls">
		<source src="'.$siteurl.'/wp-content/mp4/'.$comment_date_Y_m.'/'.$comment_date_day.'/'.$id.'.mp4" type="video/mp4">
   Tag video does not work in your browser.
   <a href="'.$siteurl.'/wp-content/mp4/'.$comment_date_Y_m.'/'.$comment_date_day.'/'.$id.'.mp4">Download video</a>.
  </video><br>';
	}
    return $comment;
}






add_action( 'comment_post', 'action_copy_mp4file', 10, 3 );
function action_copy_mp4file( $comment_ID, $comment_approved, $commentdata ) {
	global $wpdb;
	if( stristr($commentdata['comment_content'], '[videocomment]') )// See if exists [videocomment] in comment
	{
		$file = ABSPATH.'wp-content/uploads/'.$_POST["inputhidden"];

		if (!file_exists($file))// Если видеофайл не существует
		{ $wpdb->delete( $wpdb->comments, array("comment_ID" => $comment_ID), array("%d") );//Удаляем коммент из DB
		  return;
		}

		$commentdata['comment_content']=str_replace('[videocomment]','[videocomment='.$comment_ID.']',$commentdata['comment_content']);
		$wpdb->update( $wpdb->comments, array("comment_content" => $commentdata['comment_content']), array("comment_ID" => $comment_ID), array("%s"), array("%d") );//Save changes in DB

		$date_Y_m = date("Y-m"); $date_day = date("d");
		if(!is_dir ( ABSPATH . 'wp-content/mp4/'.$date_Y_m ) )// Check if folder exists
			if(!mkdir(ABSPATH . 'wp-content/mp4/'.$date_Y_m)) exit( 'The folder '.$date_Y_m.' was not created.' );
		if(!is_dir ( ABSPATH . 'wp-content/mp4/'.$date_Y_m.'/'.$date_day ) )// Check if folder exists
			if(!mkdir(ABSPATH . 'wp-content/mp4/'.$date_Y_m.'/'.$date_day)) exit( 'The folder '.$date_Y_m.'/'.$date_day.' was not created.' );

		 //Копируем mp4-файл изпапки uploads в папку mp4/date("Y-m-d") и переименовываем его в номер коммента
		
		$ran=rand(10000,100000);
		$newfile = ABSPATH.'wp-content/mp4/'.$date_Y_m.'/'.$date_day.'/'.$ran.$comment_ID.'.mp4';

		if (!rename($file, $newfile)) {
			echo " $file was not copied";
		}
		else
		{
		
		
		////////////////
		
		
	  
      $lin = 'https://mingming.io/wp-content/mp4/'.$date_Y_m.'/'.$date_day.'/'.$ran.$comment_ID.'.mp4';
	  update_post_meta( trim($_POST['zaka']), 'billing_link',  $lin );
	  $op=$_POST['zaka'];
	   $order_meta = get_post_meta($_POST['zaka']);
	   $ema=$order_meta['_billing_email'][0];

$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; utf-8\r\n";
$headers .= "From: no-reply@mingming.io\r\n";



       $message='Hello. Your order is ready. Please click at this <a target="_blank" href="https://mingming.io/my-account-2/view-order/'.$op.'/">link</a>!';
	   mail($ema, "You order is ready! MingMing.io", $message,$headers, "-fwebmaster@mingming.io");

		////////////////
		
		}
		
	}
	else $wpdb->delete( $wpdb->comments, array("comment_ID" => $comment_ID), array("%d") );//Удаляем текстовый коммент из DB
}











function comment_custom(){
$ppp=$_GET['id'];
    echo "<input type='hidden' name='inputhidden' id='inputhidden' value='nofile.mp4'>";
	 echo "<input type='hidden' name='zaka' id='zaka' value='".$ppp."'>";
}

    //Those filter makes my ""custom comment field"" both logged and unlogged
    add_action('comment_form_after_fields','comment_custom');
    add_action('comment_form_logged_in_after','comment_custom');







// Удаляем URL из формы отправки комментариев
add_filter('comment_form_default_fields', 'sheens_unset_url_field');
function sheens_unset_url_field ( $fields ) {
  if ( isset($fields['url'] ))
  unset ( $fields['url'] );
  return $fields;
}














add_action('trash_comment', 'del_videocomment');
function del_videocomment($comment_id){

	$comment_date_Y_m = get_comment_date( "Y-m",$comment_id ); $comment_date_day = get_comment_date( "d",$comment_id );

	$file = ABSPATH.'wp-content/mp4/'.$comment_date_Y_m.'/'.$comment_date_day.'/'.$comment_id.'.mp4';

	if (file_exists($file)){// Если видеофайл существует
		unlink($file);
	}
}
















add_action('comment_form', 'webcamcomments_comment_form', 99);
function webcamcomments_comment_form()
{
	//if (!is_single() && !is_page()) return;
	if (!is_singular()) {
		return;
	}

$ppp=$_GET['id'];
	echo '';//Post comment

	$siteurl = get_option('siteurl');//site_url();
	//echo $siteurl;
	$showhtml ='
	<script src="'.$siteurl.'/wp-content/plugins/webcam-comments-mart2019/RecordRTC.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!--h1 id="header">RecordRTC Upload to PHP</h1-->
	<video id="your-video-id" width="640" height="480" controls="" autoplay=""></video><br>
	<button onclick="StartStopRecording(); return false;" id="SSR">Start Recording</button>
	<span id="timer_inp">300</span>

        <script type="text/javascript">
	var recorder;
	var timerId;
	  function StartStopRecording(){
	   if(document.getElementById("SSR").innerHTML==="Start Recording"){
	    document.getElementById("SSR").innerHTML = "Stop Recording";

	    timerId = setInterval(function() {
		  var obj=document.getElementById("timer_inp");
		  obj.innerHTML--;
		  if(obj.innerHTML==0){clearInterval(timerId);}
		}, 1000);
	    document.getElementById("timer_inp").innerHTML="300";

            // capture camera and/or microphone
            navigator.mediaDevices.getUserMedia({ video: true, audio: true }).then(function(camera) {

                // preview camera during recording
                document.getElementById("your-video-id").muted = true;
                document.getElementById("your-video-id").srcObject = camera;

                // recording configuration/hints/parameters
                var recordingHints = {
                    type: "video",
		    video: {
			width: 1280,
			height: 960
			},
		    canvas: {
			width: 1280,
			height: 960
			}
                };

                // initiating the recorder
                recorder = RecordRTC(camera, recordingHints);

                // starting recording here
                recorder.startRecording();

                // auto stop recording after 5 seconds
                var milliSeconds = 300 * 1000;
                setTimeout(function() {

                    // stop recording
                    recorder.stopRecording(function() {
			clearInterval(timerId);
			document.getElementById("timer_inp").innerHTML="300";
			StopRec();
                    });

                }, milliSeconds);
            });
	   }else{
		recorder.stopRecording(function() {
			clearInterval(timerId);
			document.getElementById("timer_inp").innerHTML="300";
			StopRec();
                    });
		document.getElementById("SSR").innerHTML = "Start Recording";
		}
	  }

	function StopRec(){

                        // get recorded blob
                        var blob = recorder.getBlob();

                        // generating a random file name
                        var fileName = getFileName("mp4");



                        // we need to upload "File" --- not "Blob"
                        var fileObject = new File([blob], fileName, {
                            type: "video/mp4"
                        });

                        var formData = new FormData();

                        // recorded data
                        formData.append("video-blob", fileObject);

                        // file name
                        formData.append("video-filename", fileObject.name);

                        //document.getElementById("header").innerHTML = "Uploading to PHP using jQuery.... file size: (" +  bytesToSize(fileObject.size) + ")";

                        // upload using jQuery
                        var request = $.ajax({
                            url: "'.$siteurl.'/wp-content/plugins/webcam-comments-mart2019/save.php", //http://localhost/   https://webrtcweb.com/RecordRTC/ replace with your own server URL
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false,
                            type: "POST"
			});
			request.done(function( response ) {
                                if (response === "success") {
                                    //alert("successfully uploaded recorded blob");
				    document.getElementById("your-video-id").muted = false;

                                    // file path on server
                                    var fileDownloadURL = "'.$siteurl.'/wp-content/uploads/" + fileObject.name;

                                    // preview the uploaded file URL
                                    //document.getElementById("header").innerHTML = "<a href=" + fileDownloadURL + " target=_blank>" + fileDownloadURL + "</a>";

				    if(document.getElementById("comment").value.indexOf("[videocomment]")==-1) document.getElementById("comment").value += "[videocomment]";
				    document.getElementById("inputhidden").value = fileName;
				    document.getElementById("SSR").innerHTML = "Start Recording";

                                    // preview uploaded file in a VIDEO element
                                    document.getElementById("your-video-id").src = fileDownloadURL;

                                    // open uploaded file in a new tab
                                    //window.open(fileDownloadURL);
                                } else {
                                    alert(response); // error/failure
                                }
                        });
                        request.fail(function( jqXHR, textStatus ) {
				alert( "Request failed: " + textStatus );
			});

                        // release camera
                        document.getElementById("your-video-id").srcObject = null;
                        camera.getTracks().forEach(function(track) {
                            track.stop();
                        });
	}
            // this function is used to generate random file name
            function getFileName(fileExtension) {
                /*var d = new Date();
                var year = d.getUTCFullYear();
                var month = d.getUTCMonth();
                var date = d.getUTCDate();*/
                return getRandomString() + "." + fileExtension;//"RecordRTC-" + year + month + date + "-" +

            }

            function getRandomString() {
                if (window.crypto && window.crypto.getRandomValues && navigator.userAgent.indexOf("Safari") === -1) {
                    var a = window.crypto.getRandomValues(new Uint32Array(3)),
                        token = "";
                    for (var i = 0, l = a.length; i < l; i++) {
                        token += a[i].toString(36);
                    }
                    return token;
                } else {
                    return (Math.random() * new Date().getTime()).toString(36).replace(/\./g, "");
                }
            }

        </script>';
	echo $showhtml;
}














register_activation_hook(__FILE__, 'webcamcomments_activate');
function webcamcomments_activate()
{
    if(!is_dir ( ABSPATH . 'wp-content/mp4' ) )// Check if folder exists
       if(!mkdir(ABSPATH . 'wp-content/mp4')) exit( 'The folder "mp4" was not created. Set rights for wp-content folder 777 temporarily and try to activate plugin again.' );
    if(!is_dir ( ABSPATH . 'wp-content/uploads' ) )// Check if folder exists
       if(!mkdir(ABSPATH . 'wp-content/uploads')) exit( 'The folder "uploads" was not created. Set rights for wp-content folder 777 temporarily and try to activate plugin again.' );
}

?>
