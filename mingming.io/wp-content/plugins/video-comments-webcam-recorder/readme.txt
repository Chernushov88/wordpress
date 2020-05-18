=== Video Comments Webcam Recorder ===
Contributors: videowhisper, VideoWhisper.com
Author: VideoWhisper.com
Author URI: https://videowhisper.com
Plugin Name: VideoWhisper Video Comments Webcam Recorder
Plugin URI: https://videowhisper.com/?p=WordPress+Video+Recorder
Donate link: https://videowhisper.com/?p=Invest
Tags: webcam, recorder, comment, video, BuddyPress, plugin, clip, recording, cam, comments, BP, activity, discuss, audio, WYSIWYG, editor, share, insert, camera, annotation, shortcode
Requires at least: 2.7
Tested up to: 5.0
Stable tag: trunk

The Video Comments Webcam Recorder allows WordPress users to record video comments as responses to posts or to other comments.

== Description ==
The Video Comments Webcam Recorder allows WordPress users to record video comments as responses to posts or to other comments. If the user is not logged into WordPress he cannot access this feature.

= Key Features =
* Web based webcam recording
* Insert webcam videos in WordPress comments
* Insert webcam videos in BuddyPress activity posts
* Multiple players supported
* HTML5 playback support (if conversion is supported)
* Edit recorder settings from plugin backend

Supports conversion to MP4 for HTML5 playback if FFMPEG and Flash + HTML5 codecs are available and web and rtmp are on same server (so web scripts can access rtmp video files).

Integrates with the [Video Share VOD - Turnkey Video Site Builder](https://wordpress.org/plugins/video-share-vod/  "Video Share / Video On Demand - Turnkey Video Site Builder") WordPress plugin for advanced video management, multiple players and settings (recommended).

Special requirements: This plugin has requirements beyond regular WordPress hosting specifications: a RTMP host is needed for persistent connections to manage live interactions and streaming (Wowza recommended). More details about this, including solutions are provided on the Installation section pages.

For more details see the [WordPress Webcam Video Recorder](https://videowhisper.com/?p=WordPress+Video+Recorder+Posts+Comments "WordPress Webcam Video Recorder") plugin homepage by VideoWhisper.

== Installation ==
* See latest version instructions on [Video Comments Webcam Recorder plugin homepage](https://videowhisper.com/?p=WordPress+Video+Recorder+Posts+Comments)
* Before installing this make sure all hosting requirements are met: [Webcam Recording Requirements](https://videowhisper.com/?p=Requirements)
* Install the RTMP application using these instructions: [VideoWhisper RTMP Side](https://videowhisper.com/?p=RTMP+Applications)
* Copy this plugin folder to your wordpress installation in your plugins folder or install it automatically from repository from your backend.
* Enable the plugin from Wordpress admin area and fill the "Settings", including rtmp address there.
* Install and configure [Video Share VOD - Turnkey Video Site Builder](https://videosharevod.com) plugin (recommended)

== Screenshots ==
1. Insert Video Button (when leaving a comment)
2. Recorder Application

== Desktop Sharing / Screen Broadcasting ==
If your users want to broadcast their screen (when playing a game, using a program, tutoring various computer skills) they can do that easily just by using a screen sharing driver that simulates a webcam from desktop contents. Read more on http://www.videochat-scripts.com/screen-sharing-with-flash-video-chat-software/ .

== Documentation ==
* [Video Comments Webcam Recorder](https://videowhisper.com/?p=WordPress+Video+Recorder+Posts+Comments) plugin homepage
* [VideoWhisper Webcam Video Recorder Application](https://videowhisper.com/?p=Video+Recorder) homepage
* [VideoWhisper Support Page](https://videowhisper.com/tickets_submit.php)

== Demo ==
See a video posted with this plugin on: http://www.videochat-scripts.com/webcam-video-recorder-for-wordpress/

== Extra ==
More information, the latest updates, other plugins and non-WordPress editions can be found at https://videowhisper.com/ .

== Changelog ==

= 1.92.4 =
* Integrates Video Share VOD
* Integrates BuddyPress: allows inserting videos into activity posts

= 1.92 =
* Strobe player
* Container settings for easy setup on Red5 servers (Wowza recommended)
* Shortcode updates to work with other filtering plugins

= 1.55 =
* Integrates VideoWhisper Video Recorder 1.55
* HTML5 playback support (if conversion is possible)

= 1.45.2 =
* Shortcodes for code reliability
* Support for JwPlayer Plugin http://wordpress.org/extend/plugins/jw-player-plugin-for-wordpress/
* More settings
* Fixed plugin folder name

= 1.45 =
* First release
* Integrates VideoWhisper Video Recorder 1.45
* Record and embed video when writing post
* Settings
* Recordings list to delete recording files (if folder is accessible)