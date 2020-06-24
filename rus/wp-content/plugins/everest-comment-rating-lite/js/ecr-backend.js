jQuery(document).ready(function ($) {
    
    jQuery('.cpa-color-picker').wpColorPicker();

    $('.ecr-backend-settings').on('click','.menu-click',function () {

        $('.menu-click').removeClass('ecr-menu-active');
        $(this).addClass('ecr-menu-active');
        var menu_id = $(this).attr('id');
        var link = $(this).data('link');
        var pageURL = $(this).attr("href");
        
        $('.ecr-hashtag-save').find('input[type="hidden"]').val(pageURL);
        if (menu_id == 'configuration-menu') {
            $('.settings-content').hide();
            $('.customization-menu-wrap').hide();
            $('.display-menu-wrap').hide();
            $('.howtouse-menu-wrap').hide();
            $('.aboutus-menu-wrap').hide();
            $('.text-menu-wrap').hide();
            $('.configuration-menu-wrap').show();
            $('.ecr-submit-button').show();
        }
        if (menu_id == 'display-menu') {
            $('.customization-menu-wrap').hide();
            $('.configuration-menu-wrap').hide();
            $('.howtouse-menu-wrap').hide();
            $('.aboutus-menu-wrap').hide();
            $('.text-menu-wrap').hide();
            $('.display-menu-wrap').show();
            $('.ecr-submit-button').show();
        }
        if (menu_id == 'customization-menu') {
            $('.configuration-menu-wrap').hide();
            $('.display-menu-wrap').hide();
            $('.howtouse-menu-wrap').hide();
            $('.aboutus-menu-wrap').hide();
            $('.text-menu-wrap').hide();
            $('.customization-menu-wrap').show();
            $('.ecr-submit-button').show();
        }
        if (menu_id == 'text-menu') {
            $('.configuration-menu-wrap').hide();
            $('.display-menu-wrap').hide();
            $('.customization-menu-wrap').hide();
            $('.howtouse-menu-wrap').hide();
            $('.aboutus-menu-wrap').hide();
            $('.text-menu-wrap').show();
            $('.ecr-submit-button').show();
        }
        if (menu_id == 'howtouse-menu') {
            $('.configuration-menu-wrap').hide();
            $('.display-menu-wrap').hide();
            $('.customization-menu-wrap').hide();
            $('.aboutus-menu-wrap').hide();
            $('.text-menu-wrap').hide();
            $('.ecr-submit-button').hide();
            $('.howtouse-menu-wrap').show();
        }
        if (menu_id == 'aboutus-menu') {
            $('.ecr-submit-button').hide();
            $('.configuration-menu-wrap').hide();
            $('.display-menu-wrap').hide();
            $('.customization-menu-wrap').hide();
            $('.text-menu-wrap').hide();
            $('.howtouse-menu-wrap').hide();
            $('.aboutus-menu-wrap').show();
        }
    });
    
    $('.menu-click').each(function(){
        var pageURL = $(this).attr("href");
        if(pageURL == location.hash){
            $(this).click();
        }
    });

    //for like icon
    $('.select-likeicon-dropdown').click(function () {
        if ($(this).val() == 'available-icons') {
            $('.ecr-available-like-icons').show();
        } else {
            $('.ecr-available-like-icons').hide();
        }
        if ($(this).val() == 'upload-custom-icons') {
            $('.ecr-upload-custom-like-icons').show();
        } else {
            $('.ecr-upload-custom-like-icons').hide();
        }
    });

    //for dislike icon
    $('.select-dislikeicon-dropdown').click(function () {
        if ($(this).val() == 'available-icons') {
            $('.ecr-available-dislike-icons').show();
        } else {
            $('.ecr-available-dislike-icons').hide();
        }
        if ($(this).val() == 'upload-custom-icons') {
            $('.ecr-upload-custom-dislike-icons').show();
        } else {
            $('.ecr-upload-custom-dislike-icons').hide();
        }
    });

    //for Loader
    $('.select-loader-dropdown').click(function () {
        if ($(this).val() == 'available-loaders') {
            $('.ecr-available-loaders').show();
        } else {
            $('.ecr-available-loaders').hide();
        }
        if ($(this).val() == 'upload-custom-loaders') {
            $('.ecr-upload-custom-loaders').show();
        } else {
            $('.ecr-upload-custom-loaders').hide();
        }
    });

    //show/hide total count and show count seperately
    $('.status-mode').change(function () {
        if ($(this).val() == 'enable') {
            $('.ecr-configuration-menu-wrap').show();
        } else {
            $('.ecr-configuration-menu-wrap').hide();
        }
    });

    $('.ecr_cr_location').change(function () {
        if ($(this).val() == 'specific_locations') {
            $('.ecr-configuration-location-wrap').show();
        } else {
            $('.ecr-configuration-location-wrap').hide();
        }
    });

    $('#ecr-animation').change(function () {
        if ($(this).is(":checked")) {
            $('.ecr-configuration-animation-menu-wrap').show();
        } else {
            $('.ecr-configuration-animation-menu-wrap').hide();
        }
    });

    // To display the clicked icon instantly for like icon
    $('.ecr-statusmode-like').change(function () {
        var value = $(this).val();
        $('#ecr-liked-wrap').removeClass().addClass(value);
    });

    // To display the clicked icon instantly for dislike icon
    $('.ecr-statusmode-dislike').change(function () {
        var value = $(this).val();
        $('#ecr-disliked-wrap').removeClass().addClass(value);
    });

    //For highlighting the selected like icon
    $('.ecr-like-icon').click(function () {
        $('.ecr-like-icon-wrap').removeClass('ecr-current-like-icon');
        $(this).closest('.ecr-like-icon-wrap').addClass('ecr-current-like-icon');
    });

    $('.ecr-dislike-icon').click(function () {
        $('.ecr-dislike-icon-wrap').removeClass('ecr-current-dislike-icon');
        $(this).closest('.ecr-dislike-icon-wrap').addClass('ecr-current-dislike-icon');
    });

    // Template Display for Icons
    $(".ecr-common").first().addClass("temp-active");
    $('#icon-template').on('change', function () {
        template_value = $(this).val();
        var array_break = template_value.split('-');
        var current_id = array_break[1];
        if (current_id == '1' || current_id == '2' || current_id == '3' || current_id == '4' || current_id == '5' || current_id == '6' || current_id == '7') {
            $('#ecr-temp-demo-' + current_id).removeClass('temp-active');
            $('.ecr-common').hide();
            $(this).addClass('temp-active');
            $('#ecr-temp-demo-' + current_id).show();
        } else {
            $('#ecr-temp-demo-' + current_id).removeClass('temp-active');
            $('.ecr-common').hide();
            $(this).addClass('temp-active');
            $('#ecr-temp-demo-' + current_id).show();
        }
    });

    if ($("#icon-template option:selected")[0]) {
        cur_temp_val = $('#icon-template option:selected').val();
        var array_break = cur_temp_val.split('-');
        var current_id = array_break[1];
        $('.ecr-common').hide();
        $('#ecr-temp-demo-' + current_id).show();
    }

    $(".select-animation-dropdown").change(function () {
        var animation= $(this).val();
        $(".ecr-animation").removeClass();
        $(".ecr-backend-animation").find("#ecr-animation-id").addClass("ecr-animation animated").addClass(animation);
    });

});