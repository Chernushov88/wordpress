<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>
<script>
    jQuery(document).ready(function(){
        if ($(document).width()>760)
        {
          jQuery('.slider3').bxSlider({
          slideWidth: 400,
            mode: 'horizontal',
            pager: false,
            minSlides: 3,
            maxSlides: 3,
            moveSlides: 1,
            controls:  true,
            touchEnabled:false,
            slideMargin: 30
        });
      }
	});
</script>
		<div class="clb"></div>
        <div class="zaint relative">
            <div class="ttl">Вас могут заинтересовать:</div>
            <!-- <div class="ttl"><?php esc_html_e( 'Related products', 'woocommerce' ); ?></div -->
            <div class="hits my_sld3">
                
            <ul class="slider3">
                <li>
                    <div class="hit_img">
                        <a href="detail.html"><img alt="" src="/wp-content/themes/shef/verstka/image/home/hit1.fw.png"/></a>
                    </div>
                    <div class="hit_text">
                    <div class="one_hit_ttl"><a href="detail.html">Ассорти</a></div>
                    <div class="hit_descr">— Круассан с ростбифом — 10 шт. по 35 г
                        Ассорти мини-салатов — 15 шт.:...
                    </div>
                    <div class="blk_price">
                        <div class="count_chel">12-15</div>
                        <div class="my_price">
                            <span class="old_price">8 290 <span class="ruble">Р</span> </span>
                            <span class="new_red_price">6 290<span class="ruble">Р</span></span>
                        </div>
                    </div>
                    </div>
                </li>
				<?php foreach ( $related_products as $related_product ) : ?>

				<?php
				 	$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					wc_get_template_part( 'content', 'product' ); ?>

				<?php endforeach; ?>
                
                
            </ul>
            
        
            </div>
        </div>


		<?/*php woocommerce_product_loop_start(); ?>

			<?php foreach ( $related_products as $related_product ) : ?>

				<?php
				 	$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					wc_get_template_part( 'content', 'product' ); ?>

			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); */?>



<?php endif;

wp_reset_postdata();
