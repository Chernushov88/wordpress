<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" );
if (isset($psfw_option[ 'link_option' ]) && $psfw_option[ 'link_option' ] =='new_window'){
    $target = 'target="_blank"';
}else{
    $target = '';
}
 ?>
<div class="psfw-title">
    <?php
    if ( isset( $psfw_option[ 'psfw_show_link_title' ] ) && $psfw_option[ 'psfw_show_link_title' ] == '1' ) {
        ?>
        <a href="<?php the_permalink(); ?>" <?php echo $target; ?>>
            <?php the_title(); ?></a>
        <?php
    } else {
        the_title();
    }
    ?>
</div>