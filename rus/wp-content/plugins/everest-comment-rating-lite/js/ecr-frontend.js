jQuery(document).ready(function ($) {
    // for removing unnecessary p tags from frontend
    $('.ecr-like-dislike-wrapper p').filter(function () {
        return $.trim($(this).text()) === '' && $(this).children().length == 0
    }).remove()
    // for removing unnecessary br tags from frontend
    $('.ecr-like-dislike-wrapper').find('br').remove()

    // For like/Dislike and total counter
    $('.ecr-like-dislike-trigger').click(function (e) {
        e.preventDefault();
        var $this = $(this);
        var comment_id = $(this).data('comment-id');
        var count_option = $(this).data('count-option');
        var trigger_type = $(this).data('trigger-type');
        if (count_option == 'together') {
            if (trigger_type == 'like') {
                var current_count = $this.closest('.ecr-like-dislike-wrapper').find('.ecr-only-total-count-wrap .ecr-count-wrapper').html();
                var end_character = current_count.slice(-1);
                if ($this.hasClass("ecr-already-liked")){
                    if(end_character=="K" || end_character=="M" || end_character=="B" || end_character=="T") {
                        new_count = current_count;
                    } else{
                        var new_count = parseInt(current_count) - 1;
                    }
                }
                else{
                    if(end_character=="K" || end_character=="M" || end_character=="B" || end_character=="T") {
                        new_count = current_count;
                    } else{
                        var new_count = parseInt(current_count) + 1;
                    }
                }
            }
            if (trigger_type == "dislike"){
                var current_count = $this.closest('.ecr-like-dislike-wrapper').find('.ecr-only-total-count-wrap .ecr-count-wrapper').html();
                var end_character = current_count.slice(-1);
                if ($this.hasClass("ecr-already-disliked")){
                    if(end_character=="K" || end_character=="M" || end_character=="B" || end_character=="T") {
                        new_count = current_count;
                    } else{
                        var new_count = parseInt(current_count) + 1;
                    }
                }
                else{
                    if(end_character=="K" || end_character=="M" || end_character=="B" || end_character=="T") {
                        new_count = current_count;
                    } else{
                        var new_count = parseInt(current_count) - 1;
                    }
                }
            }
        } else {
            //alert('count_option_seperately');
            if (trigger_type == 'like') {
                var current_count = $this.closest('.ecr-common-wrap').find('.ecr-like-count-wrap').html();
                var end_character = current_count.slice(-1);
                if ($this.hasClass("ecr-already-liked")){
                    if(end_character=="K" || end_character=="M" || end_character=="B" || end_character=="T") {
                        new_count = current_count;
                    } else{
                        var new_count = parseInt(current_count) - 1;
                    }
                }
                else{
                    if(end_character=="K" || end_character=="M" || end_character=="B" || end_character=="T"){
                        new_count = current_count;
                    } else{
                        var new_count = parseInt(current_count) + 1;
                    }
                }
            }
            else {
                var current_count = $this.closest('.ecr-common-wrap').find('.ecr-dislike-count-wrap').html();
                var end_character = current_count.slice(-1);
                if ($this.hasClass("ecr-already-disliked")){
                    if(end_character=="K" || end_character=="M" || end_character=="B" || end_character=="T") {
                        new_count = current_count;
                    } else{
                        var new_count = parseInt(current_count) - 1;
                    }
                } else{
                    if(end_character=="K" || end_character=="M" || end_character=="B" || end_character=="T") {
                        new_count = current_count;
                    } else{
                        var new_count = parseInt(current_count) + 1;
                    }
                }
            }
        }
        var selector = $(this);
        var user_id = ecr_js_obj.user_id;
        var user_ip = ecr_js_obj.user_ip;
        var restriction = ecr_js_obj.restriction_check;
        var logged_in = ecr_js_obj.logged_in;
        var message = ecr_js_obj.error_message;
        var count_option = ecr_js_obj.count_option;
        var number_format = ecr_js_obj.number_format;
        if (logged_in == '1') {
            if ($this.hasClass('ecr-like-trigger')) {
                $this.toggleClass("ecr-already-liked");
                $this.parent().toggleClass("ecr-have-liked");
                $('.ecr-dislike-trigger', $this.closest(".ecr-like-dislike-wrapper")).removeClass("ecr-already-disliked");
                $this.parent().siblings().removeClass("ecr-have-disliked");
            }
            if ($this.hasClass('ecr-dislike-trigger')) {
                $this.toggleClass("ecr-already-disliked");
                $this.parent().toggleClass("ecr-have-disliked");
                $('.ecr-like-trigger', $this.closest(".ecr-like-dislike-wrapper")).removeClass("ecr-already-liked");
                $this.parent().siblings().removeClass("ecr-have-liked");
            }
            //for Immediate Change in Counts
            if (count_option == 'together') {
                $('#ecr-total-count-' + comment_id).html(new_count);
            }
            else {
                if (trigger_type == 'like') {
                    $('#ecr-like-count-' + comment_id).html(new_count);
                } else {
                    $('#ecr-dislike-count-' + comment_id).html(new_count);
                }
            }
            callRating_loggedIn(comment_id, user_id, logged_in, trigger_type, count_option,new_count, number_format, $this );
        } else {
            //not logged-in check
            $('#ecr-message-' + comment_id).html(ecr_js_obj.error_message).show();
            setTimeout(function () {
                $('#ecr-message-' + comment_id).fadeOut();
            }, 2000);
        }
    });

    /*
     * Only Logged In Users
     */
    function callRating_loggedIn(comment_id, user_id, logged_in, trigger_type, count_option, new_count, number_format, $this) {
        $.ajax({
            type: 'post',
            url: ecr_js_obj.ajax_url,
            data: {
                comment_id: comment_id,
                user_id: user_id,
                logged_in: logged_in,
                action: 'ecr_comment_ajax_action',
                type: trigger_type,
                count_option: count_option,
                number_format: number_format,
                _wpnonce: ecr_js_obj.ajax_nonce
            },
            beforeSend: function (xhr) {
            },
            success: function (res) {
                res = $.parseJSON(res);
                var latest_count = res.latest_count;
                var latest_like_count = res.latest_like_count;
                var latest_dislike_count = res.latest_dislike_count;
                if (count_option == 'together') {
                    $('#ecr-together-loader-' + comment_id).hide();
                    $('#ecr-total-count-' + comment_id).html(latest_count);
                }
                else {
                    if (trigger_type == 'like') {
                        $('#ecr-like-loader-' + comment_id).hide();
                        $('#ecr-like-count-' + comment_id).html(latest_count);
                        $('#ecr-dislike-count-' + comment_id).html(latest_dislike_count);
                    }
                    else {
                        $('#ecr-dislike-loader-' + comment_id).hide();
                        $('#ecr-dislike-count-' + comment_id).html(latest_count);
                        $('#ecr-like-count-' + comment_id).html(latest_like_count);
                    }
                }
            }
        });
    }
});