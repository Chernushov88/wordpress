<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
<div class="text-menu-wrap settings-content" id="CustomText" style="display:none; ">
    <div class="ecr-subhead">
        <h2><?php esc_html_e('CUSTOM TEXT SETTINGS', ECR_LITE_PLUGIN_TD) ?></h2>
    </div>
    <?php $ecr_settings = get_option('ecr_settings'); ?>
    <div class="ecr-row-odd">
        <div class="error-message-div ecr-configuration-div">
            <div class="ecr-title-div">
                <h3><?php esc_html_e('Error Message', ECR_LITE_PLUGIN_TD) ?> </h3>
            </div>
            <div class="ecr-option-value">
                <label class="error">
                    <input type="text" name="ecr_settings[error_message]" placeholder="<?php esc_html_e('Please Login First', ECR_LITE_PLUGIN_TD) ?>" value="<?php echo (isset($ecr_settings['error_message'])) ? esc_attr($ecr_settings['error_message']) : ''; ?>"/>
                </label>
                <p class="description"> <?php esc_html_e('Please enter the message that you\'d like to show while non-logged-in user tries to like/dislike.', ECR_LITE_PLUGIN_TD) ?> </p>
            </div>
        </div>
    </div>
    <div class="ecr-row-even">
        <div class="like-hover-text-div ecr-configuration-div">
            <div class="ecr-title-div">
                <h3><?php esc_html_e('Like Hover Text', ECR_LITE_PLUGIN_TD) ?> </h3>
            </div>
            <div class="ecr-option-value">
                <label class="like_hover">
                    <input type="text" name="ecr_settings[like_hover]" placeholder="<?php esc_html_e('like', ECR_LITE_PLUGIN_TD) ?>" value="<?php echo (isset($ecr_settings['like_hover'])) ? esc_attr($ecr_settings['like_hover']) : ''; ?>"/>
                </label>
                <p class="description"> <?php esc_html_e('Please enter the like hover text that you wish to be displayed in the frontend on hover', ECR_LITE_PLUGIN_TD) ?> </p>
            </div>
        </div>
    </div>
    <div class="ecr-row-odd">
        <div class="like-hover-text-div ecr-configuration-div">
            <div class="ecr-title-div">
                <h3><?php esc_html_e('Dislike Hover Text', ECR_LITE_PLUGIN_TD) ?> </h3>
            </div>
            <div class="ecr-option-value">
                <label class="dislike_hover">
                    <input type="text" name="ecr_settings[dislike_hover]" placeholder="<?php esc_html_e('dislike', ECR_LITE_PLUGIN_TD) ?>" value="<?php echo (isset($ecr_settings['dislike_hover'])) ? esc_attr($ecr_settings['dislike_hover']) : ''; ?>"/>
                </label>
                <p class="description"> <?php esc_html_e('Please enter the dislike hover text that you wish to be displayed in the frontend on hover', ECR_LITE_PLUGIN_TD) ?> </p>
            </div>
        </div>
    </div>
</div>