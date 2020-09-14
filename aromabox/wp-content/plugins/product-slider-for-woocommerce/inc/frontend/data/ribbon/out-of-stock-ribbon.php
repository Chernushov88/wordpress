<?php defined( 'ABSPATH' ) or die( "No script kiddies please!" ); 

$position = isset($psfw_option['ofs_position'])&& $psfw_option['ofs_position']!=''? $psfw_option['ofs_position']: 1;
$template = isset($psfw_option['ribbon_template_ofs'])&& $psfw_option['ribbon_template_ofs']!=''? $psfw_option['ribbon_template_ofs']: 'template-1';

if(!empty($out_of_stock_list) && in_array($product_item_id ,$out_of_stock_list)){ ?>
<div class="psfw-out-of-stock psfw-ribbon-<?php echo $position ?>-wrap psfw-ribbon psfw-ribbon-<?php echo $template ; ?>">
    <?php
        ?>
        <span>
            <?php _e('Out Of Stock',PSFW_TD); ?>
        </span>
        <?php
    ?>
</div>

<?php } ?>