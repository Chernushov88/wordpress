<?php defined('ABSPATH') or die("No script kiddies please!");
$psfw_settings = get_option( 'psfw_settings' );
?>
<div class="psfw-wrapper psfw-comment-designer-wrapper">
    <div class="psfw-head">
        <h1>
            <img src="<?php  echo PSFW_PLUGIN_URL . 'img/logo.png'  ?>"/>
        </h1>
        <div> Version <?php echo PSFW_VERSION; ?> </div>    
    </div>
    <?php if (isset($_GET['message']) && $_GET['message'] == 1) { ?>
        <div class="notice notice-success is-dismissible">
            <p><?php _e('Settings saved successfully', PSFW_TD); ?> </p>
        </div>
    <?php } ?>
    <?php if (isset($_GET['message']) && $_GET['message'] == 2) { ?>
        <div class="notice notice-success is-dismissible">
            <p><?php _e('Settings restored to default', PSFW_TD); ?></p>
        </div>
    <?php }
    ?>
    <div class="psfw-backend-settings">
        <div class="panels-container">
            <form action="<?php echo admin_url('admin-post.php') ?>"  method="post">
                <input type="hidden" name="action" value="psfw_plugin_settings_save"/>
                <div class="psfw-panel">
                    <div class="psfw-tabs-content-wrapper">
                        <div class='psfw-tab-content psfw-plugin-assets-settings'>
                            <div class="psfw-assets-settings-content">
                                <p><?php _e( 'Disable bxSLider (Please disable bxSlider only if you have already loaded those font icons from other source.)', PSFW_TD ); ?></p>
                            </div>
                            <div class='psfw-fontawsome psfw-input-wrap'>
                                <label><?php _e( 'bxSlider', PSFW_TD ); ?></label>
                                <div class="psfw-info-wrap">
                                    <input type="checkbox" name="psfw_settings[disable_bxslider]" value="1" <?php echo ! empty( $psfw_settings['disable_bxslider'] ) ? ' checked="checked"' : ''; ?>>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="psfw-field-wrap">
                        <div class="psfw-field">
                            <div class="psfw-save-btn">
                                <?php
                                wp_nonce_field('psfw_nonce', 'psfw_nonce_field');
                                ?>
                                <input type="submit" class="button-primary psfw-submit-button" name="psfw_settings_submit" value="<?php _e('Save Options', PSFW_TD) ?>"  />
                            </div>
                            <div class="psfw-restore-btn">
                                <?php $nonce = wp_create_nonce('psfw_restore_nonce'); ?>  
                                <a class="button-primary psfw-submit-button" href="<?php echo admin_url() . 'admin-post.php?action=psfw_restore_default&_wpnonce=' . $nonce; ?>" onclick="return confirm('<?php _e('Are you sure you want to restore default settings?', PSFW_TD); ?>')"><?php _e('Restore Default', PSFW_TD); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>