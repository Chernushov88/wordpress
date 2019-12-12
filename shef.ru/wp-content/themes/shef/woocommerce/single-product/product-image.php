<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
	'woocommerce-product-gallery',
	'woocommerce-product-gallery--' . ( $product->get_image_id() ? 'with-images' : 'without-images' ),
	'woocommerce-product-gallery--columns-' . absint( $columns ),
	'images',
) );
?>
<script>
$(function(){
	  $('.carusel').bxSlider({
	  	slideWidth: 150,
	    mode: 'horizontal',
	    pager: false,
	    minSlides: 3,
	    maxSlides: 3,
	    moveSlides: 1,
	    controls:  true,
	    touchEnabled:false,
	    slideMargin: 7
	  });
	  $('.to_big').click(function(e){
	  	e.preventDefault();
        var val = $(this).attr('href');
        console.log(val);
        let img = $('.big_img .wp-post-image').attr("src");
        $('.big_img .wp-post-image').attr("srcset",val);
        console.log(img);
        // return false;
      });
	  $('.show_down').click(function(){
        if ($('.text').height()==118)
        {
            $(this).html("Свернуть<i class='fa fa-angle-up' aria-hidden='true'></i>");
            $('.text').attr('style','height:auto;');
        }
        else
        {
            $(this).html("Развернуть<i class='fa fa-angle-down' aria-hidden='true'></i>");
            $('.text').removeAttr('style');
        }
     });
});
</script>
<style>
	.woocommerce-tabs.wc-tabs-wrapper{display: none;}
</style>



<div class="prod1">
    <div class="blk_ostr">
        <ul>
            <li class="hit">- HIT</li>
            <li class="sp">- SPICY</li>
            <li class="vegan">- VEG</li>
            <li class="al">- Аллергены</li>
        </ul>
        <div class="clb"></div>
    </div>
    <div class="big_img">
    	<!-- <img src="/wp-content/themes/shef/verstka/image/set/big_img.fw.png"/> -->

    	<?
		
    	if ( $product->get_image_id() ) {
			$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
		} else {			
			$html .= sprintf( '<img src="%s" alt="%s"/>', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'image' ) );
		}
		// echo $html;
		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id );
    	?>
    </div>            
	<? do_action( 'woocommerce_product_thumbnails' ); ?>
    <div class="info desktop">
        Блюда доставляются в элегантных чёрных пластиковых контейнерах в холодном виде.<br /> 
        <b>Горячие блюда под самостоятельный разогрев.</b>
    </div>       

</div>