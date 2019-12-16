<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div data-product="content-single-product.php" id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

<?php
  $people_count = get_post_meta( get_the_ID(), 'people_count', true );
  $product_weight = get_post_meta( get_the_ID(), 'product_weight', true );
  $Calories = get_post_meta( get_the_ID(), 'Calories', true );
  $Protein = get_post_meta( get_the_ID(), 'Protein', true );
  $Fats = get_post_meta( get_the_ID(), 'Fats', true );
  $Carbohydrates = get_post_meta( get_the_ID(), 'Carbohydrates', true );

?>
<script>
// (function (window, document) {
//   	"use strict";

// 	const weightArray = document.querySelectorAll('.jsWeight');
// 	console.log(weightArray);
// 	for(let item of weightArray){
// 		item = item.toLocaleString('ru');
// 		console.log(item);
// 	}	
// })(window, document);
$(function(){
	setTimeout(()=>{
		$('.jsWeight').each(function(){
			let num = $(this).text();	
			let result =num.replace(/(\d{1,3})(?=((\d{3})*)$)/g, " $1");
			$(this).text(result);	
			
		});
	}, 1000)
  $('.ves .jsWeightList').each(function(){
    // console.log(this);
    let gram = $(this).text();
    console.log(gram);
    let gramParent = $(this).parent().parent().find('.my_cnt').val();
    console.log(gramParent);
    let allGrammProduct = gram * gramParent;
    gram = $(this).text(allGrammProduct);
  })	
})
function pluser(){
  var els = document.getElementsByClassName('jsWeightList');
  console.log(els);
  return Array.prototype.slice.call(els).reduce( addMe, 0);
}

function addMe(p,c,i,a){
  // p - предыдущее значение общей суммы, c - очередной элемент массива
  return p + parseInt(c.textContent);
}

window.onload = function(){
  document.querySelector('.allWeightJs').innerHTML = pluser();
}
</script>
	<div class="prod2">
        <div class="ttl"><?= woocommerce_template_single_title();?></div>
        <div class="text relative">
			<? the_excerpt(); ?>
            <?php echo the_content(); ?>             
        </div>
        <div class="show_down">Развернуть<i class="fa fa-angle-down" aria-hidden="true"></i></div>
        <div class="calories">
            <div class="oran_top">
                <div class="left">Общий вес: <span class="jsWeight"><?= $product_weight;?></span> г</div>
                <div class="right chel"><?= $people_count;?></div>
            </div>
        </div>
        <div class="prices">
            <form>
            <!-- <div class="price">
                15 000 <span class="ruble">Р</span>
            </div> -->
            <? woocommerce_template_single_price();?> 
            <? woocommerce_template_single_add_to_cart();?>

            <div class="clb"></div>
        </div>
        <div class="info mob">
            Блюда доставляются в элегантных чёрных пластиковых контейнерах в холодном виде.<br /> 
            <b>Горячие блюда под самостоятельный разогрев.</b>
        </div>
        		<?php
        		global $product;
		// echo $product->get_type();
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_titlewoocommerce_template_single_ratin - 5
		 * @hooked g - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		// do_action( 'woocommerce_single_product_summary' );	
		 // woocommerce_template_single_rating();
		 
		
		
		 // woocommerce_template_single_meta();
		 // woocommerce_template_single_sharing();


	?>

    </div>
    <div class="prod_cart">
        <div class="ttl">Корзина:</div>
        <?php do_action( 'woocommerce_before_cart_contents' ); ?>
        <ul class="cart_list">
            
            <?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					$productWeightList = get_post_meta( $product_id, 'product_weight', true );
					?>
					<li>
	            		<?php
							echo apply_filters( // phpcsignore WordPress.Security.EscapeOutput.OutputNotEscaped
								'woocommerce_cart_item_remove_link',
								sprintf(
									'<a href="%s" class="close" aria-label="%s" data-product_id="%s" data-product_sku="%s"></a>',
									esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
									esc_html__( 'Remove this item', 'woocommerce' ),
									esc_attr( $product_id ),
									esc_attr( $_product->get_sku() )
								),
								$cart_item_key
							);
						?>
		                <div class="left">
		                	<?php
							$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

							if ( ! $product_permalink ) {
								echo $thumbnail; // PHPCS: XSS ok.
							} else {
								echo $thumbnail;
								// printf( '', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
								// printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
							}
							?>
		                </div>
		                <div class="right">
		                    <div class="ttl1">
	                    	<?php
								if ( ! $product_permalink ) {
									echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
								} else {
									echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
								}

								do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

								// Meta data.
								echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

								// Backorder notification.
								if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
									echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
								}
								?>
								
							</div>
		                    <div class="ves"><span class="jsWeight jsWeightList"><?= $productWeightList;?></span> г</div>
		                    <div class="price_cnt">
	                    	<?php
								if ( $_product->is_sold_individually() ) {
									$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
								} else {
									$product_quantity = woocommerce_quantity_input(
										array(
											'input_name'   => "cart[{$cart_item_key}][qty]",
											'input_value'  => $cart_item['quantity'],
											'max_value'    => $_product->get_max_purchase_quantity(),
											'min_value'    => '0',
											'product_name' => $_product->get_name(),
										),
										$_product,
										false
									);
								}

								echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
								?>
								<?php do_action( 'woocommerce_before_quantity_input_field' ); ?>
		                    <!-- <table>
		                        <tr>
		                            <td><a href="#" class="minus"  onclick="cnt_minus(this);">-</a></td>
		                            <td><input type="text" class="cnt" value="1" size="1" /></td>
		                            <td><a href="#" class="plus"  onclick="cnt_plus(this);">+</a></td>
		                            <td class="cart_price">
		                            	<?php
										echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
										?> <span class="ruble">Р</span>
									</td>
		                        </tr>
		                    </table> -->
		                    <div class="cart_price">
		                    	<?/*php
										echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
										?> <span class="ruble">Р</span*/?>

								<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
		                    </div>
		                    </div>
		                </div>
		                <div class="clb"></div>
		            </li>
		            	<!-- <li class="hidden">
		            		<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
		            	</li> -->
							
						
					<?php
				}
			}
			?>

        </ul>
        <?php do_action( 'woocommerce_cart_contents' ); ?>
        
        <div class="itogo">
            <table>
                <tr>
                    <td>Общий вес:</td>
                    <td ><span class="allWeightJs jsWeight"></span> г</td>
                </tr>
                <tr>
                    <td>Итого:</td>
                    <td><?php wc_cart_totals_order_total_html(); ?> </td>
                </tr>
            </table>
            <a class="to_cart" href="/korzina/">Перейти в корзину</a>  
        </div>
        

    </div>
		


	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
