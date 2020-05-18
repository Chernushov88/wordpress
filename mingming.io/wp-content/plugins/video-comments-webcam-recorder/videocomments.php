<?php
/*
Plugin Name: Video Comments Webcam Recorder
Plugin URI: https://videowhisper.com/?p=WordPress+Video+Recorder
Description:  <strong>Video Comments Webcam Recorder</strong> enables site users to insert webcam recorded videos into their comments. Integrates with <a href='https://videosharevod.com'>VideoShareVOD plugin</a> for advanced video management, multiple players and settings. <a href='https://videowhisper.com/?p=Requirements'>Hosting Requirements</a> | <a href='https://videowhisper.com/?p=Wowza+Media+Server+Hosting#features'>Turnkey Hosting</a> | <a href='https://videowhisper.com/tickets_submit.php'>Support</a>
Version: 1.92.8
Author: VideoWhisper.com
Author URI: https://videowhisper.com/
Contributors: videowhisper, VideoWhisper.com
*/

function comment_record() {

	$options = get_option('VWvideoComRecorderOptions');
	$buttonCode = stripslashes($options['buttonCode']);
	$home =  home_url();
	$buttonCode = str_replace("_url_",$home,$buttonCode);

	echo $buttonCode;
	/*?><a href = "_url_/wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/videorecorder.php" target = "blank"><img style="vertical-align: middle;" src ="_url_/wp-content/plugins/video-comments-webcam-recorder/comments/img/recorder.png" />
	Insert Video </a><BR><small>Record webcam video and embed it in your comment. Log in required to use this feature.</small><BR><BR><?php*/

}
function postId_comment( $comment_id  ) {

	$recCookie = $_COOKIE["recIdCookie"];
	//$post_id = $_COOKIE["postIdCookie"];

	$comment = get_comment( $comment_id, ARRAY_A );
	$post_id = $comment['comment_post_ID'];

	global $wpdb;
	$table_name = $wpdb->prefix."vw_videocomrecordings";

	$sql="UPDATE $table_name SET postId = '$post_id', commentId = '$comment_id' WHERE id = '$recCookie' AND postId = '0'";

	$wpdb->query($sql);

}
add_action('comment_form_top', 'comment_record');
add_action('comment_post', 'postId_comment');

if (!class_exists("VWvideoComments"))
{
	class VWvideoComments {

		function VWvideoComments() { //constructor

		}
		function com_settings_link($links) {
			$com_settings_link = '<a href="options-general.php?page=videocomments&mod=settings">'.__("Settings").'</a>';
			array_unshift($links, $com_settings_link);
			return $links;
		}
		function com_recordings_link($links) {
			$com_recordings_link = '<a href="options-general.php?page=videocomments&mod=recordings">'.__("Recordings").'</a>';
			array_unshift($links, $com_recordings_link);
			return $links;
		}

		function com_shortcode($content)
		{
			$options = get_option('VWvideoComRecorderOptions');

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

			$poweredby = '<div style=\'display: ' . $state . ';\'><i><small>Powered by <a href=\'http://www.videowhisper.com\'  target=\'_blank\'>VideoWhisper Webcam Scripts</a>, <a href=\'http://videowhisper.com/?p=WordPress+Video+Recorder+Posts+Comments\'  target=\'_blank\'>WP Video Recorder</a>.</small></i></div>';


			preg_match_all("/\[videowhisper stream=[\"”″']([a-zA-Z0-9_\-\s]*)[\"”″']\]/i", $content, $matches);
			if (!count($matches[0])) preg_match_all("/\[videowhisper stream=&#8221;([a-zA-Z0-9_\-\s]*)&#8243;\]/i", $content, $matches);
			if (!count($matches[0])) preg_match_all("/\[videowhisper stream=&quot;([a-zA-Z0-9_\-\s]*)&quot;\]/i", $content, $matches);


			//var_dump($matches);
			$result = $content;
			//echo $content;

			for( $i=0; $i<count($matches[0]);$i++)
			{
				$home = home_url();
				$streamname = $matches[1][$i];
				switch($player)
				{
				case 'vwplayer':
					$playercode = <<<EOD
<u>$streamname</u><div  style='width:${embedWidth}px; height:${embedHeight}px'><object height="100%" width="100%"><param name="movie" value=" $home/wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/streamplayer.swf?streamName=$streamname&amp;serverRTMP=$rtmp_server&amp;templateURL=\"><param name="scale" value="noscale"><param name="salign" value="lt"><param name="base" value="$home/wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><embed base="$home/wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/"  scale="noscale" salign="lt" src=" $home/wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/streamplayer.swf?streamName=$streamname&amp;serverRTMP=$rtmp_server&amp;templateURL=" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" height="${embedHeight}px" width="${embedWidth}px"></object></div>$poweredby
EOD;

					break;

				case 'strobe-rtmp':

					$image = file_exists("wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/snapshots/$streamname.jpg")?$home."/wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/snapshots/$streamname.jpg":$home."/wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/snapshots/no_video.png";


					$player_url = plugin_dir_url(__FILE__) . 'strobe/StrobeMediaPlayback.swf';
					$flashvars ='src=' . $rtmp_server . urlencode('/' . $streamname ). '&autoPlay='.$autoplay . '&poster=' . urlencode($image);

					$playercode = '<object class="videoPlayer" width="'.$embedWidth.'" height="'.$embedHeight.'" type="application/x-shockwave-flash" data="' . $player_url . '"> <param name="movie" value="' . $player_url . '" /><param name="flashvars" value="' .$flashvars . '" /><param name="allowFullScreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="wmode" value="direct" /></object>' . $poweredby;

					break;


				case 'jwplayer':
					$image = file_exists("wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/snapshots/$streamname.jpg")?$home."/wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/snapshots/$streamname.jpg":$home."/wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/snapshots/no_video.png";
					$playercode = <<<EOD
<u>$streamname</u><div id='jwplayer1' style='width: ${embedWidth}px; height: ${embedHeight}px'><script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js'></script><script type='text/javascript'>var flashvars = { file: '$streamname', streamer: '$rtmp_server', autostart: '$autoplay',width: '${embedWidth}px', height: '${embedHeight}px', type: 'rtmp', image: '$image' }; swfobject.embedSWF('$home/wp-content/uploads/jw-player-plugin-for-wordpress/player/player.swf','jwplayer1','$embedWidth px','$embedHeight px','9','false', flashvars,  {allowfullscreen:'true',allowscriptaccess:'always'},   {id:'jwplayer',name:'jwplayer'}  );</script></div>$poweredby
EOD;
					break;

					if ($autoplay) $apCode = 'autoplay'; else $apCode = '';

				case 'ffmpeg':
					if (file_exists($output_file = $videosPath . $streamname  . "-ip.mp4"))
					{
						//echo $videosPath.$streams_url;
						$play_url = $streams_url . $streamname  . "-ip.mp4";
						$play_urlw = $streams_url . $streamname  . ".ogv";
						$playercode = <<<EOD
<video width='${embedWidth}px' height='${embedHeight}px'  autobuffer $apCode controls='controls'><source src='$play_url' type='video/mp4'><source src='$play_urlw' type='video/ogg'>You must have an HTML5 capable browser.</video>$poweredby
EOD;
					}
					break;
				}

				$result = str_replace($matches[0][$i],$playercode,$result);

			}

			return $result;
		}

		function init()
		{

			//buddypress
			if (!is_user_logged_in()) return;

			global $bp;

			if (!$bp) return;
			if (!function_exists('bp_is_activity_component')) return;

			$show_condition = (bool)(
				// Load the scripts on Activity pages
				(defined('BP_ACTIVITY_SLUG') && bp_is_activity_component())
				||
				// Load the scripts when Activity page is the Home page
				(defined('BP_ACTIVITY_SLUG') && 'page' == get_option('show_on_front') && is_front_page() && BP_ACTIVITY_SLUG == get_option('page_on_front'))
				||
				// Load the script on Group home page
				(defined('BP_GROUPS_SLUG') && bp_is_groups_component() && 'home' == $bp->current_action)
			);

			if ($show_condition)  add_action('wp_enqueue_scripts', array($this, 'wp_enqueue_scripts')); //for BP


		}




		function custom_activity_excerpt_read_more( $excerpt, $text, $append_text ) {
			// Manage the excerpt length
			$excerpt_length = 1000;
			// Manage the appended string for truncated excerpts so we have a link to single activity
			$append_text = '&hellip;';
			// Manage the initial text run through the bp create excerpt filter  to remove 'ending'
			$excerpt = bp_create_excerpt( $text, $excerpt_length, array( 'ending' => __( '', 'buddypress' ) , 'html'=>false, 'filter_shortcodes'=>false ));
			// Manage the excerpt  appended displayed markup & rename the span class 'activity-read-more' to disable Ajax hook
			$excerpt = sprintf( '%1$s<span class="custom-activity-read-more" id="%2$s"><a href="%3$s" rel="nofollow">%4$s</a></span>', $excerpt, $id, bp_get_activity_thread_permalink(), $append_text );
			return $excerpt;
		}

		// Enable Shortcodes for Side-wide Activity Stream !!!
		function bp_init() {
			$options = get_option('VWvideoComRecorderOptions');

			if (!$options['buddypress']) return;

			add_filter('bp_activity_truncate_entry',  array($this,'custom_activity_excerpt_read_more'), 0, 3);

		//	add_filter( 'bp_get_activity_content_body', array($this, 'bp_get_activity_content_body'), 0);

		}

/*
function bp_get_activity_content_body($content)
{
	//return $content;

	//remove slashes to fix parameters
	return do_shortcode(stripslashes($content));
}
*/

		function wp_enqueue_scripts()
		{

			wp_enqueue_script('jquery');
			add_action( 'wp_footer', array('VWvideoComments','bp_script') );

		}

		function bp_script()
		{
?>
<script type="text/javascript">
(function($){
$(function() {

var $form;
var $text;
var $textContainer;

function addCode () {
	var html = '<a href="<?php echo plugin_dir_url(__FILE__) ?>comments/videowhisper2/videorecorder.php" target="blank"><img style="vertical-align: middle;" src="<?php echo plugin_dir_url(__FILE__) ?>comments/img/recorder.png">Insert Video</a>';
	$textContainer.after(html);
}


function init () {
	$form = $("#whats-new-form");
	$text = $form.find('textarea[name="whats-new"]');
	$textContainer = $form.find('#whats-new-textarea');
	addCode ();
}

if ($("#whats-new-form").is(":visible")) init();

});
})(jQuery);
</script>
<?php
		}

		function plugins_loaded()
		{
			$plugin = plugin_basename(__FILE__);
			add_filter("plugin_action_links_$plugin",  array('VWvideoComments','com_settings_link') );
			add_filter("plugin_action_links_$plugin",  array('VWvideoComments','com_recordings_link') );

			wp_register_sidebar_widget('videocommentsWidget','VideoWhisper Video Comments', array('VWvideoComments', 'widget') );

			//check db
			$vw_comrecorder_version = "1.3";

			global $wpdb;
			$table_name = $wpdb->prefix."vw_videocomrecordings";

			$installed_ver = get_option( "vw_comrecorder_version" );

			if( $installed_ver != $vw_comrecorder_version )
			{
				$wpdb->flush();

				$sql = "DROP TABLE IF EXISTS `$table_name`;
			CREATE TABLE `$table_name` (
			  `id` int(11) NOT NULL auto_increment,
			  `userId` int(12)  NOT NULL,
			  `postId` int(12)  NOT NULL,
			  `commentId` int(12)  NOT NULL,
			  `streamname` varchar(64) NOT NULL,
			  `time` int(12)  NOT NULL,
			  PRIMARY KEY  (`id`)
			) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Video Whisper: Sessions - 2009@videowhisper.com' AUTO_INCREMENT=1;

			";

				require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
				dbDelta($sql);

				if (!$installed_ver)
				{
					add_option("vw_comrecorder_version", $vw_comrecorder_version);
				}
				else
				{
					update_option( "vw_comrecorder_version", $vw_comrecorder_version );
				}
				$wpdb->flush();
			}
		}

		function menu()
		{
			add_options_page('Video Comments Webcam Recorder Options', 'Video Comments', 10, basename(__FILE__), array('VWvideoComments', 'options'));
		}



		function getAdminOptions()
		{

			$home = home_url();
			$buttoncode = <<<EOD
<a href="_url_/wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/videorecorder.php" target="blank"><img style="vertical-align: middle;" src="_url_/wp-content/plugins/video-comments-webcam-recorder/comments/img/recorder.png">Insert Video </a><br><small>Record webcam video and embed it in your comment. Login is required to use this feature.</small>
EOD;
			$adminOptions = array(
				'embedMode' => 1,
				'embedWidth' => 640,
				'embedHeight' => 480,
				'autoplay' => false,
				'rtmp_server' => 'rtmp://localhost/videowhisper',
				'recordContainer' => 'flv',
				'selectPlayer' => 'strobe-rtmp',
				'camWidth' => 640,
				'camHeight' => 480,
				'camFps' => 30,
				'micRate' => 22,
				'camBandwidth' => 100000,
				'camMaxBandwidth' => 250000,
				'showCamSettings' => 1,
				'advancedCamSettings' => 1,
				'videosharevod' => 0,
				'buddypress' => 1,
				'disablePreview' => 0,
				'layoutCode' => '',
				'fillWindow' => 0,
				'recordLimit' => 600,
				'directory' => '/home/youraccount/public_html/streams/',
				'videos_url' => 'http://yourserver.com/streams/',
				'buttonCode' => $buttoncode,
				'ffmpegcall' => '/usr/local/bin/ffmpeg -y -s 480x360 -r 15 -vb 512k -vcodec libx264 -coder 0 -bf 0 -level 3.1 -g 30 -maxrate 768k -acodec libfaac -ac 2 -ar 22050 -ab 96k -x264opts vbv-maxrate=364:qpmin=4:ref=4',
				'parameters' => '&videoCodec=H264&codecProfile=main&codecLevel=3.1&soundCodec=Nellymoser&soundQuality=9&bufferLive=900&bufferFull=900&bufferLivePlayback=0.2&bufferFullPlayback=10',
				'videowhisper' => 0
			);

			$options = get_option('VWvideoComRecorderOptions');
			if (!empty($options)) {
				foreach ($options as $key => $option)
					$adminOptions[$key] = $option;
			}
			update_option('VWvideoComRecorderOptions', $adminOptions);
			return $adminOptions;
		}

		function options()
		{
			$mod = $_GET['mod'];
			$model = $_GET['model'];
			if ($mod == '') $mod = 'settings';
			if($mod == 'settings')
			{

				$options = VWvideoComments::getAdminOptions();

				if (isset($_POST))
				{
					foreach ($options as $key => $value)
						if (isset($_POST[$key])) $options[$key] = trim($_POST[$key]);
						update_option('VWvideoComRecorderOptions', $options);
				}

				$active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'server';

?>
<div class="wrap">
<?php screen_icon(); ?>
<h2>Video Comments Webcam Recorder</h2>
</div>

<H2 class="nav-tab-wrapper">
	<a class="nav-tab nav-tab-active" href="<?php echo home_url();?>/wp-admin/options-general.php?page=videocomments&mod=settings">Settings</a>
	<a class="nav-tab" href = "<?php echo home_url();?>/wp-admin/options-general.php?page=videocomments&mod=recordings">Recordings List </a>
</H2>


<h3 class="nav-tab-wrapper">
	<a href="<?php echo get_permalink(); ?>options-general.php?page=videocomments&tab=server" class="nav-tab <?php echo $active_tab=='server'?'nav-tab-active':'';?>"><?php _e('Server','video-share-vod'); ?></a>
	<a href="<?php echo get_permalink(); ?>options-general.php?page=videocomments&tab=recorder" class="nav-tab <?php echo $active_tab=='recorder'?'nav-tab-active':'';?>"><?php _e('Recorder','video-share-vod'); ?></a>
	<a href="<?php echo get_permalink(); ?>options-general.php?page=videocomments&tab=integration" class="nav-tab <?php echo $active_tab=='integration'?'nav-tab-active':'';?>"><?php _e('Integration','video-share-vod'); ?></a>

</h3>


<form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">

<?php

				switch ($active_tab)
				{

				case 'server':
?>

<h3>Server Settings</h3>


<h4>RTMP Address</h4>
<p>To run this, make sure your hosting environment meets all <a href="https://videowhisper.com/?p=Requirements" target="_blank">requirements</a>.  If you don't have a videowhisper rtmp address yet (from a managed rtmp host), go to <a href="https://videowhisper.com/?p=RTMP+Applications" target="_blank">RTMP Application   Setup</a> for  installation details. Wowza requires a specific rtmp address for the recorder.</p>
<input name="rtmp_server" type="text" id="rtmp_server" size="80" maxlength="256" value="<?php echo $options['rtmp_server']?>"/>
<br>Ex: rtmp://[rtmp-server-address]/videowhisper-record

<h4>Recording Container</h4>
<input name="recordContainer" type="text" id="recordContainer" size="4" maxlength="5" value="<?php echo $options['recordContainer']?>"/>
<br>Use "flv" on Wowza and "-" on Red5.

<h4>Videos Path</h4>
<input name="directory" type="text" id="directory" size="80" maxlength="256" value="<?php echo $options['directory']?>"/>
<BR> Example: /home/youraccount/public_html/streams/
<BR> ends with /

<?php
					$detectedp['jwplayer'] = 0;
					$detectedp['videosharevod'] = 0;

					$cmd = $options['ffmpegcall'] ." -codecs";
					exec($cmd, $output, $returnvalue);
					if ($returnvalue == 127) $ffmpegdetected = 0;
					else $ffmpegdetected = 1;

					if (is_plugin_active('jw-player-plugin-for-wordpress/jwplayermodule.php')) $detectedp['jwplayer'] = 1;
					if (is_plugin_active('video-share-vod/video-share-vod.php')) $detectedp['videosharevod'] = 1;


?>

<h4>Video Share VOD Integration</h4>
<?php

					if ( $detectedp['videosharevod'] )
					{
?>
<select name="videosharevod" id="videosharevod">
  <option value="0" <?php echo $options['videosharevod']?"":"selected"?>>Disabled</option>
  <option value="1" <?php echo $options['videosharevod']?"selected":""?>>Enabled</option>
</select>
<?php
					}
					else echo 'Not detected. Please install and activate <a target="_videosharevod" href="https://wordpress.org/plugins/video-share-vod/">VideoShareVOD Plugin</a> from <a href="plugin-install.php">Plugins > Add New</a>!';
?>
<BR><a target="_videosharevod" href="http://videosharevod.com/">Video Share VOD</a> is an advanced plugin for managing videos, conversions, listings, players. Highly recommended with this plugin for easier and more reliable setup and management.

<?php


					if ($options['videosharevod'])  echo '<p><h4> Conversion are managed by Video Share VOD: <a href="admin.php?page=video-share">Configure</a> | <a href="http://videosharevod.com/features/quick-start-tutorial/">Tutorial</a></h4></p>';
					else
					{

						echo "<p><h4> Conversion tools for HTML5 playback: </h4></p>";


						echo "<table><tr><td> ffmpeg: </td>";
						$cmd ="/usr/local/bin/ffmpeg -codecs";
						exec($cmd, $output, $returnvalue);
						if ($returnvalue == 127)  echo "<td><font color='red'> &nbsp &nbsp &nbsp &nbsp  Not detected: $cmd</font></td></tr>"; else echo "<td><font color='green'> &nbsp &nbsp &nbsp &nbsp  Detected</font></td></tr>";

						//detect codecs
						if ($output) if (count($output))
								foreach (array('h264','faac','speex', 'nellymoser') as $cod)
								{
									$det=0; $outd="";
									echo "<tr><td> $cod codec: </td>";
									foreach ($output as $outp) if (strstr($outp,$cod)) { $det=1; $outd=$outp; };
									if ($det) echo "<td><font color='green'> &nbsp &nbsp &nbsp &nbsp  Detected ($outd)</font></td></tr>"; else echo "<td><font color='red'> &nbsp &nbsp &nbsp &nbsp  Missing: please configure and install ffmpeg with lib$cod</font></td></tr>";
								}

							echo "<tr><td> ffmpeg2theora: </td> ";
						$cmd ="/usr/local/bin/ffmpeg2theora";
						echo exec($cmd, $output, $returnvalue);
						if ($returnvalue == 127)  echo "<td><font color='red'> &nbsp &nbsp &nbsp &nbsp  Not detected: $cmd</font></td></tr>"; else echo "<td><font color='green'> &nbsp &nbsp  &nbsp &nbsp Detected</font></td></tr>";
						echo "</table>";

?>

<h4>FFMPEG Conversion</h4>
<p>If ffmpeg is available use these to update parameters as needed for conversion.</p>
<input name="ffmpegcall" type="text" id="ffmpegcall" size="100" maxlength="256" value="<?php echo $options['ffmpegcall']?>"/> $output_file -i $input_file
<BR>Ex: /usr/local/bin/ffmpeg -y -s 480x360 -r 15 -vb 512k -vcodec libx264 -coder 0 -bf 0 -level 3.1 -g 30 -maxrate 768k -acodec libfaac -ac 2 -ar 22050 -ab 96k -x264opts vbv-maxrate=364:qpmin=4:ref=4

<h4>Videos URL</h4>
<input name="videos_url" type="text" id="videos_url" size="80" maxlength="256" value="<?php echo $options['videos_url']?>"/>
<BR>Example: http://yourserver.com/streams/
<BR> ends with /

<?php
					}

					break;
				case 'integration':
?>
	<h3>Integration Settings</h3>
<?php


					if ($options['videosharevod']) echo '<p><h4>Videos are managed by Video Share VOD: <a href="admin.php?page=video-share">Configure</a> | <a href="http://videosharevod.com/features/quick-start-tutorial/">Tutorial</a></h4></p>';
					else {

						$detectedp[jwplayer] = 0;
						$cmd = $options['ffmpegcall'] ." -codecs";
						exec($cmd, $output, $returnvalue);
						if ($returnvalue == 127) $ffmpegdetected = 0;
						else $ffmpegdetected = 1;

						if (is_plugin_active('jw-player-plugin-for-wordpress/jwplayermodule.php')) $detectedp[jwplayer] = 1;
?>


	<h4>Select Player</h4>
	<select name='selectPlayer' id='selectPlayer'>
	<option value='vwplayer' <?php echo $options['selectPlayer'] == 'vwplayer'?"selected":""?>>VideoWhisper RTMP</option>
	<option value='strobe-rtmp' <?php echo $options['selectPlayer'] == 'strobe-rtmp'?"selected":""?>>Strobe RTMP</option>
	<?php
						if ($detectedp[jwplayer]) {
?>
	<option value='jwplayer' <?php echo $options['selectPlayer'] == 'jwplayer'?"selected":""?>>Jw Player</option>
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
	<p> Recommended: Strobe RTMP (recording is instantly available over RTMP). HTML5 conversion may take some time if supported. Jw Player:
		<?php
						if ($detectedp[jwplayer]) {
							echo "Detected";
						}
						else{
							echo"<a href='http://wordpress.org/extend/plugins/jw-player-plugin-for-wordpress/' target='_blank'> Not Detected </a>";
						}
						?></p>

<h4>Embed Mode</h4>
<select name="embedMode" id="embedMode">
  <option value="0" <?php echo $options['embedMode']?"":"selected"?>>Direct mode</option>
  <option value="1" <?php echo $options['embedMode']?"selected":""?>>Shortcode mode</option>
</select>

<h4>Embed Width</h4>
<input name="embedWidth" type="text" id="embedWidth" size="5" maxlength="5" value="<?php echo $options['embedWidth']?>"/>

<h4>Embed Height</h4>
<input name="embedHeight" type="text" id="embedHeight" size="5" maxlength="5" value="<?php echo $options['embedHeight']?>"/>

<h4>Autoplay</h4>
<select name="autoplay" id="autoplay">
  <option value="false" <?php echo $options['autoplay']=='false'?"selected":""?>>Off</option>
  <option value="true" <?php echo $options['autoplay']=='true'?"selected":""?>>On</option>
</select>


<?php
					}

?>
						 <h4>BuddyPress Integration</h4>
						 <select name="buddypress" id="buddypress">
  <option value="0" <?php echo $options['buddypress']?"":"selected"?>>Disabled</option>
  <option value="1" <?php echo $options['buddypress']?"selected":""?>>Enabled</option>
</select>
<BR> BuddyPress integration enables and Insert Video button for recording video when posting activity updates in frontend.
						 <?php
					if (is_plugin_active('buddypress/bp-loader.php')) echo "<BR>BuddyPress was detected!";

					/*$buttoncode = <<<EOD
<a href="http://wpdev.hostforstreaming.com/wordpress/wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/videorecorder.php" target="blank"><img style="vertical-align: middle;" src="http://wpdev.hostforstreaming.com/wordpress/wp-content/plugins/video-comments-webcam-recorder/comments/img/recorder.png">Insert Video </a><br><small>Record webcam video and embed it in your comment. Log in required to use this feature.</small>
EOD;*/
?>


<h4>Customize Record Button</h4>
<textarea name="buttonCode" type="textarea" cols="60" rows="5" id="buttonCode" >
<?php echo stripslashes($options['buttonCode']);?>
</textarea>
<BR>Custom html code to show in WordPress comments section. This does not apply to BuddyPress integration.

<h4>Show VideoWhisper Powered by</h4>
<select name="videowhisper" id="videowhisper">
  <option value="0" <?php echo $options['videowhisper']?"":"selected"?>>No</option>
  <option value="1" <?php echo $options['videowhisper']?"selected":""?>>Yes</option>
</select>


<?php
					break;
				case 'recorder':

					$options['parameters'] = htmlentities(stripslashes($options['parameters']));

?>
<h3>Web Recorder Settings</h3>

<h4>Camera Resolution Width</h4>
<input name="camWidth" type="text" id="camWidth" size="5" maxlength="5" value="<?php echo $options['camWidth']?>"/>

<h4>Camera Resolution Height</h4>
<input name="camHeight" type="text" id="camHeight" size="5" maxlength="5" value="<?php echo $options['camHeight']?>"/>

<h4>Camera Frames Per Second (FPS)</h4>
<input name="camFps" type="text" id="camFps" size="5" maxlength="5" value="<?php echo $options['camFps']?>"/>

<h4>Microphone Rate</h4>
<input name="micRate" type="text" id="micRate" size="5" maxlength="5" value="<?php echo $options['micRate']?>"/>

<h4>Cam Bandwidth</h4>
<input name="camBandwidth" type="text" id="camBandwidth" size="8" maxlength="8" value="<?php echo $options['camBandwidth']?>"/>

<h4>Cam Max Bandwidth</h4>
<input name="camMaxBandwidth" type="text" id="camMaxBandwidth" size="8" maxlength="8" value="<?php echo $options['camMaxBandwidth']?>"/>

<h4>Recording Time Limit</h4>
<input name="recordLimit" type="text" id="recordLimit" size="5" maxlength="5" value="<?php echo $options['recordLimit']?>"/>s
<br>Maximum recording video length.

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

<h4>Layout Code</h4>
<textarea name="layoutCode" type="textarea" cols="50" rows="3" id="layoutCode">
<?php echo $options['layoutCode'];?>
</textarea>

<h4>Fill Window</h4>
<select name="fillWindow" id="fillWindow">
  <option value="0" <?php echo $options['fillWindow']?"":"selected"?>>No</option>
  <option value="1" <?php echo $options['fillWindow']?"selected":""?>>Yes</option>
</select>

<h3>Extra Parameters</h3>
<textarea name="parameters" type="textarea" cols="100" rows="3" id="parameters">
<?php echo $options['parameters'];?>
</textarea>
<BR>For more details about possible parameters see <a href="https://videowhisper.com/?p=PHP+Video+Recorder+Script#integrate">php edition documentation</a>.


<?php
				}
				submit_button();
?>

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
						echo "<p aling='center'><H3>Only admin can access this page!</H3></p>";
					}
					if($loggedin == 1)
					{
						global $wpdb;
						$table_name = $wpdb->prefix."vw_videocomrecordings";
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
							echo "<BR>";
							echo "The files were successfully deleted!";

							echo "<BR>";
						}
					}
					//var_dump($recs);
				}
?>
		<div class="wrap">
		<div id="icon-options-general" class="icon32"><br></div>
		<h2>Video Comments Recordings list</h2>
		<p><H3><a href = "<?php echo home_url();?>/wp-admin/options-general.php?page=videocomments&mod=settings">Settings</a> |
 &gt; Recordings List</H3> </p>
		</div>
		<?php
				$options = get_option('VWvideoComRecorderOptions');

				$streamname = $_GET['stream'];

				global $wpdb;
				$table_name = $wpdb->prefix."vw_videocomrecordings";
				$items =  $wpdb->get_results("SELECT * FROM `$table_name` ORDER BY `id` DESC");


				if ($options['videosharevod'])  echo '<p><h4> Videos are managed by Video Share VOD: <a href="edit.php?post_type=video">Video List</a> | <a href="admin.php?page=video-share">Configure</a> | <a href="http://videosharevod.com/features/quick-start-tutorial/">Tutorial</a></h4> This section will only list videos added without using Video Share VOD.</p>';
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

			<form id = "myForm" name = "form" action="<?php echo home_url(); ?>/wp-admin/options-general.php?page=videocomments&mod=recordings&model=delete" method="post">
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
						echo "<a href= ".home_url().'/wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/streamplay.php?vid='.$item->streamname." target='_blank'>";
						if(file_exists('../'.$file = 'wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/snapshots/'.$item->streamname.'.jpg'))
						{
							echo "<img src=".home_url().'/'.$file.">";
						}else
						{
							echo "<img src=".home_url().'/wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/snapshots/no_video.png'.">";
						}
						echo "</a>";
						echo "</td>";
						echo "<td>";
						echo "<a href= ".home_url().'/wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/streamplay.php?vid='.urlencode($item->streamname).'&postid='.$item->postId.'&commentid='.$item->commentId." target='_blank'><B>".$item->streamname."</B></a>";
						echo " <BR><BR> ";
						echo "<a href=".home_url().'?p='.$item->postId.'#comment-'.$item->commentId." target='_blank'><B> View Comment </B></a>";
						echo " <BR> ";
						echo "<a href=".home_url().'/wp-content/plugins/video-comments-webcam-recorder/comments/videowhisper2/recorded_videos.php?delete='. urlencode($item->streamname).'&postid='.$item->postId.'&commentid='.$item->commentId." target='_blank'><B> Delete this Recording </B></a>";
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
if (class_exists("VWvideoComments"))
{
	$videoComments = new VWvideoComments();
}

//Actions and Filters
if (isset($videoComments))
{
	add_action("plugins_loaded", array(&$videoComments, 'plugins_loaded'));
	add_action('init', array(&$videoComments, 'init'));

	add_action('admin_menu', array(&$videoComments, 'menu'));

	add_filter("comment_text", array(&$videoComments,'com_shortcode') );

	add_action('bp_init', array(&$videoComments,'bp_init') );

}
?>