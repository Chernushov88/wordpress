<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
<style>
<?php
$ecr_settings = get_option('ecr_settings');
// like icon color
if (isset($ecr_settings['like_icon_color']) && $ecr_settings['like_icon_color'] != '') {
    echo '.ecr-like-dislike-wrapper .ecr-like-dislike-trigger span.ecr-liked-wrap
            {color: ' . esc_attr($ecr_settings['like_icon_color']) . '!important;}' ;
}
//dislike icon color
if (isset($ecr_settings['dislike_icon_color']) && $ecr_settings['dislike_icon_color'] != '') {
    echo '.ecr-like-dislike-wrapper .ecr-like-dislike-trigger span.ecr-disliked-wrap
            {color: ' . esc_attr($ecr_settings['dislike_icon_color']) . '!important;}' ;
}
//icon background color
if (isset($ecr_settings['iconbackground_color']) && $ecr_settings['iconbackground_color'] != '') {
    echo'.ecr-like-dislike-wrapper.ecr-template-1 .ecr-like-dislike-trigger .ecr-liked-wrap,
        .ecr-like-dislike-wrapper.ecr-template-1 .ecr-like-dislike-trigger .ecr-disliked-wrap,
        .ecr-like-dislike-wrapper.ecr-template-1.ecr-seperately .ecr-common-wrap,
        .ecr-like-dislike-wrapper.ecr-template-4 .ecr-like-dislike-trigger .ecr-liked-wrap,
        .ecr-like-dislike-wrapper.ecr-template-4 .ecr-like-dislike-trigger .ecr-disliked-wrap
        {background: ' . esc_attr($ecr_settings['iconbackground_color']) . '!important;
        border: ' . esc_attr($ecr_settings['iconbackground_color']) . '!important;}' ;
}
//icon hover color
if (isset($ecr_settings['hover_color']) && $ecr_settings['hover_color'] != '') {
    echo '.ecr-common-wrap span:hover
    {color: ' . esc_attr($ecr_settings['hover_color']) . '!important;}' ;
}
//count color
if (isset($ecr_settings['count_color']) && $ecr_settings['count_color'] != '') {
    echo '.ecr-like-dislike-wrapper.ecr-template-2 .ecr-count-wrap span,
            .ecr-like-dislike-wrapper.ecr-template-3.ecr-together .ecr-count-wrap span,
            .ecr-like-dislike-wrapper.ecr-template-3.ecr-seperately .ecr-count-wrap span,
            .ecr-like-dislike-wrapper.ecr-template-4 .ecr-count-wrap span,
            .ecr-like-dislike-wrapper.ecr-template-5 .ecr-count-wrap span,
            .ecr-like-dislike-wrapper.ecr-template-6 .ecr-count-wrap span
            {color: ' . esc_attr($ecr_settings['count_color']) . '!important;}' ;
}
//count background color
if (isset($ecr_settings['count_background_color']) && $ecr_settings['count_background_color'] != '') {
    echo '.ecr-like-dislike-wrapper.ecr-template-7 .ecr-count-wrap,
            .ecr-like-dislike-wrapper.ecr-template-2.ecr-together .ecr-count-wrap,
            .ecr-like-dislike-wrapper.ecr-template-3.ecr-together .ecr-count-wrap,
            .ecr-like-dislike-wrapper.ecr-template-4.ecr-count-wrap,
            .ecr-like-dislike-wrapper.ecr-template-5 .ecr-count-wrap,
            .ecr-like-dislike-wrapper.ecr-template-6 .ecr-count-wrap
            {background:' . esc_attr($ecr_settings['count_background_color']) . '!important;}' ;

    echo '.ecr-like-dislike-wrapper.ecr-template-4.ecr-seperately .ecr-count-wrap:after,
          .ecr-like-dislike-wrapper.ecr-template-5.ecr-seperately .ecr-count-wrap:after,
          .ecr-like-dislike-wrapper.ecr-template-6.ecr-seperately .ecr-count-wrap:after
          {color:' . esc_attr($ecr_settings['count_background_color']) . '!important;}' ;
}
//already liked icon color
if (isset($ecr_settings['liked_color']) && $ecr_settings['liked_color'] != '') {
    echo '.ecr-like-dislike-wrapper .ecr-common-wrap  .ecr-already-liked span
    {color: ' . esc_attr($ecr_settings['liked_color']) . ' !important;}' ;
}
//already disliked icon color
if (isset($ecr_settings['disliked_color']) && $ecr_settings['disliked_color'] != '') {
    echo '.ecr-like-dislike-wrapper .ecr-common-wrap .ecr-already-disliked span
    {color: ' . esc_attr($ecr_settings['disliked_color']) . '!important;}' ;
}
//already liked/disliked background color
if (isset($ecr_settings['ldbackground_color']) && $ecr_settings['ldbackground_color'] != '') {
    echo '.ecr-like-dislike-wrapper.ecr-template-1 .ecr-common-wrap  .ecr-already-liked .ecr-liked-wrap, .ecr-like-dislike-wrapper.ecr-template-1 .ecr-common-wrap  .ecr-already-disliked .ecr-disliked-wrap,
            .ecr-like-dislike-wrapper.ecr-template-4 .ecr-common-wrap  .ecr-already-liked .ecr-liked-wrap, .ecr-like-dislike-wrapper.ecr-template-4 .ecr-common-wrap  .ecr-already-disliked .ecr-disliked-wrap
             {background: ' . esc_attr($ecr_settings['ldbackground_color']) . ' !important;}' ;

    echo '.ecr-like-dislike-wrapper.ecr-template-1.ecr-seperately .ecr-have-liked, .ecr-like-dislike-wrapper.ecr-template-1.ecr-seperately .ecr-have-disliked,
        .ecr-like-dislike-wrapper.ecr-template-1 .ecr-common-wrap  .ecr-already-liked .ecr-liked-wrap, .ecr-like-dislike-wrapper.ecr-template-1 .ecr-common-wrap  .ecr-already-disliked .ecr-disliked-wrap,
            .ecr-like-dislike-wrapper.ecr-template-4 .ecr-common-wrap  .ecr-already-liked .ecr-liked-wrap, .ecr-like-dislike-wrapper.ecr-template-4 .ecr-common-wrap  .ecr-already-disliked .ecr-disliked-wrap{
             border:  1px solid ' . esc_attr($ecr_settings['ldbackground_color']) . ' !important ;}' ;
    }
//Custom CSS
if (isset($ecr_settings['custom_css']) && $ecr_settings['custom_css'] != '') {
    echo $ecr_settings['custom_css'];
}
// Template based changes
//CSS based on like icon color of the templates
if (isset($ecr_settings['like_icon_color']) && $ecr_settings['like_icon_color'] != '') {
    echo '.ecr-like-dislike-wrapper.ecr-template-1.ecr-together .ecr-like-dislike-trigger.ecr-like-trigger span,
    .ecr-like-dislike-wrapper.ecr-template-1.ecr-together .ecr-count-wrap,
    .ecr-like-dislike-wrapper.ecr-template-4 .ecr-like-dislike-trigger.ecr-like-trigger span
    { border: 1px solid' . esc_attr($ecr_settings['like_icon_color']) . '!important;}' ;

    echo '.ecr-like-dislike-wrapper.ecr-template-1.ecr-together span.ecr-count-wrapper{ color: ' . esc_attr($ecr_settings['like_icon_color']) . '!important;}' ;
}
//CSS based on dislike icon color of the templates
if (isset($ecr_settings['dislike_icon_color']) && $ecr_settings['dislike_icon_color'] != '') {
    echo '.ecr-like-dislike-wrapper.ecr-template-1.ecr-together .ecr-like-dislike-trigger.ecr-dislike-trigger span,
    .ecr-like-dislike-wrapper.ecr-template-4 .ecr-like-dislike-trigger.ecr-dislike-trigger span
    { border: 1px solid' . esc_attr($ecr_settings['like_icon_color']) . '!important;}' ;
}
//CSS based on icon background color of the templates
if (isset($ecr_settings['iconbackground_color']) && $ecr_settings['iconbackground_color'] != '') {
    echo'.ecr-like-dislike-wrapper.ecr-template-1.ecr-seperately .ecr-common-wrap{background:' . esc_attr($ecr_settings['iconbackground_color']) . '!important;}';
}
?>
</style>

