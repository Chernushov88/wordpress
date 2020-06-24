<?php 
defined('ABSPATH') or die("No script kiddies please!");
$like_icon_color = (isset($ecr_settings['like_icon_color']) && $ecr_settings['like_icon_color'] != "") ? $ecr_settings['like_icon_color'] : "";
$dislike_icon_color = (isset($ecr_settings['dislike_icon_color']) && $ecr_settings['dislike_icon_color'] != "") ? $ecr_settings['dislike_icon_color'] : "";
$iconbackground_color = (isset($ecr_settings['iconbackground_color']) && $ecr_settings['iconbackground_color'] != "") ? $ecr_settings['iconbackground_color'] : "";
$hover_color = (isset($ecr_settings['hover_color']) && $ecr_settings['hover_color'] != "") ? $ecr_settings['hover_color'] : "";
$count_color = (isset($ecr_settings['count_color']) && $ecr_settings['count_color'] != "") ? $ecr_settings['count_color'] : "";
$count_background_color = (isset($ecr_settings['count_background_color']) && $ecr_settings['count_background_color'] != "") ? $ecr_settings['count_background_color'] : "";
$liked_color = (isset($ecr_settings['liked_color']) && $ecr_settings['liked_color'] != "") ? $ecr_settings['liked_color'] : "";
$disliked_color = (isset($ecr_settings['disliked_color']) && $ecr_settings['disliked_color'] != "") ? $ecr_settings['disliked_color'] : "";
$ldbackground_color = (isset($ecr_settings['ldbackground_color']) && $ecr_settings['ldbackground_color'] != "") ? $ecr_settings['ldbackground_color'] : "";
$custom_css = (isset($ecr_settings['custom_css']) && $ecr_settings['custom_css'] != "") ? $ecr_settings['custom_css'] : "";
?>

<div class="customization-menu-wrap settings-content" id="Customization" style="display:none;" >
    <div class="ecr-subhead">
        <h2><?php esc_html_e('CUSTOMIZATION OPTION', ECR_LITE_PLUGIN_TD) ?></h2>
    </div>
    <div class="icon-color-options">
        <?php
        $ecr_settings = get_option('ecr_settings');
        ?>
        <div class="ecr-row-odd">
            <div class="ecr-field-wrap ecr-configuration-div" >
                <div class="ecr-title-div">
                    <label><?php esc_html_e('Like Icon Color', ECR_LITE_PLUGIN_TD); ?></label>
                </div>
                <div class="ecr-option-value">
                    <input type="text" name="ecr_settings[like_icon_color]" value="<?php echo esc_attr($like_icon_color); ?>" id="icon_bg_color" class="cpa-color-picker"  />
                    <p class="description"> <?php esc_html_e('Set like icon color or leave empty to set the default value', ECR_LITE_PLUGIN_TD) ?> </p>
                </div>
            </div>
        </div>
        <div class="ecr-row-even">
            <div class="ecr-field-wrap ecr-configuration-div" >
                <div class="ecr-title-div">
                    <label><?php esc_html_e('Dislike Icon Color', ECR_LITE_PLUGIN_TD); ?></label>
                </div>
                <div class="ecr-option-value">
                    <input type="text" name="ecr_settings[dislike_icon_color]" value="<?php echo esc_attr($dislike_icon_color); ?>" id="icon_bg_color" class="cpa-color-picker"  />
                    <p class="description"> <?php esc_html_e('Set dislike icon color or leave empty to set the default value', ECR_LITE_PLUGIN_TD) ?> </p>
                </div>
            </div>
        </div>
        <div class="ecr-row-odd">
            <div class="ecr-field-wrap ecr-configuration-div" 
                <?php if (isset($ecr_settings['template_number']) && $ecr_settings['template_number'] == "template-3"){
                    echo "style='display:none;'";
                } else{
                   echo "style='display:block;'";   
                }  ?> >
                <div class="ecr-title-div">
                    <label><?php esc_html_e('Like/Dislike Background Color', ECR_LITE_PLUGIN_TD); ?></label>
                </div>
                <div class="ecr-option-value">
                    <input type="text" name="ecr_settings[iconbackground_color]" value="<?php echo esc_attr($iconbackground_color); ?>" id="icon_bg_color" class="cpa-color-picker"  />
                    <p class="description"> <?php esc_html_e('Set like/dislike background color or leave empty to set the default value', ECR_LITE_PLUGIN_TD) ?> </p>
                </div>
            </div>
        </div>
        <div class="ecr-row-even">
            <div class="ecr-field-wrap ecr-configuration-div">
                <div class="ecr-title-div">
                    <label><?php esc_html_e('Like/Dislike Hover Color', ECR_LITE_PLUGIN_TD); ?></label>
                </div>
                <div class="ecr-option-value">
                    <input type="text" name="ecr_settings[hover_color]" value="<?php echo esc_attr($hover_color); ?>" id="icon_font_color" class="cpa-color-picker"  />
                    <p class="description"> <?php esc_html_e('Set like/dislike hover color or leave empty to set the default value', ECR_LITE_PLUGIN_TD) ?> </p>
                </div>
            </div>
        </div>
        <div class="ecr-row-odd">
            <div class="ecr-field-wrap ecr-configuration-div">
                <div class="ecr-title-div">
                    <label><?php esc_html_e('Count Font Color', ECR_LITE_PLUGIN_TD); ?> </label>
                </div>
                <div class="ecr-option-value">
                    <input type="text" name="ecr_settings[count_color]" value="<?php echo esc_attr($count_color); ?>" id="icon_hoverbg_color" class="cpa-color-picker"  /> 
                    <p class="description"> <?php esc_html_e('Set like/dislike count font color or leave empty to set the default value', ECR_LITE_PLUGIN_TD) ?> </p>
                </div>
            </div>
        </div>
        <div class="ecr-row-even">
            <div class="ecr-field-wrap ecr-configuration-div">
                <div class="ecr-title-div">
                    <label><?php esc_html_e('Count Background Color', ECR_LITE_PLUGIN_TD); ?> </label>
                </div>
                <div class="ecr-option-value">
                    <input type="text" name="ecr_settings[count_background_color]" value="<?php echo esc_attr($count_background_color); ?>" id="count_bg_color" class="cpa-color-picker"  /> 
                    <p class="description"> <?php esc_html_e('Set count background color or leave empty to set the default value', ECR_LITE_PLUGIN_TD) ?> </p>
                </div>
            </div>
        </div>
        <div class="ecr-row-odd">
            <div class="ecr-field-wrap ecr-configuration-div">
                <div class="ecr-title-div">  
                    <label><?php esc_html_e('Already Liked Icon Color', ECR_LITE_PLUGIN_TD); ?>  </label>
                </div> 
                <div class="ecr-option-value">
                    <input type="text" name="ecr_settings[liked_color]" value="<?php echo esc_attr($liked_color); ?>" id="icon_hovertext_color" class="cpa-color-picker"  />
                    <p class="description"> <?php esc_html_e('Set already liked icon color or leave empty to set the default value', ECR_LITE_PLUGIN_TD) ?> </p>
                </div>
            </div>
        </div>
        <div class="ecr-row-even">
            <div class="ecr-field-wrap ecr-configuration-div">  
                <div class="ecr-title-div">  
                    <label><?php esc_html_e('Already Disliked Icon Color', ECR_LITE_PLUGIN_TD); ?>  </label>
                </div> 
                <div class="ecr-option-value">
                    <input type="text" name="ecr_settings[disliked_color]" value="<?php echo esc_attr($disliked_color); ?>" id="icon_hovertext_color" class="cpa-color-picker"  />
                    <p class="description"> <?php esc_html_e('Set already disliked icon color or leave empty to set the default value', ECR_LITE_PLUGIN_TD) ?> </p>
                </div>
            </div>
        </div>
        <div class="ecr-row-odd">
            <div class="ecr-field-wrap ecr-configuration-div">  
                <div class="ecr-title-div">  
                    <label><?php esc_html_e('Already Liked/Disliked Background Color', ECR_LITE_PLUGIN_TD); ?>  </label>
                </div> 
                <div class="ecr-option-value">
                    <input type="text" name="ecr_settings[ldbackground_color]" value="<?php echo esc_attr($ldbackground_color); ?>" id="icon_hovertext_color" class="cpa-color-picker"  />
                    <p class="description"> <?php esc_html_e('Set already liked/disliked background color or leave empty to set the default value', ECR_LITE_PLUGIN_TD) ?> </p>
                </div>
            </div>
        </div>
    </div>
</div>