<?php defined('ABSPATH') or die("No script kiddies please!");

$comment_id = $comment->comment_ID;
$ecr_settings = get_option('ecr_settings');
$total_count = get_comment_meta($comment_id, 'ecr_total_count', true);
$total_count = apply_filters('ecr_total_count', $total_count, $comment_id);
$number_format = (isset($ecr_settings['number_format']) && $ecr_settings['number_format'] != '') ? esc_attr($ecr_settings['number_format']) : 'format_1';
$total_count = $this->ecr_number_format($total_count, $number_format);
$like_count = get_comment_meta($comment_id, 'ecr_like_count', true);
$like_count = apply_filters('ecr_like_count', $like_count, $comment_id);
$like_count = $this->ecr_number_format($like_count, $number_format);
$dislike_count = get_comment_meta($comment_id, 'ecr_dislike_count', true);
$dislike_count = apply_filters('ecr_dislike_count', $dislike_count, $comment_id);
$dislike_count = $this->ecr_number_format($dislike_count, $number_format);
$count_option = (isset($ecr_settings['count_option']) && $ecr_settings['count_option'] != '') ? esc_attr($ecr_settings['count_option']) : 'together';
$template = (isset($ecr_settings['template_number']) && $ecr_settings['template_number'] != '') ? esc_attr($ecr_settings['template_number']) : 'template-1';
$like_hover = (isset($ecr_settings['like_hover']) && $ecr_settings['like_hover'] != '') ? esc_attr($ecr_settings['like_hover']) : 'Like';
$dislike_hover = (isset($ecr_settings['dislike_hover']) && $ecr_settings['dislike_hover'] != '') ? esc_attr($ecr_settings['dislike_hover']) : 'Dislike';
$icontype = "ecr-available-icon";
$icon_liked = '';
$icon_disliked = '';

if (is_user_logged_in()) {
    $current_user = wp_get_current_user();
    $user_id = $current_user->ID;
    $liked_ids = get_comment_meta($comment_id, 'ecr_likedids', true);
    if (empty($liked_ids)) {
        $liked_ids = array();
    }
    $disliked_ids = get_comment_meta($comment_id, 'ecr_dislikedids', true);
    if (empty($disliked_ids)) {
        $disliked_ids = array();
    }
    if (in_array($user_id, $liked_ids)) {
        $liked = 'ecr-already-liked';
        $disliked = '';
        $icon_liked = 'ecr-have-liked';
        $icon_disliked = '';
    } else if (in_array($user_id, $disliked_ids)) {
        $disliked = 'ecr-already-disliked';
        $liked = '';
        $icon_liked = '';
        $icon_disliked = 'ecr-have-disliked';
    } else {
        $liked = '';
        $disliked = '';
        $icon_liked = '';
        $icon_disliked = '';
    }
} else {
    $user_id = '';
    $liked = '';
    $disliked = '';
    $icon_liked = '';
    $icon_disliked = '';
}

$numbering = (isset($ecr_settings['count_option']) && $ecr_settings['count_option'] != '') ? esc_attr($ecr_settings['count_option']) : 'together';
?>
<div class="ecr-message" id= "ecr-message-<?php echo esc_attr($comment_id); ?>"></div>
<div class=" ecr-clearfix ecr-like-dislike-wrapper <?php echo 'ecr-' . $template; ?> <?php echo 'ecr-' . $reaction; ?> <?php echo 'ecr-' . $numbering; ?> <?php echo $icontype; ?> " data-count="<?php echo 'ecr-' . $numbering; ?>" data-icon-type="<?php echo $icontype; ?>" data-emoji="<?php echo $reaction; ?>">
    <?php if (isset($ecr_settings['like']) && $ecr_settings['like'] === "enable") { ?>
        <div class="ecr-like-wrap ecr-common-wrap <?php echo $icon_liked; ?> " >
            <div class="ecr-like-trigger ecr-like-dislike-trigger <?php echo $liked; ?>" data-comment-id="<?php echo $comment_id; ?>" data-trigger-type="like" data-count-option="<?php echo $count_option; ?>"  title=" <?php echo $like_hover; ?>">
                <?php
                    $likeicon = (isset($ecr_settings['likeicon']) && $ecr_settings['likeicon'] != '') ? $ecr_settings['likeicon'] : 'fa fa-thumbs-o-up';
                    ?>
                    <span class = "<?php echo $likeicon; ?> ecr-liked-wrap ecr-like-animation-<?php echo $comment_id; ?> animated " > </span>
            </div>
            <?php
            if (isset($ecr_settings['count_option']) && $ecr_settings['count_option'] != 'together') {
                if (isset($ecr_settings['count']) && $ecr_settings['count'] === "enable") {
                    ?>
                    <div class="ecr-count-wrap  ecr-common-wrap ">
                        <span class="ecr-like-count-wrap ecr-count-wrapper" id="ecr-like-count-<?php echo $comment_id; ?>"><?php echo (empty($like_count)) ? 0 : $like_count; ?>
                        </span>

                    </div> <?php
                }
            }
            ?>
        </div>
    <?php } 
    if (isset($ecr_settings['count_option']) && $ecr_settings['count_option'] == 'together') {
        if (isset($ecr_settings['count']) && $ecr_settings['count'] === "enable") {
            ?>
            <div class="ecr-count-wrap ecr-only-total-count-wrap ecr-common-wrap ">
                <span class="ecr-total-count-wrap ecr-count-wrapper" id="ecr-total-count-<?php echo $comment_id; ?>"><?php echo (empty($total_count)) ? 0 : $total_count; ?> </span>

            </div> <?php
        }
    }
    if (isset($ecr_settings['dislike']) && $ecr_settings['dislike'] === "enable") { ?>
        <div class="ecr-dislike-wrap ecr-common-wrap <?php echo $icon_disliked; ?>">
            <div class="ecr-dislike-trigger ecr-like-dislike-trigger <?php echo $disliked; ?>   " data-comment-id="<?php echo $comment_id; ?>" data-trigger-type="dislike" data-count-option="<?php echo $count_option; ?>" title=" <?php echo $dislike_hover ; ?>"> <?php
                    $dislikeicon = (isset($ecr_settings['dislikeicon']) && $ecr_settings['dislikeicon'] != '') ? esc_attr($ecr_settings['dislikeicon']) : 'fa fa-thumbs-o-down';
                    ?>
                    <span class="<?php echo $dislikeicon ?> ecr-disliked-wrap ecr-dislike-animation-<?php echo $comment_id; ?> animated <?php echo $disliked; ?>" ></span>    
            </div>
            <?php
            if (isset($ecr_settings['count_option']) && $ecr_settings['count_option'] != 'together') {
                if (isset($ecr_settings['count']) && $ecr_settings['count'] === "enable") {
                    ?>
                    <div class="ecr-count-wrap  ecr-common-wrap ">
                        <span class="ecr-dislike-count-wrap ecr-count-wrapper" id="ecr-dislike-count-<?php echo $comment_id; ?>"><?php echo (empty($dislike_count)) ? 0 : $dislike_count; ?>
                        </span>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <?php 
    } ?>
</div>