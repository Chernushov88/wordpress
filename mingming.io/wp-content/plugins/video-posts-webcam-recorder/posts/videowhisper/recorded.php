<?php

define('WP_DEBUG_DISPLAY', false);
ini_set('display_errors','Off');

include_once("../../../../../wp-config.php");
error_reporting(E_ALL & ~E_NOTICE);



$mod = $_GET['mod'];

$stream = sanitize_file_name($_POST['stream']);
if (!$stream) $stream=sanitize_file_name($_GET['stream']);
if (!$stream) exit;

$recording = sanitize_file_name($_POST['recording']);

$options = get_option('VWvideoRecorderOptions');

$video_from = $options['directory'];

//echo "&stream=$stream&from=$video_from";

if (file_exists("snapshots/".$stream.".jpg"))  copy("snapshots/".$stream.".jpg","snapshots/".$recording.".jpg");

//conversion
$vid = $stream;

if (file_exists($file = $video_from . $vid  . ".flv"))
{
	//echo "&file=$file";

	if ($options['selectPlayer'] == 'videosharevod')
	{
		if (class_exists("VWvideoShare"))
		{

			$current_user = wp_get_current_user();

			if ( ! $current_user->exists() )
			{
				$username = 'Visitor';
				$userID = '0';
			}
			else
			{
				$username  = $current_user->display_name;
				$userID = $current_user->ID;
			}

			$playlists = sanitize_file_name($username);

			$categoryID = '';
			$category = sanitize_file_name( $_COOKIE['vw_recording_category'] );
			if ($category)
			{
				$categoryID = get_cat_ID( $category );

				//require_once(ABSPATH . 'wp-admin/includes/taxonomy.php')
				//if (!$categoryID) $categoryID = wp_create_category($category);
			}

			VWvideoShare::importFile($file, sanitize_file_name($stream), $userID, $playlists, $categoryID, 'webcam', $description = $username . ' webcam recording');

			//  echo '&videosharevod=1';

		}


	}
	else
	{
		//mp4
		$output_file= $video_from . $vid  . "-ip.mp4";
		$log_file = $video_from . $vid  . ".log";
		$cmd = $options['ffmpegPath'] .' -y '.$options['ffmpegConvert'] . " '$output_file' -i '$file' >& '$log_file' &";
		exec($cmd, $output, $returnvalue);
		exec("echo '$cmd' >> '$log_file.cmd'", $output, $returnvalue);

		if ($mod) echo $cmd;

		//ogv
		$output_filew= $video_from . $vid  . ".ogv";
		$log_filew = $video_from . $vid  . "-ogv.log";

		//$cmd = "/usr/local/bin/ffmpeg2theora \"$file\" -o \"$output_filew\" -V 512 -A 96 -y &> '$log_filew' &";
		$cmd = "/usr/local/bin/ffmpeg2theora \"$file\" -o \"$output_filew\" -y &> '$log_filew' &";

		exec($cmd, $output, $returnvalue);
		exec("echo '$cmd' >> '$log_file.cmd2'", $output, $returnvalue);
	}
} else $err = 'file-not-found';
?>stream=<?php echo urlencode($stream)?>&userID=<?php echo $userID?>&err=<?php echo $err?>&loadstatus=1