<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); ?>
<div class="psfw-customization-outer-wrap">
	<div class ="psfw-post-option-wrap">
   		<label><?php _e( 'Slide Orientation', PSFW_TD ); ?></label>
    	<div class="psfw-post-field-wrap">
        	<select name="psfw_option[psfw_slide_type]" class="psfw-slide-type">
            	<option value="horizontal"  <?php if ( isset( $psfw_option[ 'psfw_slide_type' ] ) && $psfw_option[ 'psfw_slide_type' ] == 'horizontal' ) echo 'selected=="selected"'; ?>><?php _e( 'Horizontal', PSFW_TD ) ?></option>
            	<option value="vertical"  <?php if ( isset( $psfw_option[ 'psfw_slide_type' ] ) && $psfw_option[ 'psfw_slide_type' ] == 'vertical' ) echo 'selected=="selected"'; ?>><?php _e( 'Vertical', PSFW_TD ) ?></option>
        	</select>
        </div>
    </div>
	<div class ="psfw-post-option-wrap">
        <label><?php _e( 'Controls', PSFW_TD ); ?></label>
        <div class="psfw-post-field-wrap">
            <select name="psfw_option[psfw_nav_controls]" class="psfw-nav-controls">
                <option value="true"  <?php if ( isset( $psfw_option[ 'psfw_nav_controls' ] ) && $psfw_option[ 'psfw_nav_controls' ] == 'true' ) echo 'selected=="selected"'; ?>><?php _e( 'True', PSFW_TD ) ?></option>
                <option value="false"  <?php if ( isset( $psfw_option[ 'psfw_nav_controls' ] ) && $psfw_option[ 'psfw_nav_controls' ] == 'false' ) echo 'selected=="selected"'; ?>><?php _e( 'False', PSFW_TD ) ?></option>
            </select>
        </div>
    </div>
    <div class="psfw-post-option-wrap">
        <label><?php _e( 'Auto', PSFW_TD ); ?></label>
        <div class="psfw-post-field-wrap">
            <select name="psfw_option[psfw_slide_auto]" class="psfw-slide-auto">
                <option value="true"  <?php if ( isset( $psfw_option[ 'psfw_slide_auto' ] ) && $psfw_option[ 'psfw_slide_auto' ] == 'true' ) echo 'selected=="selected"'; ?>><?php _e( 'True', PSFW_TD ) ?></option>
                <option value="false"  <?php if ( isset( $psfw_option[ 'psfw_slide_auto' ] ) && $psfw_option[ 'psfw_slide_auto' ] == 'false' ) echo 'selected=="selected"'; ?>><?php _e( 'False', PSFW_TD ) ?></option>
            </select>
        </div>
    </div>
    <div class ="psfw-post-option-wrap">
        <label><?php _e( 'Auto Play Timeout', PSFW_TD ); ?></label>
        <div class="psfw-post-field-wrap">
            <input type="number" name="psfw_option[psfw_slide_speed]" class="psfw-slide-speed" value="<?php
            if ( isset( $psfw_option[ 'psfw_slide_speed' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_slide_speed' ] );
            } else {
                echo '1000';
            }
            ?>">
        </div>
    </div>

    <div class="psfw-post-option-wrap">
		<label><?php _e( 'Number of Post', PSFW_TD ); ?></label>
		<div class="psfw-post-field-wrap">
    		<input type="number" class="psfw-post-number" min="1" name="psfw_option[psfw_post_number]"  value="<?php
		        if ( isset( $psfw_option[ 'psfw_post_number' ] ) ) {
		            echo $psfw_option[ 'psfw_post_number' ];
		        } else {
		            echo '5';
		        }
		        ?>"/>
    		<p class="description"><?php _e( 'Enter the excerpt length for post content', PSFW_TD ) ?></p>
		</div>
	</div>

    <div class ="psfw-post-option-wrap">
        <label><?php _e( 'Pager', PSFW_TD ); ?></label>
        <div class="psfw-post-field-wrap">
            <select name="psfw_option[psfw_slide_pager]" class="psfw-slide-pager">
                <option value="true"  <?php if ( isset( $psfw_option[ 'psfw_slide_pager' ] ) && $psfw_option[ 'psfw_slide_pager' ] == 'true' ) echo 'selected=="selected"'; ?>><?php _e( 'True', PSFW_TD ) ?></option>
                <option value="false"  <?php if ( isset( $psfw_option[ 'psfw_slide_pager' ] ) && $psfw_option[ 'psfw_slide_pager' ] == 'false' ) echo 'selected=="selected"'; ?>><?php _e( 'False', PSFW_TD ) ?></option>
            </select>
        </div>
    </div>
    
    <div class ="psfw-post-option-wrap">
        <label><?php _e( 'Pause Slider On Hover', PSFW_TD ); ?></label>
        <div class="psfw-post-field-wrap">
            <select name="psfw_option[psfw_pause_on_hover]" class="psfw-slide-pager">
                <option value="true"  <?php if ( isset( $psfw_option[ 'psfw_pause_on_hover' ] ) && $psfw_option[ 'psfw_pause_on_hover' ] == 'true' ) echo 'selected=="selected"'; ?>><?php _e( 'True', PSFW_TD ) ?></option>
                <option value="false"  <?php if ( isset( $psfw_option[ 'psfw_pause_on_hover' ] ) && $psfw_option[ 'psfw_pause_on_hover' ] == 'false' ) echo 'selected=="selected"'; ?>><?php _e( 'False', PSFW_TD ) ?></option>
            </select>
        </div>
    </div>

    <div class ="psfw-post-option-wrap">
        <label><?php _e( 'Link Option', PSFW_TD ); ?></label>
        <div class="psfw-post-field-wrap">
            <select name="psfw_option[link_option]" class="psfw-slide-pager">
                <option value="same_window"  <?php if ( isset( $psfw_option[ 'link_option' ] ) && $psfw_option[ 'link_option' ] == 'same_window' ) echo 'selected=="selected"'; ?>><?php _e( 'Open in same window', PSFW_TD ) ?></option>
                <option value="new_window"  <?php if ( isset( $psfw_option[ 'link_option' ] ) && $psfw_option[ 'link_option' ] == 'new_window' ) echo 'selected=="selected"'; ?>><?php _e( 'Open in new window', PSFW_TD ) ?></option>
            </select>
        </div>
    </div>
</div>