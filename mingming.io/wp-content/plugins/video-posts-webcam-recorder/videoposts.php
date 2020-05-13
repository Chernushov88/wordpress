<?php
/*
Plugin Name: Video Posts Webcam Recorder
Plugin URI: http://www.videowhisper.com/?p=WordPress+Video+Recorder+Posts+Comments
Description: <strong>Video Posts Webcam Recorder</strong> allows WordPress users to record and authors to directly insert videos in their posts. Integrates with VideoShareVOD plugin for advanced video management, multiple players and settings. Supports video reaction recording.
Version: 2.6.4
Author: VideoWhisper.com
Author URI: http://www.videowhisper.com/
Contributors: videowhisper, VideoWhisper.com
*/

function videoposts_addbuttons() {
	// Don't bother doing this stuff if the current user lacks permissions
	if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
		return;

	// Add only in Rich Editor mode f
	if ( get_user_option('rich_editing') == 'true') {
		add_filter("mce_external_plugins", "add_videoposts_tinymce_plugin");
		add_filter('mce_buttons', 'register_videoposts_button');

	}
}

function register_videoposts_button($buttons) {
	array_push($buttons, "separator", "recorder");
	array_push($buttons, "separator", "import");
	return $buttons;
}

// Load the TinyMCE plugin : editor_plugin.js (wp2.5)
function add_videoposts_tinymce_plugin($plugin_array) {
	$plugin_array['recorder'] = home_url().'/wp-content/plugins/video-posts-webcam-recorder/posts/editor_plugin.js';
	$plugin_array['import'] = home_url().'/wp-content/plugins/video-posts-webcam-recorder/posts/editor_plugin_i.js';
	return $plugin_array;
}

// init process for button control
add_action('init', 'videoposts_addbuttons');


if (!class_exists("VWvideoPosts"))
{
	class VWvideoPosts {

		function VWvideoPosts() { //constructor

		}

		function settings_link($links) {
			$settings_link = '<a href="options-general.php?page=videoposts.php&mod=settings">'.__("Settings").'</a>';
			array_unshift($links, $settings_link);
			return $links;
		}

		function recordings_link($links) {
			$recordings_link = '<a href="options-general.php?page=videoposts.php&mod=recordings">'.__("Recordings").'</a>';
			array_unshift($links, $recordings_link);
			return $links;
		}


		function wpse_hold_global_post_number( $post_id, $post )
		{
			global $post_ID;
			if($post_ID) $post_id = $post_ID;
			$recCookie = $_COOKIE["recIdCookie"];

			global $wpdb;
			$table_name = $wpdb->prefix."vw_videorecordings";
			$sql="UPDATE $table_name SET postId = '$post_id' WHERE id = '$recCookie' AND postId = '0'";
			$wpdb->query($sql);
		}

		function shortcode_recorder($atts)
		{
			$options = get_option('VWvideoRecorderOptions');

			if (class_exists("VWvideoShare"))
			{
				$optionsVSV = get_option( 'VWvideoShareOptions' );
				if (!VWvideoShare::hasPriviledge($optionsVSV['shareList'])) return __('You do not have permissions to share videos!', 'videosharevod');
			}

			$atts = shortcode_atts(array('height' => '550px', 'width'=> '100%', 'youtube_sync' =>'', 'vimeo_sync' =>'', 'default_name' => '', 'category' => '' ), $atts, 'videowhisper_recorder');

			$base = plugin_dir_url(__FILE__) . "posts/videowhisper/";
			$swfurl = $base  . "videorecorder.swf";

			$swfurl .= '?ssl=1&room=' . $atts['default_name']; //default recording name passed as room (applies to visitors)

			$height = $atts['height'];

			if ($category = sanitize_file_name($atts['category']))
			{
			  setcookie( 'vw_recording_category', $category,  time() + 86400, '/' );

				$categoryID = get_cat_ID( $category );
				if (!$categoryID)
				{
					require_once(ABSPATH . 'wp-admin/includes/taxonomy.php');
					$categoryID = wp_create_category($category);
				}

				/*
				$sessionPath = $options['uploadsPath'] . $atts['default_name'];
				$sessionInfo = array('category' => $category);
				VWvideoPosts::varSave($sessionPath, $sessionInfo);
				*/
			}


//! Youtube / Vimeo Playback Sync

			if ($atts['youtube_sync'])
			{
				$swfurl .= '&mode=youtube_sync';
				$height = '320px';
				$width = '350px';
			}

			if ($atts['vimeo_sync'])
			{
				$swfurl .= '&mode=vimeo_sync';
				$height = '320px';
				$width = '350px';
			}

//ini_set('display_errors', '1');

			$htmlCode .= <<<EOCODE
<div style="height: $height; width: $width" id="videowhisper_container">
<object height="100%" width="100%" type="application/x-shockwave-flash" data="$swfurl" id="videowhisper_recorder">
<param name="base" value="$base" />
<param name="movie" value="$swfurl" />
<param bgcolor="#5a5152" />
<param name="scale" value="noscale" />
<param name="salign" value="lt" />
<param name="allowFullScreen" value="true" />
<param name="allowscriptaccess" value="always" />
</object>
</div>
EOCODE;

			//! Vimeo: record during playback of Vimeo video
		if ($atts['vimeo_sync'])
			{
				$videoId = sanitize_text_field($atts['vimeo_sync']);

				//wp_enqueue_script( 'vwr-vimeo', 'https://player.vimeo.com/api/player.js');
				//wp_enqueue_script( 'vwr-vimeo-ctr', plugin_dir_url(  __FILE__ ) . 'js/vimeo.min.js');

				$htmlCode = '<table>
				<tr><td valign="top" align="middle"> ' . $htmlCode .' <div id="syncInstructions">' . stripslashes($options['syncInstructions']) . '</div>
				<button style="visibility: hidden; font-size: 25px" id="buttonPlay">'.$options['playSyncButton'].'</button> </td>
				<td> <div style="position: relative; width: 640px; height: 360px;">
				<iframe style="visibility: hidden" id="playerContainer" src="https://player.vimeo.com/video/' . $videoId .'?background=1&playsinline=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

 </div> 
 <div style="background-color: transparent; position: absolute; z-index: 999999; width: 150px; height: 70px; top: 290px; left: 490px;"></div> </td></tr></table>
 <script src="https://player.vimeo.com/api/player.js"></script>
';

				$jsCode .= <<<EOTV

    console.log('VideoWhisper Recorder Vimeo Sync / Load JS ');
		
/*			
    var options = {
        id: $videoId,
        width: 640,
        loop: false,
        playsinline: false
    };

    var player = new Vimeo.Player('playerContainer', options);
 */
  
 	var iframe = document.querySelector('iframe');
    var player = new Vimeo.Player(iframe);
    
   	  var recordingStarted = false;
	  var recordingPaused = false;

	  var playerStarted = false;
	  var playerPaused = false;

      var done = false;

 // Vimeo player events
 
   player.on('pause', function(data) {
    // data is an object containing properties specific to that event
         	
          console.log('VideoWhisper Recorder Vimeo Sync / pause: ', data);
            
	       playerPaused = true;
           if (recordingStarted) videowhisperCall('videowhisper_recorder','pause');
});

   player.on('bufferstart', function(data) {
    // data is an object containing properties specific to that event
         	
          console.log('VideoWhisper Recorder Vimeo Sync / bufferstart: ', data);
            
	       playerPaused = true;
           if (recordingStarted) videowhisperCall('videowhisper_recorder','pause');
});

   player.on('play', function(data) {
    // data is an object containing properties specific to that event
         	
          console.log('VideoWhisper Recorder Vimeo Sync / play: ', data);
            
		  playerStarted = true;
		 if (!recordingStarted) videowhisperCall('videowhisper_recorder','record'); //start recording if not started
	     if (recordingPaused) videowhisperCall('videowhisper_recorder','resume'); //resume recording if paused

});

   player.on('ended', function(data) {
    // data is an object containing properties specific to that event
         	
          console.log('VideoWhisper Recorder Vimeo Sync / ended: ', data);
            
         videowhisperCall('videowhisper_recorder','stop');
		 endFullscreen();
});

// player iframe ready
 player.ready().then(function() {
    // the player is ready
      console.log('VideoWhisper Recorder Vimeo Sync / Vimeo Player Ready ');
  
    	var $ = document.querySelector.bind(document);
		var player = event.target;
		iframe = $('#playerContainer');		
	     setupListener();
});

function goFullscreen (){
      console.log('VideoWhisper Recorder Vimeo Sync / goFullscreen ');

  hideRecorder();
  showPlayer();

  player.play();

  var requestFullScreen = iframe.requestFullScreen || iframe.mozRequestFullScreen || iframe.webkitRequestFullScreen;
  if (requestFullScreen) {
    requestFullScreen.bind(iframe)();
  }

  	       	var $ = document.querySelector.bind(document);
		   	$('button').style.display = 'none';
		    $('#syncInstructions').style.display = 'none';

}

function endFullscreen()
{
	      console.log('VideoWhisper Recorder Vimeo Sync / endFullscreen ');

	if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
}

function setupListener (){
	 console.log('VideoWhisper Recorder Vimeo Sync / setupListener ');
	
	var $ = document.querySelector.bind(document);
	$('button').addEventListener('click', goFullscreen);
}


   function hideRecorder()
      {
	  		console.log('VideoWhisper Recorder Vimeo Sync / hideRecorder ');
	      
	       document.getElementById('videowhisper_container').style.visibility = 'hidden';

	       	var $ = document.querySelector.bind(document);
		   	$('button').style.visibility = 'visible';

	  }

	  function showPlayer()
	  {
	  		console.log('VideoWhisper Recorder Vimeo Sync / showPlayer ');
		  
		        document.getElementById('playerContainer').style.visibility = 'visible';

	  }

	  function showPlayButton()
	  {
		  	console.log('VideoWhisper Recorder Vimeo Sync / showPlayButton ');

  	       	var $ = document.querySelector.bind(document);
		   	$('button').style.visibility = 'visible';
	  }

      function videowhisperNotification(notification)
	  {
		  //window.alert(notification);
          console.log('VideoWhisper Recorder Vimeo Sync / videowhisperNotification: ', notification);

		  switch (notification)
		  {
		  case 'record':
		  if (!playerStarted)
		  {
		  hideRecorder();
		  goFullscreen();
		  }
		  recordingStarted = true;
		  break;

		  case 'stop':
		  player.pause();
		  break;

		  case 'resume':
		  if (playerPaused) player.play();
		  recordingPaused = false;
		  break;

		  case 'pause':
		  recordingPaused = true;
		  break;

		  case 'camAvailable':
		  showPlayButton();
		  break;

		  case 'camInaccessible':
		  case 'camMuted':
		  window.alert('Webcam access is required to use recorder. Webcam can not be used: ' + notification);
		  break;

		  }
	  }


function getFlashMovie(movieName) {
if (navigator.appName.indexOf("Microsoft") != -1) {
if (typeof (window[movieName].videowhisperRecorder) == 'function') {
movie = window[movieName];
}
else if (typeof (document[movieName].videowhisperRecorder) == 'function') {
movie = document[movieName];
}
}
else {
movie = document[movieName];
}
return movie;
}


//flash = flash html object name (ie "videowhisper_recorder")
//action = record, stop, preview, save, discard, exit, hideButtons, showButtons
function videowhisperCall(flash, action)
{
var movie = getFlashMovie(flash);
if (movie == null || movie == undefined) window.alert("Flash element not found:" + flash + " :" + movie);
else movie.videowhisperRecorder(action);
}

EOTV;

				$htmlCode .= '<SCRIPT>'. $jsCode . '</SCRIPT>';
   }

			//! Youtube: record during playback of Youtube video
			if ($atts['youtube_sync'])
			{
				$videoId = sanitize_text_field($atts['youtube_sync']);

				$htmlCode = '<table><tr><td valign="top" align="middle"> ' . $htmlCode .' <div id="syncInstructions">' . stripslashes($options['syncInstructions']) . '</div> <button style="visibility: hidden; font-size: 25px" id="buttonPlay">'.$options['playSyncButton'].'</button> </td><td> <div style="position: relative; width: 640px; height: 360px;"> <div style="visibility: hidden" id="player" /> </div> <div style="background-color: transparent; position: absolute; z-index: 999999; width: 150px; height: 70px; top: 290px; left: 490px;"></div> </td></tr></table>';

				$jsCode .= <<<EOT
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	  var recordingStarted = false;
	  var recordingPaused = false;

	  var playerStarted = false;
	  var playerPaused = false;

      var player, iframe;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          width: '640',
          height: '390',
          videoId: '$videoId',
          playerVars: { 'controls': 0, 'showinfo': 0, 'autohide': 1, 'autoplay': 0, 'disablekb': 1, 'enablejsapi': 1, 'fs': 1, 'modestbranding':1, 'rel':0},
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      function onPlayerReady(event) {

	    var $ = document.querySelector.bind(document);
		var player = event.target;
		iframe = $('#player');

	     setupListener();
      }

function goFullscreen (){

  hideRecorder();
  showPlayer();

  player.playVideo();//won't work on mobile

  var requestFullScreen = iframe.requestFullScreen || iframe.mozRequestFullScreen || iframe.webkitRequestFullScreen;
  if (requestFullScreen) {
    requestFullScreen.bind(iframe)();
  }

  	       	var $ = document.querySelector.bind(document);
		   	$('button').style.display = 'none';
		    $('#syncInstructions').style.display = 'none';

}

function endFullscreen()
{
	if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
}

function setupListener (){
	var $ = document.querySelector.bind(document);
	$('button').addEventListener('click', goFullscreen);

}



      var done = false;
      function onPlayerStateChange(event) {

         if (event.data == YT.PlayerState.ENDED )
         {
         videowhisperCall('videowhisper_recorder','stop');
		 endFullscreen();
         }

         if (event.data == YT.PlayerState.PLAYING )
         {
	     playerStarted = true;
		 if (!recordingStarted) videowhisperCall('videowhisper_recorder','record'); //start recording if not started
	     if (recordingPaused) videowhisperCall('videowhisper_recorder','resume'); //resume recording if paused

         }

         if (event.data == YT.PlayerState.PAUSED  || event.data == YT.PlayerState.BUFFERING)
         {
	       playerPaused = true;
           if (recordingStarted) videowhisperCall('videowhisper_recorder','pause');
         }

      }

      function hideRecorder()
      {
	       document.getElementById('videowhisper_container').style.visibility = 'hidden';

	       	var $ = document.querySelector.bind(document);
		   	$('button').style.visibility = 'visible';

	        //player.playVideo();
	  }

	  function showPlayer()
	  {
		        document.getElementById('player').style.visibility = 'visible';

	  }

	  function showPlayButton()
	  {
  	       	var $ = document.querySelector.bind(document);
		   	$('button').style.visibility = 'visible';
	  }

      function videowhisperNotification(notification)
	  {
		 // window.alert(notification);
          console.log('VideoWhisper Recorder Youtube Sync / videowhisperNotification: ', notification);

		  switch (notification)
		  {
		  case 'record':
		  if (!playerStarted)
		  {
		  hideRecorder();
		  goFullscreen();
		  }
		  recordingStarted = true;
		  break;

		  case 'stop':
		  player.stopVideo();
		  break;

		  case 'resume':
		  if (playerPaused) player.playVideo();
		  recordingPaused = false;
		  break;

		  case 'pause':
		  recordingPaused = true;
		  break;

		  case 'camAvailable':
		  showPlayButton();
		  break;

		  case 'camInaccessible':
		  case 'camMuted':
		  window.alert('Webcam access is required to use recorder. Webcam can not be used: ' + notification);
		  break;

		  }
	  }


function getFlashMovie(movieName) {
if (navigator.appName.indexOf("Microsoft") != -1) {
if (typeof (window[movieName].videowhisperRecorder) == 'function') {
movie = window[movieName];
}
else if (typeof (document[movieName].videowhisperRecorder) == 'function') {
movie = document[movieName];
}
}
else {
movie = document[movieName];
}
return movie;
}


//flash = flash html object name (ie "videowhisper_recorder")
//action = record, stop, preview, save, discard, exit, hideButtons, showButtons
function videowhisperCall(flash, action)
{
var movie = getFlashMovie(flash);
if (movie == null || movie == undefined) window.alert("Flash element not found:" + flash + " :" + movie);
else movie.videowhisperRecorder(action);
}

EOT;

				$htmlCode .= '<SCRIPT>'. $jsCode . '</SCRIPT>';
			}

			$videowhisper = $options['videowhisper'];
			$state = 'block' ;
			if (!$videowhisper) $state = 'none';

			$poweredby = '<div style=\'display: ' . $state . ';\'><i><small>Powered by <a href=\'http://www.videowhisper.com\'  target=\'_blank\'>VideoWhisper</a>,<a href=\'http://www.videowhisper.com/?p=WordPress+Video+Recorder+Posts+Comments\'  target=\'_blank\'>Video Recorder</a>.</small></i></div>';

			$htmlCode .=  $poweredby;

			return $htmlCode;
		}
		


		function videowhisper($atts) //shortcode for [videowhisper stream=""]
		{
			
			//$content
			$options = get_option('VWvideoRecorderOptions');

		$atts = shortcode_atts(
				array(
					'stream' => ''
				), $atts, 'videowhisper');

			
			$streamname = $atts['stream'];
			if (!$streamname) return 'Shortcode error: Videowhisper stream not provided!';

			$rtmp_server = urlencode($options['rtmp_server']);
			$videowhisper = $options['videowhisper'];
			$player = $options['selectPlayer'];
			$embedmode = $options['embedMode'];

			$embedWidth = $options['embedWidth'];
			$embedHeight = $options['embedHeight'];

			$autoplay = $options['autoplay'];
			$streams_url = $options['videos_url'];
			$videosPath = $options['directory'];
			$state = 'block' ;
			if (!$videowhisper) $state = 'none';
			

			$poweredby = '<div style=\'display: ' . $state . ';\'><i><small>Powered by <a href=\'http://www.videowhisper.com\'  target=\'_blank\'>VideoWhisper</a>,<a href=\'http://www.videowhisper.com/?p=Video+Recorder\'  target=\'_blank\'> Video Recorder</a>.</small></i></div>';
		
		
				$home = home_url();
				$playercode = '';
				

				while (!$playercode)
				switch($player)
				{
				case 'videosharevod';
					global $wpdb;
					$postID = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_name = '" . sanitize_file_name($streamname) . "' and post_type='video' LIMIT 0,1" );
					if (!$postID) 
					{ 	
						//fallback to stream player if VSV video not found
						$player='vwplayer';
						 break;
						 };
					$playercode = do_shortcode("[videowhisper_player video=\"$postID\"]");
					break;

				case 'vwplayer':
					$playercode = <<<EOD
<div id='vwplayer' style='width:$embedWidth; height:$embedHeight'><object height="100%" width="100%"><param name="movie" value=" $home/wp-content/plugins/video-posts-webcam-recorder/posts/videowhisper/streamplayer.swf?streamName=$streamname&amp;serverRTMP=$rtmp_server&amp;templateURL=\"><param name="scale" value="noscale"><param name="salign" value="lt"><param name="base" value="$home/wp-content/plugins/video-posts-webcam-recorder/posts/videowhisper/"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><embed base="$home/wp-content/plugins/video-posts-webcam-recorder/posts/videowhisper/"  scale="noscale" salign="lt" src=" $home/wp-content/plugins/video-posts-webcam-recorder/posts/videowhisper/streamplayer.swf?streamName=$streamname&amp;serverRTMP=$rtmp_server&amp;templateURL=" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" height="$embedHeight" width="$embedWidth"></object></div>$poweredby
EOD;

					break;
				case 'jwplayer':
					$image = file_exists("wp-content/plugins/video-posts-webcam-recorder/posts/videowhisper/snapshots/$streamname.jpg")?$home."/wp-content/plugins/video-posts-webcam-recorder/posts/videowhisper/snapshots/$streamname.jpg":$home."/wp-content/plugins/video-posts-webcam-recorder/posts/videowhisper/snapshots/no_video.png";
					$playercode = <<<EOD
<div id='jwplayer_$streamname' style='width: ${embedWidth}; height: ${embedHeight}'><script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js'></script><script type='text/javascript'>var flashvars = { file: '$streamname', streamer: '$rtmp_server', autostart: '$autoplay',width: '${embedWidth}', height: '${embedHeight}', type: 'rtmp', image: '$image' }; swfobject.embedSWF('$home/wp-content/uploads/jw-player-plugin-for-wordpress/player/player.swf','jwplayer_$streamname','$embedWidth','$embedHeight','9','false', flashvars,  {allowfullscreen:'true',allowscriptaccess:'always'},   {id:'jwplayer',name:'jwplayer'}  );</script></div>$poweredby
EOD;
					break;

				case 'ffmpeg':
					if (file_exists($output_file = $videosPath . $streamname  . "-ip.mp4"))
					{
						$image = file_exists("wp-content/plugins/video-posts-webcam-recorder/posts/videowhisper/snapshots/$streamname.jpg")?$home."/wp-content/plugins/video-posts-webcam-recorder/posts/videowhisper/snapshots/$streamname.jpg":$home."/wp-content/plugins/video-posts-webcam-recorder/posts/videowhisper/snapshots/no_video.png";

						//echo $videosPath.$streams_url;
						$play_url = $streams_url . $streamname  . "-ip.mp4";
						$play_urlw = $streams_url . $streamname  . ".ogv";
						$playercode = <<<EOD
<video width='$embedWidth' height='$embedHeight' autobuffer controls='controls' poster='$image' ><source src='$play_url' type='video/mp4'><source src='$play_urlw' type='video/ogg'>You must have an HTML5 capable browser.</video>$poweredby
EOD;
					} else $playercode = "Video not found: $output_file";
					break;
			}
			
			return $playercode;
		}


		function varSave($path, $var)
		{
			file_put_contents($path, serialize($var));
		}

		function varLoad($path)
		{
			if (!file_exists($path)) return false;

			return unserialize(file_get_contents($path));
		}


		function init()
		{
			$plugin = plugin_basename(__FILE__);
			add_filter("plugin_action_links_$plugin",  array('VWvideoPosts','settings_link') );
			add_filter("plugin_action_links_$plugin",  array('VWvideoPosts','recordings_link') );
			//add_filter("the_content",array('VWvideoPosts','post_shortcode'));

			add_shortcode('videowhisper_recorder', array( 'VWvideoPosts', 'shortcode_recorder'));
			add_shortcode('videowhisper', array( 'VWvideoPosts', 'videowhisper'));

			add_action( 'save_post', array('VWvideoPosts','wpse_hold_global_post_number'), null, 2 );
			// global post ID

			wp_register_sidebar_widget('videopostsWidget','VideoWhisper Video Posts', array('VWvideoPosts', 'widget') );

			//check db
			$vw_recorder_version = "1.2";

			global $wpdb;
			$table_name = $wpdb->prefix."vw_videorecordings";

			$installed_ver = get_option( "vw_recorder_version" );

			if( $installed_ver != $vw_recorder_version )
			{
				$wpdb->flush();

				$sql = "DROP TABLE IF EXISTS `$table_name`;
		CREATE TABLE `$table_name` (
		  `id` int(11) NOT NULL auto_increment,
		  `userId` int(12)  NOT NULL,
		  `postId` int(12)  NOT NULL,
		  `streamname` varchar(64) NOT NULL,
		  `time` int(12)  NOT NULL,
		  PRIMARY KEY  (`id`)
		) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Video Whisper: Recordings - 2009@videowhisper.com' AUTO_INCREMENT=1;";

				require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
				dbDelta($sql);

				if (!$installed_ver) add_option("vw_recorder_version", $vw_recorder_version);
				else update_option( "vw_recorder_version", $vw_recorder_version );

				$wpdb->flush();
			}

			add_action( 'wp_ajax_vpwr_recorder', array('VWvideoPosts','vpwr_recorder'));
			add_action( 'wp_ajax_nopriv_vpwr_recorder', array('VWvideoPosts','vpwr_recorder'));

		}

		function vpwr_recorder()
		{
			$youtube_sync = sanitize_text_field($_GET['youtube_sync']);
			$vimeo_sync = sanitize_text_field($_GET['vimeo_sync']);
			
			$name = sanitize_text_field($_GET['name']);
			$category = sanitize_file_name($_GET['category']);

			ob_clean();
			echo do_shortcode('[videowhisper_recorder youtube_sync="'.$youtube_sync.'" vimeo_sync="'.$vimeo_sync.'" default_name="' .$name. '" category="'. $category .'"]');
			die;
		}
		function menu()
		{
			add_options_page('Video Posts Webcam Recorder Options', 'Video Post Recorder', 9, basename(__FILE__), array('VWvideoPosts', 'options'));
		}

		function adminOptionsDefault()
		{
			$root_url = get_bloginfo( "url" ) . "/";
			$upload_dir = wp_upload_dir();

			return array(
				'uploadsPath' => $upload_dir['basedir'] . '/vw_vpwr',

				'embedMode' => 1,
				'autoplay' => true,
				'rtmp_server' => 'rtmp://localhost/videowhisper',
				'recordContainer' => 'flv',
				'selectPlayer' => 'vwplayer',
				'embedWidth' => '640px',
				'embedHeight' => '480px',


				'canRecord' => 'members',
				'recordList' => 'Super Admin, Administrator, Editor, Author, Contributor, Subscriber',

				'videoCodec'=>'H264',
				'codecProfile' => 'baseline',
				'codecLevel' => '3.1',

				'soundCodec'=> 'Nellymoser',
				'soundQuality' => '9',
				'micRate' => '22',

				'camWidth' => 640,
				'camHeight' => 480,
				'camFPS' => 30,

				'camBandwidth' => 100000,
				'camMaxBandwidth' => 250000,

				'showCamSettings' => 1,
				'advancedCamSettings' => 1,
				'disablePreview' => 0,
				'layoutCode' => '',
				'fillWindow' => 0,
				'recordLimit' => 600,
				'directory' => '/home/-youraccount-/public_html/streams/',
				'videos_url' => 'http://-yoursite.com-/streams/',
				'ffmpegPath' => '/usr/local/bin/ffmpeg',
				'ffmpegConvert' => ' -vcodec copy -acodec libfaac -ac 2 -ar 22050 -ab 96k',
				'parameters'=>'&bufferLive=900&bufferFull=900&bufferLivePlayback=0.2&bufferFullPlayback=10',
				'parametersSync' => '&bufferLive=900&bufferFull=900&bufferLivePlayback=0.2&bufferFullPlayback=10&showButtons=0&showMediaButtons=0&disablePreview=1&disableSave=1&disableExit=1&disableStop=1&disableMirror=1&disableRefresh=1&disableDiscard=1&notifyJS=1&recordingMode=record&recordingModeResume=append&withStamp=0',
				'finishedMessage' => '',
				'playSyncButton' => 'PLAY',
				'syncInstructions' => '1) Enable Flash plugin if not already active.<br>2) Then, approve webcam and microphone access from plugin container and browser: when webcam is available for recording a PLAY button will show below.<br>3) Make sure you show in webcam preview as expected. If necessary, select a different camera, change your position or lighting.<br>4) When you are ready click on PLAY button!',
				'videowhisper' => 0
			);

		}

		function getAdminOptions() {

			$adminOptions = VWvideoPosts::adminOptionsDefault();

			$options = get_option('VWvideoRecorderOptions');
			if (!empty($options)) {
				foreach ($options as $key => $option)
					$adminOptions[$key] = $option;
			}
			update_option('VWvideoRecorderOptions', $adminOptions);
			return $adminOptions;
		}

		function options()
		{
			$mod = $_GET['mod'];
			$model = $_GET['model'];
			if ($mod == '') $mod = 'settings';

			if($mod == 'settings')
			{
				$options = VWvideoPosts::getAdminOptions();

				$optionsDefault = VWvideoPosts::adminOptionsDefault();

				//var_dump($options);
				if (isset($_POST))
				{

					foreach ($options as $key => $value)
						if (isset($_POST[$key])) $options[$key] = $_POST[$key];

						update_option('VWvideoRecorderOptions', $options);
				}


				$active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'server';

?>
<div class="wrap">
<div id="icon-options-general" class="icon32"><br></div>
<h2>Video Posts Webcam Recorder Settings</h2>
</div>

<p><h4>&gt; Settings |
<a href = "<?php echo home_url();?>/wp-admin/options-general.php?page=videoposts.php&mod=recordings">Recordings List </a></h4> </p>

<h2 class="nav-tab-wrapper">
	<a href="options-general.php?page=videoposts.php&mod=settings&tab=server" class="nav-tab <?php echo $active_tab=='server'?'nav-tab-active':'';?>">Server</a>
	<a href="options-general.php?page=videoposts.php&mod=settings&tab=recorder" class="nav-tab <?php echo $active_tab=='recorder'?'nav-tab-active':'';?>">Recorder</a>
	<a href="options-general.php?page=videoposts.php&mod=settings&tab=player" class="nav-tab <?php echo $active_tab=='player'?'nav-tab-active':'';?>">Player</a>

</h2>



<form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">

<?php


				switch ($active_tab)
				{
				case 'server':
?>
<h2>Server Settings</h2>

<h4>RTMP Address</h4>
<p>To run this, make sure your hosting environment meets all <a href="http://www.videowhisper.com/?p=Requirements" target="_blank">requirements</a>.  If you don't have a videowhisper rtmp address yet (from a managed rtmp host), go to <a href="http://www.videowhisper.com/?p=RTMP+Applications" target="_blank">RTMP Application   Setup</a> for  installation details.</p>
<input name="rtmp_server" type="text" id="rtmp_server" size="80" maxlength="256" value="<?php echo $options['rtmp_server']?>"/>
<p>For video recordings we recommend <a href="http://www.videowhisper.com/?p=Wowza+Media+Server+Hosting">Wowza RTMP hosting</a>. To enable HTML5 playback, web server with ffmpeg support must be on same physical server as RTMP so scripts have access to video files saved by streaming server.</p>


<h4>Recording Container</h4>
<select name="recordContainer" id="recordContainer">
  <option value="flv" <?php echo $options['recordContainer']=='flv'?"selected":""?>>FLV</option>
  <option value="-" <?php echo $options['recordContainer']=='-'?"selected":""?>>Default</option>
</select>
<BR>Force FLV for Wowza and default for Red5. RTMP server should be configured to use FLV container as that supports the flash codecs. MP4 can't be used because it requires AAC audio (not available with Flash encoder) and will result in mute video.

<h4> Conversion tools for HTML5 playback: </h4>
	<?php

					$ffmpegdetected = 0;


					echo "<table><tr><td> ffmpeg: </td>";
					$cmd =$options['ffmpegPath'] ." -codecs";
					exec($cmd, $output, $returnvalue);
					if ($returnvalue == 127)  echo "<td><font color='red'> &nbsp &nbsp &nbsp &nbsp  Not detected: $cmd</font></td></tr>"; else
					{
						echo "<td><font color='green'> &nbsp &nbsp &nbsp &nbsp  Detected </font></td></tr>";
						$ffmpegdetected = 1;
					}

					//detect codecs
					if ($output) if (count($output))
							foreach (array('h264','vp6','speex','nellymoser', 'fdk_aac', 'faac') as $cod)
							{
								$det=0; $outd="";
								echo "<tr><td> $cod : </td>";
								foreach ($output as $outp) if (strstr($outp,$cod)) { $det=1; $outd=$outp; };
								if ($det) echo "<td><font color='green'> &nbsp &nbsp &nbsp &nbsp  Detected ($outd)</font></td></tr>"; else echo "<td><font color='red'> &nbsp &nbsp &nbsp &nbsp  Missing: please configure and install ffmpeg with lib$cod if you don't have another library for that codec</font></td></tr>";
							}

						echo "<tr><td> ffmpeg2theora: </td> ";
					$cmd ="/usr/local/bin/ffmpeg2theora";
					echo exec($cmd, $output, $returnvalue);
					if ($returnvalue == 127)  echo "<td><font color='red'> &nbsp &nbsp &nbsp &nbsp  Not detected: $cmd</font></td></tr>"; else echo "<td><font color='green'> &nbsp &nbsp  &nbsp &nbsp Detected</font></td></tr>";
					echo "</table>";

?>
<BR>You need only 1 AAC encoder. Depending on <a href="https://trac.ffmpeg.org/wiki/Encode/AAC#libfaac">AAC library available on your system</a> you may need to update transcoding parameters. Latest FFMPEG also includes a native encoder (aac).

<h4>FFMPEG Path</h4>
<input name="ffmpegPath" type="text" id="ffmpegPath" size="100" maxlength="256" value="<?php echo $options['ffmpegPath']?>"/>

<h4>FFMPEG Conversion</h4>
<input name="ffmpegConvert" type="text" id="ffmpegConvert" size="100" maxlength="256" value="<?php echo $options['ffmpegConvert']?>"/> $output_file -i $input_file
<p>If ffmpeg is available use these to update parameters as needed for conversion.</p>
<BR>For lower server load and higher performance, web clients should be configured to broadcast video already suitable for target device (H.264 Baseline 3.1 for most iOS devices) so only audio needs to be encoded.

<BR>Ex.(convert audio for iOS using latest FFMPEG with libfdk_aac): -c:v copy -c:a libfdk_aac -b:a 96k
<BR>Ex.(convert audio for iOS using latest FFMPEG with native aac): -c:v copy -c:a aac -b:a 96k
<BR>Ex.(convert audio for iOS using older FFMPEG with libfaac): -vcodec copy -acodec libfaac -ac 2 -ar 22050 -ab 96k

<BR>Ex.(convert video+audio with older FFMPEG): /usr/local/bin/ffmpeg -y -vcodec libx264 -s 480x360 -r 15 -vb 512k -x264opts vbv-maxrate=364:qpmin=4:ref=4 -coder 0 -bf 0 -analyzeduration 0 -level 3.1 -g 30 -maxrate 768k -acodec libfaac -ac 2 -ar 22050 -ab 96k
<BR>For advanced settings see <a href="https://developer.apple.com/library/ios/technotes/tn2224/_index.html#//apple_ref/doc/uid/DTS40009745-CH1-SETTINGSFILES">iOS HLS Supported Codecs<a> and <a href="https://trac.ffmpeg.org/wiki/Encode/AAC">FFMPEG AAC Encoding Guide</a>.

<br>This is not used when videos are managed by VideoShareVOD (recommended).

<h4>Videos Path on Server</h4>
<input name="directory" type="text" id="directory" size="80" maxlength="256" value="<?php echo $options['directory']?>"/>
<BR>
Example: /home/youraccount/public_html/streams/
<BR>Path where your rtmp server and app were <a href="http://www.videowhisper.com/?p=RTMP+Applications#settings
">configured</a> to save streams. Configure an absolute path accessible by web scripts.
<BR>Conversions and script access to videos, requires RTMP and HTTP to be hosted on same physical server, in same file system. We recommend <a href="http://www.videowhisper.com/?p=Wowza+Media+Server+Hosting">Wowza RTMP hosting</a> that provides both web and streaming servers on same file system.
<BR>This location will also be used for conversions, conversion logs unless VideoShareVOD is used (that has own settings).

<h4>Videos URL</h4>
<input name="videos_url" type="text" id="videos_url" size="80" maxlength="256" value="<?php echo $options['videos_url']?>"/>
<BR>
Example: http://yourserver.com/streams/

<h4><?php _e('Uploads Path','video-share-vod'); ?></h4>
<input name="uploadsPath" type="text" id="uploadsPath" size="100" maxlength="256" value="<?php echo $options['uploadsPath']?>"/>
<BR>For other data. Not currently in use.
<?php
					break;

				case 'player':

					$detectedp['jwplayer'] = 0;
					$detectedp['videosharevod'] = 0;
					if (is_plugin_active('jw-player-plugin-for-wordpress/jwplayermodule.php')) $detectedp['jwplayer'] = 1;
					if (is_plugin_active('video-share-vod/video-share-vod.php')) $detectedp['videosharevod'] = 1;

?>
	<h2>Player Settings</h2>
Configure playback options.
	<h4>Select Player</h4>
	<select name='selectPlayer' id='selectPlayer'>

	<?php
					if ($detectedp[videosharevod]) {
?>
	<option value='videosharevod' <?php echo $options['selectPlayer'] == 'videosharevod'?"selected":""?>>Video Share VOD</option>
	<?php
					}
?>
	<option value='vwplayer' <?php echo $options['selectPlayer'] == 'vwplayer'?"selected":""?>>VideoWhisper</option>
	<?php
					if ($detectedp[jwplayer]) {
?>
	<option value='jwplayer' <?php echo $options['selectPlayer'] == 'jwplayer'?"selected":""?>>JwPlayer</option>
	<?php
					}
					if ($ffmpegdetected == 1)
					{
?>
	<option value='ffmpeg' <?php echo $options['selectPlayer'] == 'ffmpeg'?"selected":""?>>HTML5</option>
	<?php
					}
?>
	</select>
	<p>Video Share VOD (recommended):
		<?php
					if ($detectedp['videosharevod']) {
						echo "Detected";
					}
					else{
						echo "Not Detected.";
					}
?>
<br>Video Share VOD is a free open source solution to manage videos and  setup video sharing / video on demand (VOD) features on WordPress. Includes multiple options and players.
<br>For more details see <a href='http://videosharevod.com/' target='_blank'>VideoShareVOD Home Site</a> and <a href='http://wordpress.org/plugins/video-share-vod/' target='_blank'>VideoShareVOD on WordPress</a>.</p>
	<p>JwPlayer:
		<?php
					if ($detectedp['jwplayer']) {
						echo "Detected";
					}
					else{
						echo"<a href='http://wordpress.org/extend/plugins/jw-player-plugin-for-wordpress/' target='_blank'> Not Detected </a>";
					}
					?></p>

<h4>Shortcode</h4>
[videowhisper stream="stream name"] - Displays video using configured player.

<h4>Embed Mode in Post</h4>
<select name="embedMode" id="embedMode">
  <option value="0" <?php echo $options['embedMode']?"":"selected"?>>Direct mode</option>
  <option value="1" <?php echo $options['embedMode']?"selected":""?>>Shortcode mode</option>
</select>

<h4>Embed Width</h4>
<input name="embedWidth" type="text" id="embedWidth" size="5" maxlength="5" value="<?php echo $options['embedWidth']?>"/>
<BR>Specify px or %.

<h4>Embed Height</h4>
<input name="embedHeight" type="text" id="embedHeight" size="5" maxlength="5" value="<?php echo $options['embedHeight']?>"/>
<BR>Specify px or %.

<h4>Autoplay</h4>
<select name="autoplay" id="autoplay">
  <option value="false" <?php echo $options['autoplay']?"":"selected"?>>Off</option>
  <option value="true" <?php echo $options['autoplay']?"selected":""?>>On</option>
</select>

<h4>Show VideoWhisper Powered by</h4>
<select name="videowhisper" id="videowhisper">
  <option value="0" <?php echo $options['videowhisper']?"":"selected"?>>No</option>
  <option value="1" <?php echo $options['videowhisper']?"selected":""?>>Yes</option>
</select>
	<?php
					break;

				case 'recorder':

					$options['layoutCode'] = htmlentities(stripslashes($options['layoutCode']));
					$options['parameters'] = htmlentities(stripslashes($options['parameters']));
					$options['parametersSync'] = htmlentities(stripslashes($options['parametersSync']));
					$options['finishedMessage'] = htmlentities(stripslashes($options['finishedMessage']));

					$options['playSyncButton'] = htmlentities(stripslashes($options['playSyncButton']));




?>
<h2>Recorder Application</h2>
Can be shown as post content plugin or with shortcode on any page (resulting videos are managed with VideoShareVOD plugin).
<h4>Shortcode</h4>
[videowhisper_recorder height="550px" category=""] - Displays video recording interface on a page. Uses VideoShareVOD video sharing permissions if enabled.
<
br>[videowhisper_recorder youtube_sync="video id" default_name="" category=""] - Displays video recorder and also an Youtube video that plays while recording (great for video interviews, questionnaires, karaoke, live reactions).
Default name is used when visitors are allowed to record, for recording name - when not provided, is generated.

<br>[videowhisper_recorder vimeo_sync="video id" default_name="" category=""] - Displays video recorder and also an Vimeo video that plays while recording (great for video interviews, questionnaires, karaoke, live reactions).
Default name is used when visitors are allowed to record, for recording name - when not provided, is generated.

<h4>Clean Page Embed</h4>
Load recorder on a clean page, without theme or other elements, for easy embedding.
<BR>URLs:<BR>
<?php
					$ajaxurl = admin_url() . 'admin-ajax.php?action=vpwr_recorder&name=&youtube_sync=';
					echo $ajaxurl . '[YouTube Video ID]&category=[Site Category]<BR>';
					
					$ajaxurlV = admin_url() . 'admin-ajax.php?action=vpwr_recorder&name=&vimeo_sync=';
					echo $ajaxurlV . '[Vimeo Video ID]&category=[Site Category]<BR>';
?>
<BR>Sample Youtube IFRAME embed:
<BR><textarea readonly cols="100" rows="2"><IFRAME SRC="<?php echo $ajaxurl?>oifAEZJYKvI&category=Recordings" allowfullscreen webkitallowfullscreen mozallowfullscreen allow="microphone; camera"/></textarea>
<BR>Sample Vimeo IFRAME embed:
<BR><textarea readonly cols="100" rows="2"><IFRAME SRC="<?php echo $ajaxurlV?>264833805&category=Recordings" allowfullscreen webkitallowfullscreen mozallowfullscreen allow="microphone; camera"/></textarea>

<BR>See <a href="https://sites.google.com/a/chromium.org/dev/Home/chromium-security/deprecating-permissions-in-cross-origin-iframes">Chrome Cross-Origin Permissions</a>.

<h4>Who can record video</h4>
<select name="canRecord" id="canRecord">
  <option value="all" <?php echo $options['canRecord']=='all'?"selected":""?>>Anybody (including visitors)</option>
  <option value="members" <?php echo $options['canRecord']=='members'?"selected":""?>>All Members</option>
  <option value="list" <?php echo $options['canRecord']=='list'?"selected":""?>>Members in List</option>
</select>
<BR>When using VideoShareVOD, these must match video share settings (because user also needs to be able to share videos to get recording published). To enable recording for site visitors, video sharing should be enabled for "Guest" in VideoShareVOD settings.

<h4>Members allowed to record video (comma separated usernames-logins, roles, IDs)</h4>
<textarea name="recordList" cols="100" rows="3" id="recordList"><?php echo $options['recordList']?>
</textarea>
<BR>Add "Guest" or "All" to enable site visitors to access video recorder.

<h4>Webcam Width</h4>
<input name="camWidth" type="text" id="camWidth" size="5" maxlength="5" value="<?php echo $options['camWidth']?>"/>px

<h4>Webcam Height</h4>
<input name="camHeight" type="text" id="camHeight" size="5" maxlength="5" value="<?php echo $options['camHeight']?>"/>px

<h4>Cam FPS</h4>
<input name="camFPS" type="text" id="camFPS" size="5" maxlength="5" value="<?php echo $options['camFPS']?>"/>

<h4>Video Codec</h4>
<select name="videoCodec" id="videoCodec">
  <option value="H264" <?php echo $options['videoCodec']=='H264'?"selected":""?>>H264</option>
  <option value="H263" <?php echo $options['videoCodec']=='H263'?"selected":""?>>H263</option>
</select>
<BR>H264 provides better quality at same bandwidth but may not be supported by older RTMP server versions (ex. Red5).
<BR>When publishing to iOS with HLS, for lower server load and higher performance, web clients should be configured to broadcast video suitable for target device (H.264 Baseline 3.1) so only audio needs to be encoded.


<h4>H264 Video Codec Profile</h4>
<select name="codecProfile" id="codecProfile">
  <option value="main" <?php echo $options['codecProfile']=='main'?"selected":""?>>main</option>
  <option value="baseline" <?php echo $options['codecProfile']=='baseline'?"selected":""?>>baseline</option>
</select>
<br>Recommended: Baseline

<h4>H264 Video Codec Level</h4>
<select name="codecLevel" id="codecLevel">
<?php
					foreach (array('1', '1b', '1.1', '1.2', '1.3', '2', '2.1', '2.2', '3', '3.1', '3.2', '4', '4.1', '4.2', '5', '5.1') as $optItm)
					{
?>
  <option value="<?php echo $optItm;?>" <?php echo $options['codecLevel']==$optItm?"selected":""?>> <?php echo $optItm;?> </option>
  <?php
					}
?>
 </select>
<br>Recommended: 3.1

<h4>Sound Codec</h4>
<select name="soundCodec" id="soundCodec">
  <option value="Speex" <?php echo $options['soundCodec']=='Speex'?"selected":""?>>Speex</option>
  <option value="Nellymoser" <?php echo $options['soundCodec']=='Nellymoser'?"selected":""?>>Nellymoser</option>
</select>
<BR>Current web codecs used by Flash plugin are not currently supported by iOS. For delivery to iOS, audio should be transcoded to AAC (HE-AAC or AAC-LC up to 48 kHz, stereo audio).

<h4>Speex Sound Quality</h4>
<select name="soundQuality" id="soundQuality">
<?php
					foreach (array('0', '1','2','3','4','5','6','7','8','9','10') as $optItm)
					{
?>
  <option value="<?php echo $optItm;?>" <?php echo $options['soundQuality']==$optItm?"selected":""?>> <?php echo $optItm;?> </option>
  <?php
					}
?>
 </select>

<h4>Nellymoser Sound Rate</h4>
<select name="micRate" id="micRate">
<?php
					foreach (array('5', '8', '11', '22','44') as $optItm)
					{
?>
  <option value="<?php echo $optItm;?>" <?php echo $options['micRate']==$optItm?"selected":""?>> <?php echo $optItm;?> </option>
  <?php
					}
?>
 </select>



<h4>Cam Bandwidth</h4>
<input name="camBandwidth" type="text" id="camBandwidth" size="8" maxlength="8" value="<?php echo $options['camBandwidth']?>"/>

<h4>Cam Max Bandwidth</h4>
<input name="camMaxBandwidth" type="text" id="camMaxBandwidth" size="8" maxlength="8" value="<?php echo $options['camMaxBandwidth']?>"/>

<h4>Show Cam Settings</h4>
<select name="showCamSettings" id="showCamSettings">
  <option value="0" <?php echo $options['showCamSettings']?"":"selected"?>>No</option>
  <option value="1" <?php echo $options['showCamSettings']?"selected":""?>>Yes</option>
</select>

<h4>Advanced Cam Settings</h4>
<select name="advancedCamSettings" id="advancedCamSettings">
  <option value="0" <?php echo $options['advancedCamSettings']?"":"selected"?>>No</option>
  <option value="1" <?php echo $options['advancedCamSettings']?"selected":""?>>Yes</option>
</select>

<h4>Disable Preview</h4>
<select name="disablePreview" id="disablePreview">
  <option value="0" <?php echo $options['disablePreview']?"":"selected"?>>No</option>
  <option value="1" <?php echo $options['disablePreview']?"selected":""?>>Yes</option>
</select>

<h4>Extra Parameters</h4>
<textarea name="parameters" type="textarea" cols="100" rows="3" id="parameters">
<?php echo $options['parameters'];?>
</textarea>
<BR>Default: <br><textarea readonly cols="100" rows="2"><?php echo htmlspecialchars(stripslashes($optionsDefault['parameters']));?></textarea>
<BR>For more details about possible parameters see <a href="http://www.videowhisper.com/?p=PHP+Video+Recorder+Script#integrate">php edition documentation</a>.

<h4>Extra Parameters for Sync Mode</h4>
<textarea name="parametersSync" type="textarea" cols="100" rows="3" id="parametersSync">
<?php echo $options['parametersSync'];?>
</textarea>
<BR>Default: <br><textarea readonly cols="100" rows="2"><?php echo htmlspecialchars(stripslashes($optionsDefault['parametersSync']));?></textarea>

<h4>Sync Play Button Text</h4>
<input name="playSyncButton" type="text" id="playSyncButton" size="50" maxlength="255" value="<?php echo $options['playSyncButton']?>"/>
<br>Text on sync play button. Play button triggers video playback fullscreen and also recording.


<h4>Sync Mode Instructions</h4>
<textarea name="syncInstructions" type="textarea" cols="100" rows="3" id="parametersSync">
<?php echo $options['syncInstructions'];?>
</textarea>
<BR>Default: <br><textarea readonly cols="100" rows="2"><?php echo htmlspecialchars(stripslashes($optionsDefault['syncInstructions']));?></textarea>
<BR>Shows under video recorder.

<h4>Layout Code</h4>
<textarea name="layoutCode" type="textarea" cols="100" rows="3" id="layoutCode">
<?php echo $options['layoutCode'];?>
</textarea>
<br>To generate layout add &layoutToClipboard=1 parameter to extra parameters. Copies layout code to clipboard when media panel (preview) is right clicked.

<h4>Fill Window</h4>
<select name="fillWindow" id="fillWindow">
  <option value="0" <?php echo $options['fillWindow']?"":"selected"?>>No</option>
  <option value="1" <?php echo $options['fillWindow']?"selected":""?>>Yes</option>
</select>

<h4>Record Limit</h4>
<input name="recordLimit" type="text" id="recordLimit" size="5" maxlength="5" value="<?php echo $options['recordLimit']?>"/>s
<br>Maximum recording duration in seconds. In free mode there's a maximum time limit (usually 5 min) and any higher value for this setting is ignored.


<h4>Finished Message</h4>
<textarea name="finishedMessage" type="textarea" cols="100" rows="3" id="finishedMessage">
<?php echo $options['finishedMessage'];?>
</textarea>
<BR>A message to show after stand alone recording (not when inserting into posts from editor). This message will show without site theme. Leaving this blank will redirect to main site page.
			<?php
					break;
				}
?>

<?php
				submit_button(); ?>


</form>
	 <?php
			}


			if($mod == 'recordings')
			{
				if($model == "delete")
				{
					// sterg alea si afisez un msg
					$recs = $_POST['recs'];

					//$options = get_option('VWvideoRecorderOptions');
					$delete_from = $options['directory'];

					$loggedin=0;
					global $current_user;
					get_currentuserinfo();
					if ($current_user->user_nicename) $username=urlencode($current_user->user_nicename);

					if ($username) $loggedin=1;
					else
					{
						echo "<BR>";
						echo "<p aling='center'><h4>Only admin can access this page!</h4></p>";
					}
					if($loggedin == 1)
					{
						global $wpdb;
						$table_name = $wpdb->prefix."vw_videorecordings";

						if($recs){
							foreach ($recs as $rec)
							{
								$wpdb->query($sql = "DELETE FROM $table_name WHERE streamname = '$rec' ");
								//echo $sql;

								if (file_exists($file = $delete_from . $rec  . ".flv")) unlink($file);

								if (file_exists($file = $delete_from . $rec  . ".key")) unlink($file);

								if (file_exists($file = $delete_from . $rec  . ".meta")) unlink($file);

								if (file_exists($file = "recordings/" . $rec  . ".vwr")) unlink($file);

								if (file_exists($file = $delete_from . $rec  . "-ip.mp4")) unlink($file);
								if (file_exists($file = $delete_from . $rec  . ".log")) unlink($file);
								if (file_exists($file = $delete_from . $rec  . ".ogv")) unlink($file);
								if (file_exists($file = $delete_from . $rec  . "-ogv.log")) unlink($file);

								if (file_exists($file = "snapshots/" . $rec  . ".jpg")) unlink($file);

							}
							echo "<BR><BR>";
							echo "The files were successfully deleted!";

							echo "This deletes only the video recordings. You will have to  manually edit the post to remove embed code and references. ";
							echo "<BR><BR>";
						}
					}
					//var_dump($recs);
				}
?>

			<div class="wrap">
			<div id="icon-options-general" class="icon32"><br></div>
			<h2>Video Posts Recordings list</h2>
			<p><h4><a href = "<?php echo home_url();?>/wp-admin/options-general.php?page=videoposts.php&mod=settings">Settings</a> |
 &gt; Recordings List</h4> </p>
			</div>

			<?php

				$streamname = $_GET['stream'];

				global $wpdb;
				$table_name = $wpdb->prefix."vw_videorecordings";
				$items =  $wpdb->get_results("SELECT * FROM `$table_name` ORDER BY `id` DESC");

?>


			<script language="javascript">
			function fncDelete()
			{
				if(confirm('Are you sure you want to delete videos?')==true)
				{
					//window.location = 'page1.cgi';
					// $.cookie('deleted', deleted );
					//form.inputdelete.value = 1;
					form.submit();
				}
			}
			</script>


			<script language="JavaScript">
			function checkUncheck(form, setTo) {
				var c = document.getElementById(form).getElementsByTagName('input');
				for (var i = 0; i < c.length; i++) {
					if (c[i].type == 'checkbox') {
						c[i].checked = setTo;
					}
				}
			}

			</script>

			<form id = "myForm" name = "form" action="<?php echo home_url(); ?>/wp-admin/options-general.php?page=videoposts.php&mod=recordings&model=delete" method="post">
			<input type='button' onclick="checkUncheck('myForm', true);" value='Check All'>&nbsp;&nbsp;
			<input type='button' onclick="checkUncheck('myForm', false);" value='Uncheck All'><br><br><?php

				echo "<table>";
				if ($items) foreach ($items as $item)
					{
						echo "<tr>";
						echo "<td valign='center'>";
?>
				<input type="checkbox" id="recs[]" name="recs[]" value="<?php echo $item->streamname; ?>">
				<?php
						echo "</td><td>";
						echo "<a href='".home_url().'/wp-content/plugins/video-posts-webcam-recorder/posts/videowhisper/streamplay.php?vid='.$item->streamname."' target='_blank'>";

						if(file_exists('../'.$file = 'wp-content/plugins/video-posts-webcam-recorder/posts/videowhisper/snapshots/'.$item->streamname.'.jpg'))
						{
							echo "<img src='".home_url().'/'.$file."'>";
						}
						else
						{
							echo "<img src='".home_url().'/wp-content/plugins/video-posts-webcam-recorder/posts/videowhisper/snapshots/no_video.png'."'>";
						}
						echo "</a>";
						echo "</td>";
						echo "<td>";
						echo "<a href= '".home_url().'/wp-content/plugins/video-posts-webcam-recorder/posts/videowhisper/streamplay.php?vid='.$item->streamname.'&postid='.$item->postId."' target='_blank'><B>".$item->streamname."</B></a>";
						echo "<BR>";
						echo "<a href='".home_url().'/wp-content/plugins/video-posts-webcam-recorder/posts/videowhisper/recorded.php?stream='.$item->streamname."&mod=regenerate' target='_blank'>Regenerate HTML5 Conversion</a>";
						echo "<BR>";
						echo "<a href='".home_url().'?p='.$item->postId."' target='_blank'><B> View Post </B></a>";

						//echo " <BR> ";
						//echo "<a href=".home_url().'/wp-content/plugins/video-posts-webcam-recorder/posts/videowhisper/recorded_videos.php?delete='. urlencode($item->streamname).'&postid='.$item->postId." target='_blank'><B> Delete this Recording </B></a>";
						echo " <BR> ";
						echo date("D M j G:i:s T Y",$item->time);
						echo " <BR> ";
						echo "User id: ".$item->userId;
						echo "</td>";
						echo "</tr>";
					}
				echo "</table>";
?>
			<INPUT onClick="JavaScript:fncDelete(this.form);"  type="button" value="Delete" id="delete" name="delete">
			  </form>
			<?php

			}
		}
	}
}
//instantiate
if (class_exists("VWvideoPosts")) {
	$videoPosts = new VWvideoPosts();
}

//Actions and Filters
if (isset($videoPosts)) {
	add_action("plugins_loaded", array(&$videoPosts, 'init'));
	add_action('admin_menu', array(&$videoPosts, 'menu'));
}
?>