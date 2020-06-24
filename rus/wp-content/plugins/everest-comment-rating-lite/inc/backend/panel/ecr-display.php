<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
<div class="display-menu-wrap settings-content" id="Display"  style="display:none;"> 
    <div class="ecr-subhead" >
        <h2><?php esc_html_e('DISPLAY SETTINGS', ECR_LITE_PLUGIN_TD); ?></h2>
    </div>
    <div class="display-options">
        <?php $ecr_settings = get_option('ecr_settings'); ?>
        <div class="ecr-row-odd">
            <div class="ecr-field-wrap ecr-configuration-div">
                <div class="ecr-title-div">
                    <label><?php esc_html_e('Choose Like Icon', ECR_LITE_PLUGIN_TD); ?></label>
                </div>
                <div class="ecr-option-value">
                    <div class="ecr-available-like-icons" <?php echo (isset($ecr_settings['select_likeicon_via']) && $ecr_settings['select_likeicon_via'] != "available-icons") ? "style='display:none;'" : ""; ?>>
                        <div class="ecr-selected-like-icon-wrap">
                            <?php $likeicon = (isset($ecr_settings['likeicon']) && $ecr_settings['likeicon'] != '') ? $ecr_settings['likeicon'] : 'fa fa-thumbs-o-up'; ?>
                            <span  class="ecr-preview">
                                <?php esc_html_e('Preview', ECR_LITE_PLUGIN_TD); ?>
                            </span>
                            <span class = "<?php echo $likeicon; ?> ecr-preview-icon" id="ecr-liked-wrap" > </span>
                        </div>
                        <label>
                            <div class= "ecr-like-icon-wrap" >
                                <input type="radio" id="likeicon1" name="ecr_settings[likeicon]" class="ecr-statusmode-like" value="fa fa-thumbs-o-up" <?php if (isset($ecr_settings['likeicon']) && $ecr_settings['likeicon'] === "fa fa-thumbs-o-up") {
                                    ?>checked="checked"<?php } ?>>
                                <label for= "likeicon1">
                                    <span class="fa fa-thumbs-o-up ecr-like-icon" aria-hidden="true"></span> 
                                </label>
                            </div>
                            <div class= "ecr-like-icon-wrap" >
                                <input type="radio" id="likeicon2" name="ecr_settings[likeicon]" class="ecr-statusmode-like" value="fa fa-thumbs-up" <?php if (isset($ecr_settings['likeicon']) && $ecr_settings['likeicon'] === "fa fa-thumbs-up") {
                                    ?>checked="checked"<?php } ?>>
                                <label for= "likeicon2">
                                    <span class="fa fa-thumbs-up ecr-like-icon" aria-hidden="true"></span>
                                </label>
                            </div>
                            <div class= "ecr-like-icon-wrap" >
                                <input type="radio" id="likeicon3" name="ecr_settings[likeicon]" class="ecr-statusmode-like" value="fa fa-smile-o" <?php if (isset($ecr_settings['likeicon']) && $ecr_settings['likeicon'] === "fa fa-smile-o") {
                                    ?>checked="checked"<?php } ?>>
                                <label for= "likeicon3">
                                    <span class="fa fa-smile-o ecr-like-icon" aria-hidden="true"></span>
                                </label>
                            </div>
                            <div class= "ecr-like-icon-wrap ">
                                <input type="radio" id="likeicon6" name="ecr_settings[likeicon]" class="ecr-statusmode-like" value="dashicons dashicons-plus" <?php if (isset($ecr_settings['likeicon']) && $ecr_settings['likeicon'] === "dashicons dashicons-plus") {
                                    ?>checked="checked"<?php } ?>>
                                <label for= "likeicon6">
                                    <span class="dashicons dashicons-plus ecr-like-icon"></span>
                                </label>
                            </div>
                        </label>
                    </div>
                </div> 
            </div>
        </div>
        <div class="ecr-row-even">
            <div class="ecr-field-wrap ecr-configuration-div">
                <div class="ecr-title-div">
                    <label><?php esc_html_e('Choose DisLike Icon', ECR_LITE_PLUGIN_TD); ?></label>
                </div>
                <div class="ecr-option-value">
                    <div class="ecr-available-dislike-icons" <?php echo (isset($ecr_settings['select_dislikeicon_via']) && $ecr_settings['select_dislikeicon_via'] != "available-icons") ? "style='display:none;'" : ""; ?>>
                        <div class="selected-dislike-icon-wrap">
                            <?php $dislikeicon = (isset($ecr_settings['dislikeicon']) && $ecr_settings['dislikeicon'] != '') ? $ecr_settings['dislikeicon'] : 'fa fa-thumbs-o-up'; ?>
                            <span  class="ecr-preview">
                                <?php esc_html_e('Preview', ECR_LITE_PLUGIN_TD); ?>
                            </span>
                            <span class = "<?php echo $dislikeicon; ?> ecr-preview-icon" id="ecr-disliked-wrap" > </span>
                        </div>
                        <label>
                            <div class="ecr-dislike-icon-wrap">
                                <input type="radio" id="dislikeicon1" name="ecr_settings[dislikeicon]" class="ecr-statusmode-dislike" value="fa fa-thumbs-o-down"
                                <?php if (isset($ecr_settings['dislikeicon']) && $ecr_settings['dislikeicon'] === "fa fa-thumbs-o-down") {
                                    ?>checked="checked"<?php } ?>>
                                <label for= "dislikeicon1">
                                    <span class="fa fa-thumbs-o-down ecr-dislike-icon" aria-hidden="true"></span>
                                </label>
                            </div>
                            <div class="ecr-dislike-icon-wrap">
                                <input type="radio" id="dislikeicon2" name="ecr_settings[dislikeicon]" class="ecr-statusmode-dislike" value="fa fa-thumbs-down"
                                <?php if (isset($ecr_settings['dislikeicon']) && $ecr_settings['dislikeicon'] === "fa fa-thumbs-down") {
                                    ?>checked="checked"<?php } ?>>
                                <label for= "dislikeicon2">
                                    <span class="fa fa-thumbs-down ecr-dislike-icon" aria-hidden="true"></span>
                                </label>
                            </div>
                            <div class="ecr-dislike-icon-wrap" >
                                <input type="radio" id="dislikeicon3" name="ecr_settings[dislikeicon]" class="ecr-statusmode-dislike" value="fa fa-frown-o"
                                <?php if (isset($ecr_settings['dislikeicon']) && $ecr_settings['dislikeicon'] === "fa fa-frown-o") {
                                    ?>checked="checked"<?php } ?>>
                                <label for= "dislikeicon3">
                                    <span class="fa fa-frown-o ecr-dislike-icon" aria-hidden="true"></span>
                                </label>
                            </div>
                            <div class="ecr-dislike-icon-wrap">
                                <input type="radio" id="dislikeicon6" name="ecr_settings[dislikeicon]" class="ecr-statusmode-dislike" value="dashicons dashicons-minus"
                                <?php if (isset($ecr_settings['dislikeicon']) && $ecr_settings['dislikeicon'] === "dashicons dashicons-minus") {
                                    ?>checked="checked"<?php } ?>>
                                <label for= "dislikeicon6">
                                    <span class="dashicons dashicons-minus ecr-dislike-icon"></span>
                                </label>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="ecr-row-odd">
            <div class="ecr-field-wrap ecr-configuration-div">
                <div class="ecr-title-div">
                    <label for="ecr_settings[template_number]" class="display-label-controller">
                        <?php esc_html_e('Comment Rating Template', ECR_LITE_PLUGIN_TD); ?>
                    </label>
                </div>
                <div class="ecr-menu-inner-field ecr-option-value">
                    <select name="ecr_settings[template_number]" id="icon-template" class="ecr-display template-dropdown" size="1" >
                        <?php for ($i = 1; $i <= 4; $i++) { ?>
                            <option class="ecr-temp" value="template-<?php echo $i; ?>" <?php if (isset($ecr_settings['template_number']) && $ecr_settings['template_number'] == 'template-' . $i) { ?>selected="selected"<?php } ?>>
                                <?php
                                esc_html_e('Template', ECR_LITE_PLUGIN_TD);
                                echo " " . $i;
                                ?></option>
                        <?php } ?>
                    </select>
                    <div class="ecr-template-demo" >
                        <?php for ($cnt = 1; $cnt <= 4; $cnt++) { ?>
                            <div class="ecr-common" id="ecr-temp-demo-<?php echo $cnt; ?>" <?php if ($cnt != 1) { ?>style="display:none;"<?php } ?>>
                                <p>Template <?php echo $cnt; ?> Preview</p>
                                <img src="<?php echo ECR_LITE_PLUGIN_URL . 'img/template/template-' . $cnt . '.PNG' ?>"/>
                                <p> Template <?php echo $cnt; ?> Preview when clicked on Like Button</p>
                                <img src="<?php echo ECR_LITE_PLUGIN_URL . 'img/active-template/template-' . $cnt . '.png' ?>"/>
                            </div>
                        <?php } ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>