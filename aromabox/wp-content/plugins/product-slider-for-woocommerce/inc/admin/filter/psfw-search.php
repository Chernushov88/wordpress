<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); ?>
<div class ="psfw-post-option-wrap">
    <label for="psfw-show-keyword-query" class="psfw-keyword-relation">
        <?php _e( 'Filter Keyword Search', PSFW_TD ); ?>
    </label>
    <div class="psfw-post-field-wrap">
        <label class="psfw-switch">
            <input type="checkbox" class="psfw-show-keyword-relation psfw-checkbox" value="<?php
            if ( isset( $psfw_option[ 'psfw_show_keyword_query' ] ) ) {
                echo esc_attr( $psfw_option[ 'psfw_show_keyword_query' ] );
            } else {
                echo '0';
            }
            ?>" name="psfw_option[psfw_show_keyword_query]" <?php if ( isset( $psfw_option[ 'psfw_show_keyword_query' ] ) && $psfw_option[ 'psfw_show_keyword_query' ] == '1' ) { ?>checked="checked"<?php } ?>/>
            <div class="psfw-slider round"></div>
        </label>
        <p class="description"> <?php _e( 'Enable to show posts based on a keyword search.', PSFW_TD ) ?></p>
    </div>
</div>
<div class="psfw-keyword-inner-wrap"  <?php if ( isset( $psfw_option[ 'psfw_show_keyword_query' ] ) && $psfw_option[ 'psfw_show_keyword_query' ] == '1' ) { ?>
         style="display: block;" <?php } else { ?>
         style="display: none;" <?php } ?>>
    <div class ="psfw-post-option-wrap">
        <label><?php _e( 'Enter the keyword', PSFW_TD ); ?></label>
        <div class="psfw-post-field-wrap">
            <input type="text" class="psfw-search-keyword"  name="psfw_option[psfw_search_keyword]"  value="<?php
                   if(isset( $psfw_option['psfw_search_keyword'])){
                       echo $psfw_option['psfw_search_keyword'];
                   }
                   ?>"/>
        </div>
    </div>
</div>