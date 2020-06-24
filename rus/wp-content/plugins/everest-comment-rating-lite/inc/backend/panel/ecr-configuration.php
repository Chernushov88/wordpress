<?php
defined('ABSPATH') or die("No script kiddies please!");
$like = (isset($ecr_settings['like']) && $ecr_settings['like'] != "") ? $ecr_settings['like'] : "";
?>
<div class="configuration-menu-wrap settings-content" id="Configurtion">
    <div class="ecr-subhead">
        <h2><?php esc_html_e('CONFIGURATION SETTINGS', ECR_LITE_PLUGIN_TD) ?></h2>
    </div>
    <?php $ecr_settings = get_option('ecr_settings'); ?>
    <div class="ecr-row-odd">
        <div class="ecr-cld-enable-div ecr-configuration-div" >
            <div class="ecr-title-div">
                <label for= "enable_comment">
                    <h3>  <?php esc_html_e('Enable Comment Like/Dislike', ECR_LITE_PLUGIN_TD) ?> </h3>
                </label>
            </div>
            <div class="ecr-option-value">
                <label class="enable_comment ecr-switch">
                    <input type="checkbox" name="ecr_settings[enable_comment]" id= "enable_comment" value="enable" <?php if (isset($ecr_settings['enable_comment']) && $ecr_settings['enable_comment'] === "enable") {
            ?>checked="checked"<?php } ?>>
                    <label class="ecr-configuration-checkbox" for ="enable_comment"></label>
                    <?php esc_html_e('Enable', ECR_LITE_PLUGIN_TD) ?>
                    <div class="ecr-check round"></div>
                </label>
                <p class="description"> <?php esc_html_e('Enable to Like/Dislike and React to the default WordPress Comments', ECR_LITE_PLUGIN_TD) ?> </p>             
            </div>
        </div>
    </div>
    <div class="ecr-row-even">
        <div class="like-button-div ecr-configuration-div" >
            <div class="ecr-title-div">
                <h3>  <?php esc_html_e('Like Button', ECR_LITE_PLUGIN_TD) ?> </h3>
            </div>
            <div class="ecr-option-value">
                <label class="enable">
                    <input type="radio" name="ecr_settings[like]" value="enable" <?php echo ((isset($ecr_settings['like'])) && $ecr_settings['like'] === "enable") ? "checked='checked'" : ""; ?> > <?php esc_html_e('Enable', ECR_LITE_PLUGIN_TD) ?>
                </label>
                <label class="disabled">
                    <input type="radio" name="ecr_settings[like]" value="disable" <?php echo (isset($ecr_settings['like']) && ($ecr_settings['like']) === "disable") ? "checked='checked'" : ""; ?> > <?php esc_html_e('Disable', ECR_LITE_PLUGIN_TD) ?>
                </label>
                <p class="description"> <?php esc_html_e('Enable/Disable to display/hide Like icon in the frontend', ECR_LITE_PLUGIN_TD) ?> </p>
            </div>
        </div>
    </div>
    <div class="ecr-row-odd">
        <div class="Dislike-button-div ecr-configuration-div">
            <div class="ecr-title-div">
                <h3> <?php esc_html_e('Dislike Button ', ECR_LITE_PLUGIN_TD) ?> </h3>
            </div>
            <div class="ecr-option-value">
                <label class="enabled">
                    <input type="radio" name="ecr_settings[dislike]" value="enable" <?php echo (isset($ecr_settings['dislike']) && ($ecr_settings['dislike']) === "enable") ? "checked='checked'" : ""; ?> > <?php esc_html_e('Enable', ECR_LITE_PLUGIN_TD) ?>
                </label>
                <label class="disabled">
                    <input type="radio" name="ecr_settings[dislike]" value="disable" <?php echo (isset($ecr_settings['dislike']) && ($ecr_settings['dislike']) === "disable") ? "checked='checked'" : ""; ?> > <?php esc_html_e('Disable', ECR_LITE_PLUGIN_TD) ?>
                </label>
                <p class="description"> <?php esc_html_e('Enable/Disable to display/hide Dislike icon in the frontend', ECR_LITE_PLUGIN_TD) ?> </p>
            </div>
        </div>
    </div>
    <div class="ecr-row-even">
        <div class="count-button-div ecr-configuration-div">
            <div class="ecr-title-div">
                <h3><?php esc_html_e('Total Count', ECR_LITE_PLUGIN_TD) ?> </h3>
            </div>
            <div class="ecr-option-value">
                <label class="enabled">
                    <input type="radio" name="ecr_settings[count]" class="status-mode enable" value="enable" <?php echo (isset($ecr_settings['count']) && ($ecr_settings['count']) === "enable") ? "checked='checked'" : ""; ?> > <?php esc_html_e('Enable', ECR_LITE_PLUGIN_TD) ?>
                </label>
                <label class="disabled">
                    <input type="radio" name="ecr_settings[count]" class="status-mode disable"  value="disable" <?php echo (isset($ecr_settings['count']) && ($ecr_settings['count']) === "disable") ? "checked='checked'" : ""; ?> > <?php esc_html_e('Disable', ECR_LITE_PLUGIN_TD) ?>
                </label>
                <p class="description"> <?php esc_html_e('Enable/Disable to display/hide Counter in the frontend', ECR_LITE_PLUGIN_TD) ?> </p>
            </div>
        </div>
        <div class="ecr-configuration-menu-wrap ecr-configuration-div" <?php echo ($ecr_settings['count'] === "disable") ? "style='display:none;'" : ""; ?>>
            <div class="ecr-title-div">
                <h3> <?php esc_html_e('Counter Selection', ECR_LITE_PLUGIN_TD) ?> </h3>
            </div>
            <div class="ecr-option-value " >
                <label class="show">
                    <input type="radio" name="ecr_settings[count_option]" value="together" <?php echo (isset($ecr_settings['count_option']) && $ecr_settings['count_option'] === "together") ? "checked='checked'" : ""; ?> > <?php esc_html_e('Show Total Count Only', 'ecr-lite'); ?>
                </label>
                <label class="hide">
                    <input type="radio" name="ecr_settings[count_option]" value="seperately" <?php echo (isset($ecr_settings['count_option']) && $ecr_settings['count_option'] === "seperately") ? "checked='checked'" : ""; ?> > <?php esc_html_e('Show Like and Dislike Count Separately', 'ecr-lite'); ?>
                </label>
                <p class="description"> <?php esc_html_e('Select either of the options to display the Count accordingly ', ECR_LITE_PLUGIN_TD) ?> </p>
            </div>
        </div>
    </div>
    <div class="ecr-row-odd">
        <div class="count-button-div ecr-configuration-div">
            <div class="ecr-title-div">
                <h3><?php esc_html_e('Number Format', ECR_LITE_PLUGIN_TD) ?> </h3>
            </div>
            <div class="ecr-option-value">
                <label class="enabled">
                    <input type="radio" name="ecr_settings[number_format]" value="format_1" <?php if (isset($ecr_settings['number_format']) && $ecr_settings['number_format'] == 'format_1') { ?> checked='checked' <?php } ?>> <?php esc_html_e('10000', ECR_LITE_PLUGIN_TD) ?>
                </label>
                <label class="disabled">
                    <input type="radio" name="ecr_settings[number_format]" value="format_2" <?php if (isset($ecr_settings['number_format']) && $ecr_settings['number_format'] == 'format_2') { ?> checked='checked' <?php } ?>> <?php esc_html_e('10,000', ECR_LITE_PLUGIN_TD) ?>
                </label>
                <label class="disabled">
                    <input type="radio" name="ecr_settings[number_format]" value="format_3" <?php if (isset($ecr_settings['number_format']) && $ecr_settings['number_format'] == 'format_3') { ?> checked='checked' <?php } ?>><?php esc_html_e('10K', ECR_LITE_PLUGIN_TD) ?>
                </label>
                <p class="description"> <?php esc_html_e('Select the kind of numbering you want to be displayed', ECR_LITE_PLUGIN_TD) ?> </p>
            </div>
        </div>
    </div>
    <div class="ecr-row-even">
        <div class="like-dislike-position-div ecr-configuration-div">
            <div class="ecr-title-div">
                <h3><?php esc_html_e('Like/Dislike Position', ECR_LITE_PLUGIN_TD) ?> </h3>
            </div>
            <div class="ecr-option-value">
                <label class="up">
                    <input type="radio" name="ecr_settings[position]" value="before" <?php echo (isset($ecr_settings['position']) && ($ecr_settings['position']) === "before") ? "checked='checked'" : ""; ?> > <?php esc_html_e('Before Comment', ECR_LITE_PLUGIN_TD) ?>
                </label>
                <label class="down">
                    <input type="radio" name="ecr_settings[position]" value="after" <?php echo (isset($ecr_settings['position']) && ($ecr_settings['position']) === "after") ? "checked='checked'" : ""; ?> > <?php esc_html_e('After Comment', ECR_LITE_PLUGIN_TD) ?>
                </label>
                <p class="description"> <?php esc_html_e('Select the position for the Like/dislike icons, react emojis and counter', ECR_LITE_PLUGIN_TD) ?> </p>
            </div>
        </div>
    </div>
</div>