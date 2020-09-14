<div class="psfw-thumbnail-pager">
	<div class="psfw-scroller-div">
        <?php
            if ( isset( $psfw_option[ 'psfw_show_category' ] ) && $psfw_option[ 'psfw_show_category' ] == '1' ) { ?>
                <div class="psfw-category-wrap">
           			<?php  $psfw_fetch_category = $this -> psfw_fetch_category($post_id, $product_item_id, $psfw_option['select_post_taxonomy']);
                 ?>
                </div><?php
                include (PSFW_PATH . '/inc/frontend/data/title.php');
                include (PSFW_PATH . '/inc/frontend/data/price.php');
            } ?>
    </div>
</div>