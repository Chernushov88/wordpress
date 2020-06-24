<?php
defined('ABSPATH') or die("No script kiddies please!");
/*
    Plugin name:  Everest Comment Rating Lite
    Plugin URI:   https://accesspressthemes.com/wordpress-plugins/everest-comment-rating-lite
    Description:  Everest Comment Rating Lite is the Free WordPress Plugin to enable Like and Dislike button icons and show total rating count for default WordPress comments.
    Version:      2.0.3
    Author:       Access Keys
    Author URI:   https://access-keys.com
    License:      GPL2
    License URI:  https://www.gnu.org/licenses/gpl-2.0.html
    Text Domain:  everest-comment-rating-lite
    Domain Path:  /languages
 */
if (!class_exists('ECR_LITE_Class')) {

    class ECR_LITE_Class {
        function __construct() {
            $this->define_constants();
            register_activation_hook(__FILE__, array($this, 'default_plugin_settings'));
            add_action('init', array($this, 'plugin_text_domain')); 
            add_action('admin_menu', array($this, 'ECR_menu'));
            add_action('admin_enqueue_scripts', array($this, 'register_backend_assets'));
            add_action('wp_enqueue_scripts', array($this, 'register_frontend_assets'));
            add_action('admin_post_ecr_settings_save', array($this, 'save_settings'));
            add_action('admin_post_ecr_restore_default', array($this, 'fn_restore_plugin_settings'));
            add_filter('comment_text', array($this, 'ecr_like_dislike'), 20, 2);
            add_action('wp_ajax_ecr_comment_ajax_action', array($this, 'like_dislike_action_id'));
            add_action('wp_ajax_nopriv_ecr_comment_ajax_action', array($this, 'like_dislike_action_id'));
            add_action('wp_head', array($this, 'custom_dynamic_css')); 

            add_filter( 'plugin_row_meta', array( $this, 'ecr_plugin_row_meta' ), 10, 2 );
            add_filter( 'admin_footer_text', array( $this, 'ecr_admin_footer_text' ) );
            add_action( 'admin_init', array( $this, 'redirect_to_site' ), 1 );
        }

        function ecr_plugin_row_meta( $links, $file ){
            if ( strpos( $file, 'everest-comment-rating-lite.php' ) !== false ) {
                $new_links = array(
                    'demo' => '<a href="http://demo.accesspressthemes.com/wordpress-plugins/everest-comment-rating-lite" target="_blank"><span class="dashicons dashicons-welcome-view-site"></span>Live Demo</a>',
                    'doc' => '<a href="https://accesspressthemes.com/documentation/everest-comment-rating-lite/" target="_blank"><span class="dashicons dashicons-media-document"></span>Documentation</a>',
                    'support' => '<a href="http://accesspressthemes.com/support" target="_blank"><span class="dashicons dashicons-admin-users"></span>Support</a>',
                    'pro' => '<a href="https://1.envato.market/c/1302794/275988/4415?u=https%3A%2F%2Fcodecanyon.net%2Fitem%2Feverest-comment-rating-display-likedislike-with-reaction-emojis-for-wordpress-comments%2F21149051" target="_blank"><span class="dashicons dashicons-cart"></span>Premium version</a>'
                );
                $links = array_merge( $links, $new_links );
            }
            return $links;
        }


        function ecr_admin_footer_text( $text ){
            global $post;
            if (isset($_GET['page']) && $_GET['page'] === 'everest-comment-rating-lite') {
                $link = 'https://wordpress.org/support/plugin/everest-comment-rating-lite/reviews/#new-post';
                $pro_link = 'https://1.envato.market/c/1302794/275988/4415?u=https%3A%2F%2Fcodecanyon.net%2Fitem%2Feverest-comment-rating-display-likedislike-with-reaction-emojis-for-wordpress-comments%2F21149051';
                $text = 'Enjoyed Everest Comment Rating Lite? <a href="' . $link . '" target="_blank">Please leave us a ★★★★★ rating</a> We really appreciate your support! | Try premium version <a href="' . $pro_link . '" target="_blank">Everest Comment Rating</a> - more features, more power!';
                return $text;
            } else {
                return $text;
            }
        }

        function default_plugin_settings() {
            include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
            if (!get_option('ecr_settings')) {
                $default_settings = $this->get_default_settings();
                update_option('ecr_settings', $default_settings);
            }
        }

        function fn_restore_plugin_settings() {
            if (isset($_GET['_wpnonce']) && wp_verify_nonce($_GET['_wpnonce'], 'ecr_restore_nonce')) {
                $default_settings = $this->get_default_settings();
                update_option('ecr_settings', $default_settings);
                wp_redirect(admin_url('admin.php?page=everest-comment-rating-lite&message=2'));
                exit;
            }
        }

        function save_settings() {
            if (isset($_POST['ecr_nonce_field']) && wp_verify_nonce($_POST['ecr_nonce_field'], 'ecr_nonce')) {
                if (isset($_POST['ecr_settings_submit'])) {
                    $ecr_settings = $_POST['ecr_settings'];
                    $hashtag = sanitize_text_field($ecr_settings['hashtag']);
                    update_option('ecr_settings', $ecr_settings);
                    wp_redirect(admin_url('admin.php?page=everest-comment-rating-lite&message=1' . $hashtag));
                    exit;
                }
            }
        }

        function get_default_settings() {
            $ecr_settings = array();
            $ecr_settings['hashtag'] = 'Configuration';
            $ecr_settings['enable_comment'] = 'enable';
            $ecr_settings['like'] = 'enable';
            $ecr_settings['dislike'] = 'enable';
            $ecr_settings['count'] = 'enable';
            $ecr_settings['count_option'] = 'together';
            $ecr_settings['number_format'] = 'format_1';
            $ecr_settings['position'] = 'after';
            $ecr_settings['likeicon'] = 'fa fa-thumbs-o-up';
            $ecr_settings['dislikeicon'] = 'fa fa-thumbs-o-down';
            $ecr_settings['template_number'] = 'template-1';
            $ecr_settings['like_icon_color'] = "";
            $ecr_settings['dislike_icon_color'] = "";
            $ecr_settings['hover_color'] = "";
            $ecr_settings['count_color'] = "";
            $ecr_settings['count_background_color'] = "";
            $ecr_settings['liked_color'] = "";
            $ecr_settings['disliked_color'] = "";
            $ecr_settings['iconbackground_color'] = "";
            $ecr_settings['ldbackground_color'] = "";
            $ecr_settings['lbackground_color'] = "";
            $ecr_settings['dbackground_color'] = "";
            $ecr_settings['error_message'] = "Please Login First";
            $ecr_settings['like_hover'] = "Like";
            $ecr_settings['dislike_hover'] = "Dislike";
            return $ecr_settings;
        }

        function ECR_menu() {
            add_comments_page(__('Everest Comment Rating Lite', 'everest-comment-rating-lite'), __('Everest Comment Rating Lite ', 'everest-comment-rating-lite'), 'manage_options', 'everest-comment-rating-lite', array($this, 'ecr_settings'));
            add_comments_page(__('Everest Comment Rating Lite Documentation', 'everest-comment-rating-lite'), __('Everest Comment Rating Lite Documentation ', 'everest-comment-rating-lite'), 'manage_options', 'ecr-documentation', '__return_false', null, 9);
            add_comments_page(__('Everest Comment Rating Pro', 'everest-comment-rating-lite'), __('Everest Comment Rating Pro ', 'everest-comment-rating-lite'), 'manage_options','ecr-premium', '__return_false', null, 9);
        }

        function redirect_to_site(){

            if ( isset( $_GET[ 'page' ] ) && $_GET[ 'page' ] == 'ecr-documentation' ) {
                wp_redirect( 'https://accesspressthemes.com/documentation/everest-comment-rating-lite/');
                exit();
            }

            if ( isset( $_GET[ 'page' ] ) && $_GET[ 'page' ] == 'ecr-premium' ) {
                 wp_redirect( 'https://1.envato.market/c/1302794/275988/4415?u=https%3A%2F%2Fcodecanyon.net%2Fitem%2Feverest-comment-rating-display-likedislike-with-reaction-emojis-for-wordpress-comments%2F21149051' );
                 exit();
            }
        }

        function register_backend_assets() {
            if (isset($_GET['page']) && $_GET['page'] === 'everest-comment-rating-lite') {
                wp_enqueue_style('ECR-backend-style', ECR_LITE_PLUGIN_URL . 'css/ecr-backend.css', array(), ECR_LITE_PLUGIN_VERSION);
                wp_enqueue_script('ECR-backend-script', ECR_LITE_PLUGIN_URL . 'js/ecr-backend.js', array('jquery', 'wp-color-picker'), ECR_LITE_PLUGIN_VERSION);
                wp_enqueue_style('wp-color-picker');
                wp_enqueue_style('font-awesome', ECR_LITE_PLUGIN_URL . 'css/font-awesome.min.css', false);
                wp_enqueue_style('animate.css', ECR_LITE_PLUGIN_URL . 'css/animate.css', false);
                wp_enqueue_media();
            }
        }

        function register_frontend_assets() {
            $ecr_settings = get_option('ecr_settings');
            $count_option = (isset($ecr_settings['count_option']) && $ecr_settings['count_option'] != '') ? esc_attr($ecr_settings['count_option']) : 'together';
            $number_format = (isset($ecr_settings['number_format']) && $ecr_settings['number_format'] != '') ? esc_attr($ecr_settings['number_format']) : 'format_1';
            if (is_user_logged_in()) {
                $current_user = wp_get_current_user();
                $user_id = $current_user->ID;
                $logged_in = 1;
            } else {
                $user_id = '';
                $logged_in = 0;
            }
            wp_enqueue_style('ECR-frontend-style', ECR_LITE_PLUGIN_URL . 'css/ecr-frontend.css', array(), ECR_LITE_PLUGIN_VERSION);
            wp_enqueue_script('ecr-frontend', ECR_LITE_PLUGIN_URL . 'js/ecr-frontend.js', array('jquery'), ECR_LITE_PLUGIN_VERSION);
            wp_enqueue_style('font-awesome', ECR_LITE_PLUGIN_URL . 'css/font-awesome.min.css', false);
            wp_enqueue_style('animate.css', ECR_LITE_PLUGIN_URL . 'css/animate.css', false);
            $js_obj = array('ajax_url' => admin_url('admin-ajax.php'),
                'ajax_nonce' => wp_create_nonce('ecr_ajax_nonce'),
                'error_message' => esc_attr($ecr_settings['error_message']),
                'logged_in' => $logged_in,
                'user_id' => $user_id,
                'count_option' => $count_option,
                'number_format' => $number_format,
            );
            wp_localize_script('ecr-frontend', 'ecr_js_obj', $js_obj);
        }

        function plugin_text_domain() {
            load_plugin_textdomain('everest-comment-rating-lite', false, ECR_LITE_PLUGIN_LANG_DIR);
        }

        function define_constants() {
            defined('ECR_LITE_PLUGIN_URL') or define('ECR_LITE_PLUGIN_URL', plugin_dir_url(__FILE__));
            defined('ECR_LITE_PLUGIN_PATH') or define('ECR_LITE_PLUGIN_PATH', plugin_dir_path(__FILE__));
            defined('ECR_LITE_PLUGIN_VERSION') or define('ECR_LITE_PLUGIN_VERSION', '2.0.3');
            defined('ECR_LITE_PLUGIN_LANG_DIR') or define('ECR_LITE_PLUGIN_LANG_DIR', basename(dirname(__FILE__)) . '/languages/');
            defined('ECR_LITE_PLUGIN_TD') or define('ECR_LITE_PLUGIN_TD','everest-comment-rating-lite');
        }

        function like_dislike_action_id($args) {
            if (isset($_POST['_wpnonce']) && wp_verify_nonce($_POST['_wpnonce'], 'ecr_ajax_nonce')) {
                $comment_id = intval(sanitize_text_field($_POST['comment_id']));
                $type = sanitize_text_field($_POST['type']);
                $user_id = sanitize_text_field($_POST['user_id']);
                $count_option = sanitize_text_field($_POST['count_option']);
                $logged_in = sanitize_text_field($_POST['logged_in']);
                $number_format = sanitize_text_field($_POST['number_format']);
                $liked_ids = get_comment_meta($comment_id, 'ecr_likedids', true);
                $disliked_ids = get_comment_meta($comment_id, 'ecr_dislikedids', true);
                $total_count = get_comment_meta($comment_id, 'ecr_total_count', true);
                $like_count = get_comment_meta($comment_id, 'ecr_like_count', true);
                $dislike_count = get_comment_meta($comment_id, 'ecr_dislike_count', true);

                if ($count_option === 'together') {
                    if (empty($total_count)) {
                        $total_count = 0;
                    }
                    if ($type == 'like') {
                        if (empty($liked_ids)) {
                            $liked_ids = array();
                        }
                        if (!in_array($user_id, $liked_ids) && in_array($user_id, $disliked_ids)) {
                            $liked_ids[] = $user_id;
                            $key = array_search($user_id, $disliked_ids);
                            unset($disliked_ids[$key]);
                            $total_count = $total_count + 1;
                            $l = update_comment_meta($comment_id, 'ecr_likedids', $liked_ids);
                            $d = update_comment_meta($comment_id, 'ecr_dislikedids', $disliked_ips);
                        } else if (!in_array($user_id, $liked_ids) && !in_array($user_ip, $disliked_ips)) {
                            $liked_ids[] = $user_id;
                            $total_count = $total_count + 1;
                            $l = update_comment_meta($comment_id, 'ecr_likedids', $liked_ids);
                        } else {
                            $key = array_search($user_id, $liked_ids);
                            unset($liked_ids[$key]);
                            $total_count = $total_count - 1;  
                            $l = update_comment_meta($comment_id, 'ecr_likedids', $liked_ids);
                        }
                    } else {
                        if (empty($disliked_ids)) {
                            $disliked_ids = array();
                        }
                        if (!in_array($user_id, $disliked_ids) && in_array($user_id, $liked_ids)) {
                            $disliked_ids[] = $user_id;
                            $key = array_search($user_id, $liked_ids);
                            unset($liked_ids[$key]);

                            $total_count = $total_count - 1;

                            $d = update_comment_meta($comment_id, 'ecr_dislikedids', $disliked_ids);
                            $l = update_comment_meta($comment_id, 'ecr_likedids', $liked_ids);
                        } elseif (!in_array($user_id, $disliked_ids) && !in_array($user_id, $liked_ids)) {
                            $disliked_ids[] = $user_id;
                            $total_count = $total_count - 1;
                            $d = update_comment_meta($comment_id, 'ecr_dislikedids', $disliked_ids);
                        } else {
                            $key = array_search($user_id, $disliked_ids);
                            unset($disliked_ids[$key]);
                            $total_count = $total_count + 1;
                            $l = update_comment_meta($comment_id, 'ecr_dislikedids', $disliked_ids);
                        }
                    }
                    $check = update_comment_meta($comment_id, 'ecr_total_count', $total_count);
                    if ($check) {
                        $total_count = $this->ecr_number_format($total_count, $number_format);
                        $response_array = array('success' => true, 'latest_count' => $total_count);
                    } else {
                        $response_array = array('success' => false, 'latest_count' => $total_count);
                    }
                } else {
                    if (empty($like_count)) {
                        $like_count = 0;
                    }
                    if (empty($dislike_count)) {
                        $dislike_count = 0;
                    }
                    if ($type == 'like') {
                        if (empty($liked_ids)) {
                            $liked_ids = array();
                        }
                        if (!in_array($user_id, $liked_ids) && !in_array($user_id, $disliked_ids)) {
                            $liked_ids[] = $user_id;
                            $like_count = $like_count + 1;
                            update_comment_meta($comment_id, 'ecr_likedids', $liked_ids);
                        } else if (!in_array($user_id, $liked_ids) && in_array($user_id, $disliked_ids)) {
                            $key = array_search($user_id, $disliked_ids);
                            unset($disliked_ids[$key]);
                            $dislike_count = $dislike_count - 1;
                            if($dislike_count <= 0){
                                $dislike_count = 0;
                            }
                            $liked_ids[] = $user_id;
                            $like_count = $like_count + 1;
                            $l = update_comment_meta($comment_id, 'ecr_likedids', $liked_ids);
                            $d = update_comment_meta($comment_id, 'ecr_dislikedids', $disliked_ids);
                        } else {
                            $key = array_search($user_id, $liked_ids);
                            unset($liked_ids[$key]);
                            $like_count = $like_count - 1;
                            if ($like_count <= 0) {
                                $like_count = 0;
                            }
                            $l = update_comment_meta($comment_id, 'ecr_likedids', $liked_ids);
                        }
                        $check = update_comment_meta($comment_id, 'ecr_like_count', $like_count);
                        if ($check) {
                            update_comment_meta($comment_id, 'ecr_dislike_count', $dislike_count);
                            $like_count = $this->ecr_number_format($like_count, $number_format);
                            $dislike_count = $this->ecr_number_format($dislike_count, $number_format);
                            $response_array = array('success' => true, 'latest_count' => $like_count, 'latest_dislike_count' => $dislike_count);
                        } else {
                            $response_array = array('success' => false, 'latest_count' => $like_count);
                        }
                    } else {
                        if (empty($disliked_ids)) {
                            $disliked_ids = array();
                        }
                        if (!in_array($user_id, $disliked_ids) && !in_array($user_id, $liked_ids)) {
                            $disliked_ids[] = $user_id;
                            $dislike_count = $dislike_count + 1;
                            update_comment_meta($comment_id, 'ecr_dislikedids', $disliked_ids);
                        } else if (!in_array($user_id, $disliked_ids) && in_array($user_id, $liked_ids)) {
                            $key = array_search($user_id, $liked_ids);
                            unset($liked_ids[$key]);
                            $like_count = $like_count - 1;
                            if ($like_count <= 0) {
                                $like_count = 0;
                            }
                            $disliked_ids[] = $user_id;
                            $dislike_count = $dislike_count + 1;
                            $l = update_comment_meta($comment_id, 'ecr_likedids', $liked_ids);
                            $d = update_comment_meta($comment_id, 'ecr_dislikedids', $disliked_ids);
                        } else {
                            $key = array_search($user_id, $disliked_ids);
                            unset($disliked_ids[$key]);
                            $dislike_count = $dislike_count - 1;
                            if ($dislike_count <= 0) {
                                $dislike_count = 0;
                            }
                            $l = update_comment_meta($comment_id, 'ecr_dislikedids', $disliked_ids);
                        }
                        $check = update_comment_meta($comment_id, 'ecr_dislike_count', $dislike_count);
                        if ($check) {
                            update_comment_meta($comment_id, 'ecr_like_count', $like_count);
                            $like_count = $this->ecr_number_format($like_count, $number_format);
                            $dislike_count = $this->ecr_number_format($dislike_count, $number_format);
                            $response_array = array('success' => true, 'latest_count' => $dislike_count, 'latest_like_count' => $like_count);
                        } else {
                            $response_array = array('success' => false, 'latest_count' => $dislike_count);
                        }
                    }
                }
                echo json_encode($response_array);
                die();
            }
        }

        function ecr_like_dislike($comment_text, $comment = null) {
            global $post;
            $ecr_settings = get_option('ecr_settings');
            if (is_admin()) {
                return $comment_text;
            }
            if (isset($ecr_settings['enable_comment']) && $ecr_settings['enable_comment'] === "enable") {
                ob_start();
                include(ECR_LITE_PLUGIN_PATH . '/inc/frontend/like-dislike-html.php');
                $like_dislike_html = ob_get_contents();
                ob_end_clean();
                if ($ecr_settings['position'] == 'after') {
                    $comment_text .= $like_dislike_html;
                } else {
                    $comment_text = $like_dislike_html . $comment_text;
                }
                return $comment_text;
            }else {
                return $comment_text;
            }
        } 

        function ecr_settings() {
            include(ECR_LITE_PLUGIN_PATH . 'inc/backend/settings.php');
        }

        function custom_dynamic_css() {
            include(ECR_LITE_PLUGIN_PATH . '/inc/frontend/custom_styling.php');
        }

        function ecr_number_format($input, $number_format) {
            if ($number_format == 'format_1') {
                return $input;
            } else if ($number_format == 'format_2') {
                return number_format((float) $input);
            } else {
                $prev = $input;
                $input = number_format((float) $input);
                $input_count = substr_count($input, ',');
                $arr = array(1 => 'K', 'M', 'B', 'T');
                if (isset($arr[(int) $input_count])) {
                    return substr($input, 0, (-1 * $input_count) * 4) . $arr[(int) $input_count];
                } else {
                    return $prev;
                }
            }
        }

        function print_array($array) {
            echo "<pre>";
            print_r($array);
            echo "</pre>";
        }
    }

    new ECR_LITE_Class();
}