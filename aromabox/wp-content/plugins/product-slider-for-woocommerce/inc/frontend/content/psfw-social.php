<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); 
if (isset($psfw_option[ 'link_option' ]) && $psfw_option[ 'link_option' ] =='new_window'){
    $target = 'target="_blank"';
}else{
    $target = '';
}
?>
<div class="psfw-share-wrap">
    <div class="psfw-share-wrap-contain">
        <?php if ( isset( $psfw_option[ 'psfw_show_facebook_share' ] ) && $psfw_option[ 'psfw_show_facebook_share' ] == '1' ) { ?>
            <a class="psfw-fb" href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink( $product_item_id ); ?>" <?php echo $target; ?> rel="nofollow">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <?php
        }
        if ( isset( $psfw_option[ 'psfw_show_twitter_share' ] ) && $psfw_option[ 'psfw_show_twitter_share' ] == '1' ) {
            ?>
            <a  class="psfw-twitter" href="http://twitter.com/share?text=<?php echo the_title(); ?>&url=<?php echo get_permalink( $product_item_id ); ?>" <?php echo $target; ?> rel="nofollow">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <?php
        }
        /*
        if ( isset( $psfw_option[ 'psfw_show_google_share' ] ) && $psfw_option[ 'psfw_show_google_share' ] == '1' ) {
            ?>
            <a class="psfw-google" href="https://plus.google.com/share?url=<?php echo get_permalink( $product_item_id ); ?>" <?php echo $target; ?> rel="nofollow">
                <i class="fa fa-google-plus" aria-hidden="true"></i>
            </a>
            <?php
        }
        */
        if ( isset( $psfw_option[ 'psfw_show_linkedin_share' ] ) && $psfw_option[ 'psfw_show_linkedin_share' ] == '1' ) {
            ?>
            <a class="psfw-linkdein" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink( $product_item_id ); ?>" <?php echo $target; ?> rel="nofollow">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <?php
        }
        if ( isset( $psfw_option[ 'psfw_show_mail_share' ] ) && $psfw_option[ 'psfw_show_mail_share' ] == '1' ) {
            ?>
            <a class="psfw-email" href="mailto:?subject=<?php echo the_title(); ?> &body=<?php echo the_title(); ?> <?php echo get_permalink( $product_item_id ); ?>" <?php echo $target; ?> rel="nofollow">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
            </a>
            <?php
        }
        if ( isset( $psfw_option[ 'psfw_show_pinterest_share' ] ) && $psfw_option[ 'psfw_show_pinterest_share' ] == '1' ) {
            ?>
            <a class="psfw-pinterest" href="http://pinterest.com/pin/create/button/?url=<?php echo get_permalink( $product_item_id ); ?>" <?php echo $target; ?> rel="nofollow">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
            </a>
            <?php
        }
        if ( isset( $psfw_option[ 'psfw_show_vk_share' ] ) && $psfw_option[ 'psfw_show_vk_share' ] == '1' ) {
            ?>
            <a class="psfw-vk" href="http://vk.com/share.php?url=<?php echo get_permalink( $product_item_id ); ?>" <?php echo $target; ?> rel="nofollow">
                <i class="fa fa-vk" aria-hidden="true"></i>
            </a>
        <?php }
        ?>
    </div>
</div>