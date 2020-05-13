<?php

define('WP_DEBUG_DISPLAY', false);
ini_set('display_errors','Off');

//include("inc.php");
include_once("../../../../../wp-config.php");



$options = get_option('VWvideoRecorderOptions');

$rtmp_server = $options['rtmp_server'];
$camWidth = $options['camWidth'];
$camHeight = $options['camHeight'];
$camFPS = $options['camFPS'];
$camBandwidth = $options['camBandwidth'];
$camMaxBandwidth = $options['camMaxBandwidth'];
$showCamSettings = $options['showCamSettings'];
$advancedCamSettings = $options['advancedCamSettings'];
$disablePreview = $options['disablePreview'];
$layoutCode = $options['layoutCode'];
$fillWindow = $options['fillWindow'];
$recordLimit = $options['recordLimit'];
$videowhisper = $options['videowhisper'];
$directory = $options['directory'];


$room_name = sanitize_file_name( $_GET['room_name']);

$loggedin=0;
$current_user = wp_get_current_user();
if ($current_user->exists()) if ($current_user->user_nicename) $username=urlencode($current_user->user_nicename);
else $visitor=1;

if (!$username) $username = $room_name; //pass recording name as room for visitors
$username=sanitize_file_name($username);


//access keys
if ($current_user)
{
	$userkeys = $current_user->roles;
	$userkeys[] = $current_user->user_login;
	$userkeys[] = $current_user->ID;
	$userkeys[] = $current_user->user_email;
}


//if any key matches any listing
function inList($keys, $data)
{
	if (!$keys) return 0;
	if (!$data) return 0;
	if (strtolower(trim($data)) == 'all') return 1;
	if (strtolower(trim($data)) == 'guest') return 1;
	if (strtolower(trim($data)) == 'none') return 0;

	$list=explode(",", strtolower(trim($data)));
	if (in_array('all', $list)) return 1;

	foreach ($keys as $key)
		foreach ($list as $listing)
			if ( strtolower(trim($key)) == trim($listing) ) return 1;

			return 0;
}

$msg="";

switch ($options['canRecord'])
{
case "all":
	$loggedin=1;
	if (!$username)
	{
		$timeZone = get_option('gmt_offset') * 3600;

		$username="VW-". str_replace('.', '_', $_SERVER['REMOTE_ADDR']) . '-' . date("d_m_Y-H_i", time() + $timeZone);
	}
	break;
case "members":
	if ($username) $loggedin=1;
	else $msg=urlencode("<a href=\"/\">Please login first or register an account if you don't have one! Click here to return to website.</a>") . $msgp;
	break;
case "list";
	if ($username)
		if (inList($userkeys, $options['recordList'])) $loggedin=1;
		else $msg=urlencode("<a href=\"/\">$username, you are not in the allowed recorder list.</a>") . $msgp;
		else $msg=urlencode("<a href=\"/\">Please login first or register an account if you don't have one! Click here to return to website.</a>") . $msgp;
		break;
}

//suffix to attach to $username and obtain recording filename
//$recordingId="-".base_convert(time(),10,36); //latest versions automatically add time stamp

$recordingId="";

$layoutCode=<<<layoutEND
layoutEND;

$parameters = html_entity_decode($options['parameters']);

$mode = $_GET['mode'];
if ($mode == 'youtube_sync' || $mode == 'vimeo_sync') $parameters = html_entity_decode($options['parametersSync']);


?>firstparam=fix&server=<?php echo $rtmp_server?>&serverAMF=<?php echo $rtmp_amf?>&username=<?php echo $username?>&recordingId=<?php echo $recordingId?>&msg=<?php echo $msg?>&loggedin=<?php echo $loggedin?>&camWidth=<?php echo $camWidth?>&camHeight=<?php echo $camHeight?>&camFPS=<?php echo $camFPS?>&camBandwidth=<?php echo $camBandwidth?>&showCamSettings=<?php echo $showCamSettings?>&camMaxBandwidth=<?php echo $camMaxBandwidth?>&videoCodec=<?php echo $options['videoCodec']?>&codecProfile=<?php echo $options['codecProfile']?>&codecLevel=<?php echo
$options['codecLevel']?>&soundCodec=<?php echo $options['soundCodec']?>&soundQuality=<?php echo $options['soundQuality']?>&micRate=<?php echo
$options['micRate']?>&advancedCamSettings=<?php echo $advancedCamSettings?>&recordLimit=<?php echo $recordLimit?>&layoutCode=<?php echo urlencode($layoutCode)?>&fillWindow=<?php echo $fillWindow?>&disablePreview=<?php echo $disablePreview?>&recordContainer=<?php echo $options['recordContainer']?><?php echo $parameters?>&loadstatus=1