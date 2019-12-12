<?php
/**
 * Product Loop End
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-end.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
</ul>
</div>
<div style="clear: both;"></div>
<div class="load_more">
            <!-- <a href="#" class="show_sets">Загрузить еще</a> -->
            <div class="inf_sets">
                Показано 5 из 5 сетов
<?
// echo wc_get_template( 'loop/result-count.php' );
?>
<script>
	$(function(){
		
		function countFunc(e){
			console.log('count');
			let count =$('.woocommerce-result-count').text();
			console.log(count);
			$('.inf_sets').text(count);
		}
		countFunc()
			
	})
		
</script>
            </div>
        </div>
        </div>