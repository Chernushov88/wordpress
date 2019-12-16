<?php
  /**
   * Cart Page
   *
   * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
   *
   * HOWEVER, on occasion WooCommerce will need to update template files and you
   * (the theme developer) will need to copy the new files to your theme to
   * maintain compatibility. We try to do this as little as possible, but it does
   * happen. When this occurs the version of the template file will be bumped and
   * the readme will list any important changes.
   *
   * @see     https://docs.woocommerce.com/document/template-structure/
   * @package WooCommerce/Templates
   * @version 3.8.0
   */
  
  defined( 'ABSPATH' ) || exit;
  
  do_action( 'woocommerce_before_cart' ); ?>

<script>
$(function(){
  setTimeout(()=>{
    $('.jsWeight').each(function(){
      let num = $(this).text(); 
      let result =num.replace(/(\d{1,3})(?=((\d{3})*)$)/g, " $1");
      $(this).text(result); 
      
    });
  }, 1000)
  // let gram = $('.gram .jsWeightList').text(); 

  $('.gram .jsWeightList').each(function(){
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
<div class="wrapper">
  <div class="spis_cart">
    <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
  <?php do_action( 'woocommerce_before_cart_table' ); ?>
    <ul>
    <?php do_action( 'woocommerce_before_cart_contents' ); ?>
      <?php
	  $ves=0;
	  $pro=array();
        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
          $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
          $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

$product_weight = get_post_meta( $product_id , 'product_weight', true );
$ves+=$product_weight*$cart_item['quantity'];
    $pro[]=$product_id;
          if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
            $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
            ?>
      <li class="relative">
          <?php
            echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
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
        <div class="img">
          <?php
            $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
            
            if ( ! $product_permalink ) {
              echo $thumbnail; // PHPCS: XSS ok.
            } else {
              printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
            }
            ?>
        </div>
        <div class="name">
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
        <div class="gram"><span class="jsWeight jsWeightList"><?= $product_weight;?></span> г</div>
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
        </div>
        <div class="spis_price">
          <?php
            echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
          ?>
        </div>
        <?/*php
            echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
            */?>
        <div class="clb"></div>
      </li>
            <?php
        }
      }?>
    </ul>

  </div>
</div>
<div class="add_zakaz">
  <div class="wrapper">
    <div class="add_ttl">Добавить в заказ:</div>
    <div class="spis_cart">
      <ul>
<?

global $post; // не обязательно
$posts10 = get_posts( array(
	'product_cat'    =>'rekomendovannye-blyuda',
	'post_type'   => 'product',
	'orderby' => 'rand',
 'posts_per_page' => 1,
 'post__not_in'=>$pro
) );
foreach( $posts10 as $post10 )
{
global $woocommerce;  
?>
        <li class="relative">
          <div class="img"><? echo $thumbnail = get_the_post_thumbnail($post10->ID, 'thumbnail');?></div>
          <div class="name"><a href="<? echo $url = get_permalink($post10->ID);?>"><?=$post10->post_title?></a></div>
          <div class="gram"><? echo get_post_meta( $post10->ID, 'product_weight', true ); ?> г</div>
          <div class="price_cnt">
            <table>
              <tbody>
                <tr>
                  <td><a  href="javascript:void(0)" onclick="var tek=Number($(this).parent().parent().find('input').val());var tt=tek*1-1*1;if (Number(tt)>0) {$(this).parent().parent().find('input').val(tt)}" class="minus">-</a></td>
                  <td><input type="text" class="cnt daba" value="1" size="1"></td>
                  <td><a href="javascript:void(0)" onclick="var tek=Number($(this).parent().parent().find('input').val());var tt=tek*1+1*1;$(this).parent().parent().find('input').val(tt)" class="plus">+</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="spis_price"><? echo get_post_meta( $post10->ID, '_regular_price', true ); ?> <span class="ruble">Р</span></div>
          <a class="add_z_cart" onclick="addToCart('<?= $post10->ID ?>',$(this).parent().find('.daba').val());" href="javascript:void(0)"></a>
          <div class="clb"></div>
        </li>	
<?
}
?>
      </ul>
    </div>
  </div>
</div>
<div class="wrapper">
  <div class="add_ttl">Добавить одноразовую посуду к заказу:</div>
  <div class="spis_posuda">
    <ul>
	<?
	global $post; // не обязательно



$posts1 = get_posts( array(
	'product_cat'    =>'stolovye-prinadlezhnosti',
	'post_type'   => 'product',
) );

foreach( $posts1 as $post1 ){
global $woocommerce;
?>
   <li>
        <div class="sp_img"><img src="/wp-content/themes/shef/verstka/svg/tarelka.svg"/></div>
        <div class="name"><?=$post1->post_title?></div>
        <div class="cnt price_cnt">
		<a href="javascript:void(0)" onclick="var tek=Number($(this).parent().find('input').val());var tt=tek*1-1*1;if (Number(tt)>0) {$(this).parent().find('input').val(tt)}" class="minus">-</a>
		<input class="daba" value="1" type="text">
		<a href="javascript:void(0)" onclick="var tek=Number($(this).parent().find('input').val());var tt=tek*1+1*1;$(this).parent().find('input').val(tt)"  class="plus">+</a>
		</div>
        <a class="add_z_cart" onclick="addToCart('<?= $post1->ID ?>',$(this).parent().find('.daba').val());" href="javascript:void(0)"></a>
        <div class="spis_price"><? echo get_post_meta( $post1->ID, '_regular_price', true ); ?> <span class="ruble">Р</span></div>
        <div class="clb"></div>
      </li>
<?
}


	?>
   
     
    </ul>
  </div>
  <div class="green_line"></div>
  <div class="left_sum">
    <div class="red_ttl">Обратите внимание:</div>
    <table>
      <tr>
        <td class="gr">Мин. сумма заказа для Москвы: </td>
        <td class="gr">Мин. сумма заказа для МО:</td>
      </tr>
      <tr>
        <td>5 000 <span class="ruble">Р</span></td>
        <td>10 000 <span class="ruble">Р</span></td>
      </tr>
    </table>
  </div>
  <div class="right_sum">
    <table>
      <tr>
        <td class="gr">Общий вес:</td>
        <td class="gr"><!--<span class="allWeightJs jsWeight"></span>--><?=$ves?> г</td>
      </tr>
      <tr>
        <td class="itogo_txt">Итого:</td>
        <td class="sum"><?php wc_cart_totals_order_total_html(); ?> </td>
      </tr>
      <tr>
        <td class="white_btn"><a href="/sety-ot-shefa/">Вернуться в каталог</a></td>
        <td class="orange_btn">
          <!-- <a href="/oformlenie-zakaza/">Оформить заказ</a> -->
          <?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
        </td>
      </tr>
    </table>
  </div>  
      <? do_action( 'woocommerce_cart_contents' ); ?>
      <tr>
        <td colspan="6" class="actions">
          <?php if ( wc_coupons_enabled() ) { ?>            
          <div class="coupon">
            <label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
            <?php do_action( 'woocommerce_cart_coupon' ); ?>
          </div>
          <?php } ?>
          <button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>" id="update_cart" style="opacity: 0.0"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>
          <?php do_action( 'woocommerce_cart_actions' ); ?>
          <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
        </td>
      </tr>      
      <?php do_action( 'woocommerce_after_cart_contents' ); ?>      
  <?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>
<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>
  <div class="clb"></div>
</div>

<script>    

 function addToCart(p_id,qu) {
  var qu;
  var p_id;
  

  // setTimeout(function() {
  //   $('.update_cart').click();
  // }, 1);
  $.get(
    '/korzina/?qu='+qu+'&add-to-cart=' + p_id, 
    {
      param: "test",
    },
    onAjaxSuccess()
  );
 }
 function onAjaxSuccess(data){
 setTimeout(function() 
 {
  window.location.reload();
}, 1500);
  

}
</script>


<div class="cart-collaterals">
  <?php

  if (!empty($_GET['add-to-cart']))
  {
  global $woocommerce;
  

for ($x=1; $x<$_GET['qu']; $x++)
{
	$woocommerce->cart->add_to_cart($_GET['add-to-cart']);
}

  }


  
    /**
     * Cart collaterals hook.
     *
     * @hooked woocommerce_cross_sell_display
     * @hooked woocommerce_cart_totals - 10
     */
    // woocommerce_cross_sell_display();
    // woocommerce_cart_totals();
    // do_action( 'woocommerce_cart_collaterals' );
    ?>
</div>
<?php do_action( 'woocommerce_after_cart' ); ?>