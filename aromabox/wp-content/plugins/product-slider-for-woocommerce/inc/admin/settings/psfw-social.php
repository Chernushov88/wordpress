<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); ?>
<div class="psfw-social-outer-wrap">
    <div class ="psfw-post-option-wrap">
        <label for="psfw-social-share-check" class="psfw-social-share">
            <?php _e( 'Social Share', PSFW_TD ); ?>
        </label>
        <div class="psfw-post-field-wrap">
            <label class="psfw-switch">
                <input type="checkbox" class="psfw-show-social-share psfw-checkbox" value="<?php
                if ( isset( $psfw_option[ 'psfw_show_social_share' ] ) ) {
                    echo esc_attr( $psfw_option[ 'psfw_show_social_share' ] );
                } else {
                    echo '0';
                }
                ?>" name="psfw_option[psfw_show_social_share]" <?php if ( isset( $psfw_option[ 'psfw_show_social_share' ] ) && $psfw_option[ 'psfw_show_social_share' ] == '1' ) { ?>checked="checked"<?php } ?>/>
                <div class="psfw-slider round"></div>
            </label>
            <p class="description"><?php _e( 'Enable to show social share link', PSFW_TD ) ?></p>
        </div>
    </div>
    <div class="psfw-social-container"
    <?php if ( isset( $psfw_option[ 'psfw_show_social_share' ] ) && $psfw_option[ 'psfw_show_social_share' ] == '1' ) {
        ?> style="display: block;"
             <?php
         } else {
             ?>
             style="display: none;"
             <?php
         }
         ?>>
        <div class ="psfw-post-option-wrap">
            <label for="psfw-facebook-share-check" class="psfw-facebook-share">
                <?php _e( 'Facebook Share Link', PSFW_TD ); ?>
            </label>
            <div class="psfw-post-field-wrap">
                <label class="psfw-switch">
                    <input type="checkbox" class="psfw-show-facebook-share psfw-checkbox" value="<?php
                    if ( isset( $psfw_option[ 'psfw_show_facebook_share' ] ) ) {
                        echo esc_attr( $psfw_option[ 'psfw_show_facebook_share' ] );
                    } else {
                        echo '0';
                    }
                    ?>" name="psfw_option[psfw_show_facebook_share]" <?php if ( isset( $psfw_option[ 'psfw_show_facebook_share' ] ) && $psfw_option[ 'psfw_show_facebook_share' ] == '1' ) { ?>checked="checked"<?php } ?>/>
                    <div class="psfw-slider round"></div>
                </label>
                <p class="description"> <?php _e( 'Enable to show facebook share link', PSFW_TD ) ?></p>
            </div>
        </div>
        <div class ="psfw-post-option-wrap">
            <label for="psfw-twitter-share-check" class="psfw-twitter-share">
                <?php _e( 'Twitter Share Link', PSFW_TD ); ?>
            </label>
            <div class="psfw-post-field-wrap">
                <label class="psfw-switch">
                    <input type="checkbox" class="psfw-show-twitter-share psfw-checkbox" value="<?php
                    if ( isset( $psfw_option[ 'psfw_show_twitter_share' ] ) ) {
                        echo esc_attr( $psfw_option[ 'psfw_show_twitter_share' ] );
                    } else {
                        echo '0';
                    }
                    ?>" name="psfw_option[psfw_show_twitter_share]" <?php if ( isset( $psfw_option[ 'psfw_show_twitter_share' ] ) && $psfw_option[ 'psfw_show_twitter_share' ] == '1' ) { ?>checked="checked"<?php } ?> />
                    <div class="psfw-slider round"></div>
                </label>
                <p class="description"> <?php _e( 'Enable to show twitter share link', PSFW_TD ) ?></p>
            </div>
        </div>

        <?php /*?>
        <div class ="psfw-post-option-wrap">
            <label for="psfw-google-share-check" class="psfw-google-share"><?php _e( 'Google Plus Share Link', PSFW_TD ); ?></label>
            <div class="psfw-post-field-wrap">
                <label class="psfw-switch">
                    <input type="checkbox" class="psfw-show-google-share psfw-checkbox" value="<?php
                    if ( isset( $psfw_option[ 'psfw_show_google_share' ] ) ) {
                        echo esc_attr( $psfw_option[ 'psfw_show_google_share' ] );
                    } else {
                        echo '0';
                    }
                    ?>" name="psfw_option[psfw_show_google_share]" <?php if ( isset( $psfw_option[ 'psfw_show_google_share' ] ) && $psfw_option[ 'psfw_show_google_share' ] == '1' ) { ?>checked="checked"<?php } ?> />
                    <div class="psfw-slider round"></div>
                </label>
                <p class="description"> <?php _e( 'Enable to show google plus share link', PSFW_TD ) ?></p>
            </div>
        </div>
        <?php */ ?>
        
        <div class ="psfw-post-option-wrap">
            <label for="psfw-linkedin-share-check" class="psfw-linkedin-share"><?php _e( 'Linkedin Share Link', PSFW_TD ); ?></label>
            <div class="psfw-post-field-wrap">
                <label class="psfw-switch">
                    <input type="checkbox" class="psfw-show-linkedin-share psfw-checkbox" value="<?php
                    if ( isset( $psfw_option[ 'psfw_show_linkedin_share' ] ) ) {
                        echo esc_attr( $psfw_option[ 'psfw_show_linkedin_share' ] );
                    } else {
                        echo '0';
                    }
                    ?>" name="psfw_option[psfw_show_linkedin_share]" <?php if ( isset( $psfw_option[ 'psfw_show_linkedin_share' ] ) && $psfw_option[ 'psfw_show_linkedin_share' ] == '1' ) { ?>checked="checked"<?php } ?> />
                    <div class="psfw-slider round"></div>
                </label>
                <p class="description"> <?php _e( 'Enable to show linkedin share link', PSFW_TD ) ?></p>
            </div>
        </div>
        <div class ="psfw-post-option-wrap">
            <label for="psfw-mail-share-check" class="psfw-mail-share"><?php _e( 'Share Via Email', PSFW_TD ); ?></label>
            <div class="psfw-post-field-wrap">
                <label class="psfw-switch">
                    <input type="checkbox" class="psfw-show-mail-share psfw-checkbox" value="<?php
                    if ( isset( $psfw_option[ 'psfw_show_mail_share' ] ) ) {
                        echo esc_attr( $psfw_option[ 'psfw_show_mail_share' ] );
                    } else {
                        echo '0';
                    }
                    ?>" name="psfw_option[psfw_show_mail_share]" <?php if ( isset( $psfw_option[ 'psfw_show_mail_share' ] ) && $psfw_option[ 'psfw_show_mail_share' ] == '1' ) { ?>checked="checked"<?php } ?> />
                    <div class="psfw-slider round"></div>
                </label>
                <p class="description"> <?php _e( 'Enable to show share via email', PSFW_TD ) ?></p>
            </div>
        </div>
        <div class ="psfw-post-option-wrap">
            <label for="psfw-pinterest-share-check" class="psfw-pinterest-share"><?php _e( 'Pinterest Share Link', PSFW_TD ); ?></label>
            <div class="psfw-post-field-wrap">
                <label class="psfw-switch">
                    <input type="checkbox" class="psfw-show-pinterest-share psfw-checkbox" value="<?php
                    if ( isset( $psfw_option[ 'psfw_show_pinterest_share' ] ) ) {
                        echo esc_attr( $psfw_option[ 'psfw_show_pinterest_share' ] );
                    } else {
                        echo '0';
                    }
                    ?>" name="psfw_option[psfw_show_pinterest_share]" <?php if ( isset( $psfw_option[ 'psfw_show_pinterest_share' ] ) && $psfw_option[ 'psfw_show_pinterest_share' ] == '1' ) { ?>checked="checked"<?php } ?> />
                    <div class="psfw-slider round"></div>
                </label>
                <p class="description"> <?php _e( 'Enable to show pinterest share link', PSFW_TD ) ?></p>
            </div>
        </div>
        <div class ="psfw-post-option-wrap">
            <label for="psfw-vk-share-check" class="psfw-vk-share"><?php _e( 'VK Share Link', PSFW_TD ); ?></label>
            <div class="psfw-post-field-wrap">
                <label class="psfw-switch">
                    <input type="checkbox" class="psfw-show-vk-share psfw-checkbox" value="<?php
                    if ( isset( $psfw_option[ 'psfw_show_vk_share' ] ) ) {
                        echo esc_attr( $psfw_option[ 'psfw_show_vk_share' ] );
                    } else {
                        echo '0';
                    }
                    ?>" name="psfw_option[psfw_show_vk_share]" <?php if ( isset( $psfw_option[ 'psfw_show_vk_share' ] ) && $psfw_option[ 'psfw_show_vk_share' ] == '1' ) { ?>checked="checked"<?php } ?> />
                    <div class="psfw-slider round"></div>
                </label>
                <p class="description"> <?php _e( 'Enable to show VK share link', PSFW_TD ) ?></p>
            </div>
        </div>
    </div>
</div>