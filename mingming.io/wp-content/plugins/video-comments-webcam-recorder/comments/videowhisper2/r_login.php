<?php

//include("inc.php");
include_once("../../../../../wp-config.php");

$options = get_option('VWvideoComRecorderOptions');

$rtmp_server = $options['rtmp_server'];
$camWidth = $options['camWidth'];
$camHeight = $options['camHeight'];
$camFPS = $options['camFps'];
$micRate = $options['micRate'];
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

$parameters = html_entity_decode($options['parameters']);


$loggedin=0;
global $current_user;
get_currentuserinfo();
if ($current_user->user_nicename) $username=urlencode($current_user->user_nicename);

$msg="";
		if ($username) $loggedin=1;
		else $msg=urlencode("<a href=\"/\">Please login first or register an account if you don't have one! Click here to return to website.</a>");


//suffix to attach to $username and obtain recording filename
//$recordingId="-".base_convert(time(),10,36); //latest versions automatically add time stamp
$recordingId="";


?>firstParameter=fix&server=<?=$rtmp_server?>&serverAMF=<?=$rtmp_amf?>&username=<?=$username?>&recordingId=<?=$recordingId?>&msg=<?=$msg?>&loggedin=<?=$loggedin?>&camWidth=<?=$camWidth?>&camHeight=<?=$camHeight?>&camFPS=<?=$camFPS?>&camBandwidth=<?=$camBandwidth?>&showCamSettings=<?=$showCamSettings?>&camMaxBandwidth=<?=$camMaxBandwidth?>&micRate=<?=$micRate?>&advancedCamSettings=<?=$advancedCamSettings?>&recordLimit=<?=$recordLimit?>&layoutCode=<?=urlencode($layoutCode)?>&fillWindow=<?=$fillWindow?>&disablePreview=<?=$disablePreview?>&recordContainer=<?=$options['recordContainer']?><?php echo $parameters?>&loadstatus=1