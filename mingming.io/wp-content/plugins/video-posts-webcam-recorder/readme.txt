=== Video Posts Webcam Recorder ===
Contributors: videowhisper, VideoWhisper.com
Author: VideoWhisper.com
Author URI: https://videowhisper.com
Plugin Name: VideoWhisper Video Posts Webcam Recorder
Plugin URI: https://videowhisper.com/?p=WordPress+Video+Recorder
Donate link: https://videowhisper.com/?p=Invest
Tags: video, flash, wowza, plugin, media, av, clip, recorder, recording, webcam, cam, post, posts, WYSIWYG, editor, share, insert, camera, VideoShareVOD, VideoWhisper, shortcode, reaction
Requires at least: 2.7
Tested up to: 4.9
Stable tag: trunk

The Video Posts Webcam Recorder allows the WordPress administrators and authors to record and insert videos in their posts.

== Description ==

Video Posts: The Video Posts Webcam Recorder allows the WordPress administrators and authors to record and insert videos in their posts by adding an insert recording button to WYSIWYG editor.
Recording can be done with the insert tool when editing posts or with the "videowhisper_recorder" shortcode that displays the interface to record video (uses permissions from VideoShareVOD if enabled).

Video Site: Plugin integrates with the [Video Share VOD](http://wordpress.org/plugins/video-share-vod/  "Video Share / Video On Demand") WordPress plugin for advanced video management, multiple customizable conversions, multiple players, delivery methods and settings (recommended). 
VideoShareVOD includes a HTML5 video uploader for recording from iOS/Android devices.
Can also be used to sell videos, in combination with [Paid Membership and Content](https://wordpress.org/plugins/paid-membership/  "Paid Membership and Content Subscriptions by Tokens/Credits").
Stand alone VSV videos can be recorded with [videowhisper_recorder category="category-name"] shortcode.

= Live Reaction Webcam Recorder =
Plugin supports recording during external video playback. 
Supports Youtube / Vimeo video synchronised reaction recordings (start recording at same time with a video and record during playback:   
[videowhisper_recorder youtube_sync="video-id" category="category-name"]
[videowhisper_recorder vimeo_sync="video-id" category="category-name"]

This reaction video recorder solution is great for video interviews, questionnaires, karaoke, recording live reaction, time limit tests.


= Special Requirements =
This plugin has requirements beyond regular WordPress hosting specifications: a RTMP host is needed for persistent connections to manage live interactions and streaming (Wowza recommended). More details about this, including solutions are provided on the Installation section pages. 

= Home Page =
Find more details about the Video Recorder application and WordPress integrations on [Video Recorder Posts Comments](https://videowhisper.com/?p=WordPress+Video+Recorder+Posts+Comments  "Video Recorder Posts Comments") home page.

== Installation ==
* See latest version instructions on plugin homepage: https://videowhisper.com/?p=WordPress+Video+Recorder+Posts+Comments
* Before installing this make sure all hosting requirements are met for video recording and conversions: https://videowhisper.com/?p=Requirements
* Install the RTMP application using these instructions: https://videowhisper.com/?p=RTMP+Applications
* Copy this plugin folder to your wordpress installation in your plugins folder or install it automatically from repository from your backend.
* Enable the plugin from Wordpress admin area and fill the "Settings", including RTMP address there.

== Screenshots ==
1. Record Button (when writing a post)
2. Recorder Application

== Desktop Sharing / Screen Broadcasting ==
If your users want to broadcast their screen (when playing a game, using a program, tutoring various computer skills) they can do that easily just by using a screen sharing driver that simulates a webcam from desktop contents. 
Read more about [Screen Sharing with Webcam Publishing Solutions](https://videochat-scripts.com/screen-sharing-with-flash-video-chat-software/  "Screen Sharing with Webcam Publishing Solutions") .

== Documentation ==
* Plugin Homepage : https://videowhisper.com/?p=WordPress+Video+Recorder+Posts+Comments
* Application Homepage : https://videowhisper.com/?p=Video+Recorder
* Support Page: https://videowhisper.com/tickets_submit.php

== Demos ==
[Live Reaction Webcam Recorder](https://videochat-scripts.com/live-reaction-webcam-recorder/  "Live Reaction Webcam Recorder")
[WP Webcam Video Recorder](https://videochat-scripts.com/record/  "WP Webcam Video Recorder")

== Extra ==
More information, the latest updates, other plugins and non-WordPress editions can be found at https://videowhisper.com/ .

== Changelog ==

= 2.6 =
* Vimeo player synchronized recordings with [videowhisper_recorder vimeo_sync="video-id"]

= 2.4 =
* Recorder app has ability to pause, resume - useful for sync with playback of another video

= 1.98 =
* VideoWhisper Video Recorder 1.98
* Youtube player synchronised recordings with [videowhisper_recorder youtube_sync="video-id"]

= 1.92 =
* VideoWhisper Video Recorder 1.92
* Video Container configuration

= 1.85.1 =
* VideoShareVOD integration for advanced video management and playback
* [videowhisper_recorder] Shortcoder

= 1.55 =
* Integrates VideoWhisper Video Recorder 1.55
* HTML5 playback support (if conversion is possible)
* Import previous recording in posts

= 1.45.4 =
* Support stream names with spaces fix

= 1.45.3 =
* Folder location fix (from videoposts to

= 1.45.2 =
* Shortcodes for code reliability
* Support for JwPlayer Plugin http://wordpress.org/extend/plugins/jw-player-plugin-for-wordpress/
* More settings

= 1.45 =
* First release
* Integrates VideoWhisper Video Recorder 1.45
* Record and embed video when writing post
* Settings
* Recordings list to delete recording files (if folder is accessible)