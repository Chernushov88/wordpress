<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}
global $woocommerce;
$ito=$woocommerce->cart->total;
$itog=$woocommerce->cart->subtotal;

$pric=explode('.',$ito);
if (empty($pric[1])){
	$itop=$pric[0].'.00';
	}else{
		$itop=$pric[0].'.'.$pric[1];		
	}	
?>
<script>
	jQuery(document).ready(function(){
	  $('.big_close22').click(function(){
	        $('.bg22').fadeOut();
	        $('.popup22').fadeOut();
	  });
	});
</script>
<div class="wrapper relative nopad">
	
<!--<div class="bg"></div>
<div class="popup">
    <div class="wrp relative">
        <a class="big_close"></a>
        <div class="pop_title">Обратите внимание:</div>
        <div class="pop_subtitle">Рекомендуемый объем еды на человека для долгосрочного мероприятия 650 г</div>
        <div class="grey_wrp">
            <table>
                <tr>
                    <td>Рекомендуемый объем:</td>
                    <td>7 800 г</td>
                </tr>
                <tr>
                    <td>Общий вес заказа:</td>
                    <td>4 680 г</td>
                </tr>
                <tr>
                    <td>Не хватает до рекомендации:</td>
                    <td>3 120 г</td>
                </tr>
            </table>
        </div>
        <a class="green_btn" href="set.html">Хочу дополнить заказ</a>
    </div>
</div>  -->
<?
    // get_template_part( 'template-parts/header/header', 'cart' );
	
$vvv=0;
	 foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) 
	 {
          $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
          $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

 $product_weight = get_post_meta( $product_id , 'product_weight', true )*$cart_item['quantity'];
$vvv+=$product_weight;
	 }
	
	$nach=3;
	$kol=12;
	
	
	$ve1=450;
	$ve2=650;
	$ve3=850;
	
	$up=$ve2*$kol;
    $va=$up-$vvv;
	if ($va>0)
	{
	$nuz=$va;
	}
	else
	{
	$nuz=0;	
	}
?>

        <div class="right_blk">
            <div class="warning_wrp desktop">
                <div class="red_ttl">Обратите внимание:</div>
                <div class="pop_subtitle">Рекомендуемый объем еды на человека для долгосрочного мероприятия <b class="rad"><?=$ve2?></b> г</div>
                <div class="grey_wrp">
                    <table>
                        <tr>
                            <td>Рекомендуемый объем:</td>
                            <td><?=$up?> г</td>
                        </tr>
                        <tr>
                            <td>Общий вес заказа:</td>
                            <td><?=$vvv?> г</td>
                        </tr>
                        <tr>
                            <td>Не хватает до рекомендации:</td>
                            <td><?=$nuz?> г</td>
                        </tr>
                    </table>
                </div>
                <a class="green_btn" href="/sety-ot-shefa/">Хочу дополнить заказ</a>
            </div>
            <div class="order_sum">
                <div class="order_ttl">Общая сумма заказа:</div>
                <div class="order_blk">
                    <table>
                        <tr>
                            <td>Ваш заказ: </td>
                            <td><? echo $sub_total=WC()->cart->cart_contents_total; ?> <span class="ruble">Р</span></td>
                        </tr>
                        <tr>
                            <td>Доставка:</td>
                            <td id="dosa">0 <span class="ruble">Р</span></td>
                        </tr>
                        <tr class="order_itog">
                            <td>ИТОГО к оплате: </td>
                            <td id="itog"> <?=$itop?> <span class="ruble">Р</span></td>
                        </tr>
                    </table>
                </div>
                <div class="order_grey">
                    <div class="order_bag">Забери свой заказ самостоятельно и <span>получи скидку 10%</span> на весь заказ!</div>
                    <a class="green_btn" href="set.html">Забрать заказ самостоятельно</a>
                </div>
            </div>
        </div>
        <div class="left_blk">
            <div class="order_step">
                <div class="order_step_ttl"><span>Шаг 1.</span> Укажите количество человек и продолжительность мероприятия</div>
                <table class="order_step1">
                    <tr>
                        <td class="o_chel"><label>Количество человек:</label></td>
                        <td >
                        <div class="select">
                            <select onchange="info()" id="kola">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option selected="true">12</option>
								<option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                            </select>
                         </div>   
                        </td>
                    </tr>
                    <tr>
                        <td class="o_hour">Продолжительность мероприятия:</td>
                        <td >
                        <div class="select"> 
                            <select onchange="info()" id="tim">
                                <option>24 часа</option>
                                <option>23 часа</option>
                                <option>22 часа</option>
                                <option>21 час</option>
                                <option>20 часов</option>
                                <option>19 часов</option>
                                <option>18 часов</option>
                                <option>17 часов</option>
                                <option>16 часов</option>
                                <option>15 часов</option>
                                <option>14 часов</option>
                                <option>13 часов</option>
                                <option>12 часов</option> 
                                <option>11 часов</option>
                                <option>10 часов</option>
                                <option>9 часов</option>
                                <option>8 часов</option>
                                <option>7 часов</option>
                                <option>6 часов</option>
                                <option>5 часов</option>
                                <option>4 часа</option>
                                <option selected="true">3 часа</option>
                                <option>2 часа</option>
                                <option>1 час</option>
                            </select>
                        </div>
                        </td>
                    </tr>
                </table>
                <!--<div class="warning_wrp mob">
                    <div class="red_ttl">Обратите внимание:</div>
                    <div class="pop_subtitle">Рекомендуемый объем еды на человека для долгосрочного мероприятия 650 г</div>
                    <div class="grey_wrp">
                        <table>
                            <tr>
                                <td>Рекомендуемый объем:</td>
                                <td>7 800 г</td>
                            </tr>
                            <tr>
                                <td>Общий вес заказа:</td>
                                <td>4 680 г</td>
                            </tr>
                            <tr>
                                <td>Не хватает до рекомендации:</td>
                                <td>3 120 г</td>
                            </tr>
                        </table>
                    </div>
                    <a class="green_btn" href="set.html">Хочу дополнить заказ</a>
                </div>-->
            </div>
            <div class="order_step">
                <div class="order_step_ttl"><span>Шаг 2.</span> Дата и время доставки</div>
                <table class="order_step2">
                    <tr>
                        <td>Дата доставки:</td>
                        <td><input id="datdos" placeholder="Выберите дату" type="date"/></td>
                    </tr>
                    <tr>
                        <td>Время доставки:</td>
                        <td>
                            <div class="select"> 
                            <select id="timedos">
                                <option selected="true">Время</option>
                                <option>23 : 00</option>
                                <option>22 : 00</option>
                                <option>21 : 00</option>
                                <option>20 : 00</option>
                                <option>19 : 00</option>
                                <option>18 : 00</option>
                                <option >17 : 00</option>
                                <option>16 : 00</option>
                                <option>15 : 00</option>
                                <option>14 : 00</option>
                                <option>13 : 00</option>
                                <option>12 : 00</option> 
                                <option>11 : 00</option>
                                <option>10 : 00</option>
                                <option>9 : 00</option>
                                <option>8 : 00</option>
                                
                            </select>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="order_step">
                <div class="order_step_ttl"><span>Шаг 3.</span> Адрес и личные данные</div>
                <div class="one_inp place">
                    Адрес доставки: <span class="req">*</span>
                    <input id="adr" onblur="$('#billing_address_1').val($(this).val());"  type="text" />
                </div>
                <div class="one_inp">
                    Ваше имя: <span class="req">*</span>
                    <input id="nam" onblur="$('#billing_first_name').val($(this).val());" type="text" />
                </div>
                <div class="one_inp">
                    Телефон: <span class="req">*</span>
                    <input id="pho" onblur="$('#billing_phone').val($(this).val())" type="text" />
                </div>
                <div class="one_inp">
                    Электронная почта: <span class="req">*</span>
                    <input id="ema" onblur="$('#billing_email').val($(this).val())" type="text" />
                </div>
                <div class="one_inp">
                    Комментарии: 
                    <textarea id="kom"></textarea>
                </div>
            </div>
            <div class="order_step" style="padding-right: 20px;">
                <div class="order_step_ttl"><span>Шаг 4.</span> Способ оплаты</div>
                
                <div class="spis_chek">
                    
                        <ul class="radio">  
						<li>
                                <input onchange="$('#payment_method_cod').parent().find('label').click()" id="check3" name="opl" type="radio" checked="true" value="check3">
                                <label for="check3">Наличными курьеру</label>
                            </li>
                            <li>
                                <input onchange="$('#payment_method_bacs').parent().find('label').click()" id="check1" name="opl" type="radio" value="check1">
                                <label for="check1">Оплата картой</label>
                            </li>
                            <li>
                                <input onchange="$('#payment_method_cheque').parent().find('label').click()" id="check2" name="opl" type="radio" value="check2">
                                <label for="check2">Выставить счет</label>
                            </li>
                          
                            
                            
                        </ul>
                    
                    <div style="clear: both;"></div>
                
                
                <a href="#" class="green_btn">Оплатить картой</a>
                </div>
				
				
				
				<div class="order_step_ttl"><span>Шаг 5.</span> Способ доставки</div>
                
                <div class="spis_chek">
                    
                        <ul class="radio">
                            <li>
                                <input onchange="$('#shipping_method_0_local_pickup1').parent().find('label').click();prov()" id="check11" name="dos" type="radio" checked="true" value="check1">
                                <label for="check11">Самовывоз</label>
                            </li>
							
							<?
							$sum=$sub_total=WC()->cart->cart_contents_total;
							if ($sum<5000)
							{
								
								
							}
							else
							{
								if ($sum<10000)
								{
									?>
							<li>
                                <input 
								
								<?
								if ($sum<7000)
								{
									?>	
									onchange="$('#shipping_method_0_free_shipping8').parent().find('label').click();prov()"
									<?
								}
								else
								{
									?>
									onchange="$('#shipping_method_0_flat_rate7').parent().find('label').click();prov()"
									<?
								}
								?>
								
								
								id="check22" name="dos" type="radio" value="check22">
                                <label for="check22">Доставка по Москве</label>
                            </li>
									<?
								}
								else
								{
								?>
								<li>
                                <input <?
								if ($sum<7000)
								{
									?>	
									onchange="$('#shipping_method_0_flat_rate7').parent().find('label').click();prov()"
									<?
								}
								else
								{
									?>
									onchange="$('#shipping_method_0_free_shipping8').parent().find('label').click();prov()"
									<?
								}
								?> id="check22" name="dos" type="radio" value="check22">
                                <label for="check22">Доставка по Москве</label>
                            </li>
								 <li>
                                <input 
								
								<?
								if ($sum<15000)
								{
									?>	
									onchange="$('#shipping_method_0_flat_rate3').parent().find('label').click();prov()" 
									<?
								}
								else
								{
									?>
									onchange="$('#shipping_method_0_free_shipping9').parent().find('label').click();prov()"
									<?
								}
								?>
								
								
								
								id="check33" name="dos" type="radio" value="check33">
                                <label for="check33">Доставка по МО до 50км</label>
                            </li>
                            <li>
                                <input onchange="$('#shipping_method_0_flat_rate6').parent().find('label').click();prov()" id="check4" name="dos" type="radio" value="check4">
                                <label for="check4">Доставка по МО более 50км</label>
                            </li>

<?								
									
								}
								
							}
							?>
							
                          
                           
                            
                        </ul>
                    
                    <div style="clear: both;"></div>
				
				
				
				
				
				
				
				
				
				
				
				
				
                <div class="order_inf"><div class="bold">Мы принимаем заказы за 24 часа.</div> 
                    Позвоните по телефону: 8 (800) 000-00-00. Мы постараемся сделать все возможное, чтобы реализовать ваш заказ.
                </div>
                <div class="order_inf">Пожалуйста, заполните обязательные поля.</div>
                <div class="order_inf"><div class="bold">Корпоративные заказы от 10 сетов подтверждаем за 48 часов.</div> </div>
            </div>
        </div>

        <div class="clb"></div>
        <button class="green_btn" type="button" onclick="carta();$('#place_order').click()" href="javascript:void(0)">Оформить заказ</button>




<form style="display: none;" name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
	
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>
</div>
<script>
jQuery( document ).ready(function()
{

$('#billing_phone').val('');
$('#billing_first_name').val('');
$('#billing_email').val('');
$('#billing_new_fild11').val('');
$('#billing_new_fild12').val('');
$('#billing_new_fild13').val('');
$('#billing_new_fild14').val('');
$('#billing_new_fild15').val('');
$('#billing_address_1').val('-');

  $('#billing_city').val('-');
  	setTimeout(function () {
	$('#shipping_method_0_local_pickup1').click();
	$('#payment_method_cod').click();
	}, 2000);

  
  
});


function prov()
{
  setTimeout(function () 
  {
	var pr=$('.order-total').find('.amount').text().replace(/[^\d;]/g, '');
	$('#itog').html('');
	$('#itog').html(pr+'<span class="ruble">Р</span>');
	var bylo='<?=$sum?>';
	var stalo=Number(pr)-Number(bylo);
	$('#dosa').html(stalo+'<span class="ruble">Р</span>');
	}, 2000);

	
}
function carta()
{
var kola=$("#kola option:selected").text();
var tim=$("#tim option:selected").text();
var timdo=$("#timedos option:selected").text();
var datdos=$("#datdos option:selected").val();
var kom=$("#kom").val();
$('#billing_address_1').val($('#adr').val());
$('#billing_phone').val($('#pho').val());
$('#billing_first_name').val($('#nam').val());
$('#billing_email').val($('#ema').val());
$('#billing_new_fild11').val(datdos);
$('#billing_new_fild12').val(timdo);
$('#billing_new_fild13').val(kola);
$('#billing_new_fild14').val(tim);
$('#billing_new_fild15').val(kom);
$('#terms').click();
$('.checkout').submit();
}

function info()
{
var ves=Number(<?=$vvv?>);
var nu=450;
var kol=Number($("#kola option:selected").text());

var ch=$("#tim option:selected").text().split(' ');

var chas=Number(ch[0]);
alert(chas);
if (chas<3)
{
var nu=450;	
	
}
else  
{

if (chas>2 && chas<5)
{
var nu=650;	
}
else
{
var nu=850;	
}
}

alert(nu);
}
</script>
<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
