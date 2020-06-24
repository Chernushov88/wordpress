<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
<div class="ecr-wrapper">
    <div class="ecr-head">
        <h1> <?php esc_html_e('Everest Comment Rating Lite', ECR_LITE_PLUGIN_TD); ?> </h1>
        <div>Version <?php echo ECR_LITE_PLUGIN_VERSION; ?></div>   
    </div>
    <?php if (isset($_GET['message']) && $_GET['message'] == 1) { ?>
        <div class="notice notice-success is-dismissible">
            <p><?php esc_html_e('Settings saved successfully', ECR_LITE_PLUGIN_TD); ?> </p>
        </div>
    <?php } ?>
    <?php if (isset($_GET['message']) && $_GET['message'] == 2) { ?>
        <div class="notice notice-success is-dismissible">
            <p><?php esc_html_e('Settings restored to default', ECR_LITE_PLUGIN_TD); ?></p>
        </div>
    <?php }
    ?>
    <div class= "ecr-settings-container">
        <div class="ecr-backend-settings">
            <div class="ecr-menu-settings">
                <ul>
                    <li  class="ecr-configuration"><a href="#Configuration" data-link="Configuration" class="menu-click ecr-menu-active" id="configuration-menu"><?php esc_html_e('Configuration Settings', ECR_LITE_PLUGIN_TD) ?></a></li>
                    <li  class="ecr-display"><a href="#Display" data-link="Display"  class="menu-click" id="display-menu"><?php esc_html_e('Display Settings', ECR_LITE_PLUGIN_TD) ?></a></li>
                    <li  class="ecr-customization"><a href="#Customization" data-link="Customization" class="menu-click" id="customization-menu"><?php esc_html_e('Customization Option', ECR_LITE_PLUGIN_TD) ?></a></li>
                    <li  class="ecr-text"><a href="#CustomText" data-link="CustomText" class="menu-click" id="text-menu"><?php esc_html_e('Custom Text Settings', ECR_LITE_PLUGIN_TD) ?></a></li>
                    <li class="ecr-howtouse"><a href="#HowToUse" data-link="HowToUse"  class="menu-click" id="howtouse-menu"><?php esc_html_e('How To Use', ECR_LITE_PLUGIN_TD) ?></a></li>
                    <li class="ecr-aboutus"><a href="#AboutUs" data-link="AboutUs"  class="menu-click" id="aboutus-menu"><?php esc_html_e('More WordPress Stuff', ECR_LITE_PLUGIN_TD) ?></a></li>


                    <li class="ecr-documentation"><a href="https://accesspressthemes.com/documentation/everest-comment-rating-lite/"  target="_blank" > <?php esc_html_e('Documentation', ECR_LITE_PLUGIN_TD) ?> </a> </li>
                    <li class="ecr-premium"><a href="https://1.envato.market/c/1302794/275988/4415?u=https%3A%2F%2Fcodecanyon.net%2Fitem%2Feverest-comment-rating-display-likedislike-with-reaction-emojis-for-wordpress-comments%2F21149051"  target="_blank" > <?php esc_html_e('Check Premium Version', ECR_LITE_PLUGIN_TD) ?> </a> </li>


                </ul> 
            </div>
            <div class="panels-container">
                <form action="<?php echo admin_url() . 'admin-post.php' ?>"  method="post" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="ecr_settings_save"/>
                    <div class="ecr-hashtag-save" id="abc">
                        <input type="hidden" name="ecr_settings[hashtag]" value="#Configuration"/>
                    </div>
                    <div class="ecr-panel">
                        <?php
                        include(ECR_LITE_PLUGIN_PATH . 'inc/backend/panel/ecr-configuration.php');
                        include(ECR_LITE_PLUGIN_PATH . 'inc/backend/panel/ecr-display.php');
                        include(ECR_LITE_PLUGIN_PATH . 'inc/backend/panel/ecr-customization.php');
                        include(ECR_LITE_PLUGIN_PATH . 'inc/backend/panel/ecr-text.php');
                        include(ECR_LITE_PLUGIN_PATH . 'inc/backend/panel/ecr-how-to-use.php');
                        include(ECR_LITE_PLUGIN_PATH . 'inc/backend/panel/ecr-about-us.php');
                        ?>
                        <div class="ecr-field-wrap">
                            <div class="ecr-field">
                                <?php
                                ?>
                                <div class="ecr-save-btn">
                                    <?php
                                    wp_nonce_field('ecr_nonce', 'ecr_nonce_field');
                                    ?>
                                    <input type="submit" class="button-primary ecr-submit-button" name="ecr_settings_submit" value="<?php esc_html_e('Save Options', ECR_LITE_PLUGIN_TD) ?>"  />
                                </div>
                                <div class="ecr-restore-btn">
                                    <?php $nonce = wp_create_nonce('ecr_restore_nonce'); ?>  
                                    <a class="button-primary ecr-submit-button" href="<?php echo admin_url() . 'admin-post.php?action=ecr_restore_default&_wpnonce=' . $nonce; ?>" onclick="return confirm('<?php esc_html_e('Are you sure you want to restore default settings?', ECR_LITE_PLUGIN_TD); ?>')"><?php esc_html_e('Restore Default', ECR_LITE_PLUGIN_TD); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="ecr-upgrade-wrapper">

            <img src="<?php echo ECR_LITE_PLUGIN_URL . 'img/upgrade-to-pro/upgrade-to-pro.png' ?>" style="width:100%;">
        </a>  

        <div class="ecr-upgrade-button-wrap-backend">

            <a href="http://demo.accesspressthemes.com/wordpress-plugins/everest-comment-rating/" class="smls-demo-btn" target="_blank">Demo</a>

            <a href="https://codecanyon.net/item/everest-comment-rating-display-likedislike-with-reaction-emojis-for-wordpress-comments/21149051?irgwc=1&clickid=Ra23ptw74xyOTaCwUx0Mo3Q3UknXDcyCWWDXVo0&iradid=275988&irpid=1302794&iradtype=ONLINE_TRACKING_LINK&irmptype=mediapartner&mp_value1=&utm_campaign=af_impact_radius_1302794&utm_medium=affiliate&utm_source=impact_radius" target="_blank" class="smls-upgrade-btn">Upgrade</a>

            <a href="https://accesspressthemes.com/wordpress-plugins/everest-comment-rating/" target="_blank" class="smls-upgrade-btn">Plugin Information</a>

        </div>
        
        <img src="<?php echo ECR_LITE_PLUGIN_URL . 'img/upgrade-to-pro/upgrade-to-pro-feature.png' ?>" alt="<?php esc_html_e( 'Everest Comment Rating', ECR_LITE_PLUGIN_TD ); ?>" style="width:100%;">
    </a>
</div>
</div>
</div>