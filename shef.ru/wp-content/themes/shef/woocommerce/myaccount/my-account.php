<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
//do_action( 'woocommerce_account_navigation' );
 ?>

<!-- <div class="woocommerce-MyAccount-content">
	<?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_content' );
	?>
</div>
 -->
 <script>
$(document).ready(function(){
   $('.show_more').click(function(){
    var zn = $(this).attr('data');
    if ($('#'+zn+'').is(":visible"))
    {
        $('#'+zn+'').fadeOut();
        $(this).html('<i class="fa fa-angle-down" aria-hidden="true"></i>');
        $(this).parent().parent().attr("class","");
    }
    else
    {
        $('#'+zn+'').fadeIn();
        $(this).html('<i class="fa fa-angle-up" aria-hidden="true"></i>');
        $(this).parent().parent().attr("class","open_grey");
    }
    
  
   }); 
});

</script>
 <div class="wrapper relative">
        <a href="cart.html" class="mini_cart r desktop"><span class="count">2</span></a>
        <div class="my_soz">
            <a href="https://vk.com"><i class="fa fa-vk" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="breadcrumbs_set"><a href="index.html">Главная</a> <span class="orange"><i class="fa fa-angle-right" aria-hidden="true"></i></span> Личный кабинет</div>
        <h1 class="ttl50">Личный кабинет</h1>
        <div class="blk_lk">
            <div class="my_lk_left">
            <table>
                <tbody><tr>
                    <td>Ваше имя:</td>
                    <td>Иванов Василий Александрович</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>vashemail@gmail.com</td>
                </tr>
                <tr>
                    <td>Телефон:</td>
                    <td>+7 (000) 000-00-00</td>
                </tr>
                <tr>
                    <td>Адрес:</td>
                    <td>г. Город, индекс, улица и тд</td>
                </tr>
            </tbody></table>
            </div>
            <div class="right_lk">
                <a class="green_btn" href="#">Редактировать данные</a>
                <a class="white_btn" href="#">Сменить пароль</a>
                <a class="black_btn" href="#">Выход</a>
            </div>
            <div class="clb"></div>
        </div>
        <div class="blk_lk">
            <div class="lk_ttl">Ваши заказы:</div>
            <table class="lk_table">
                <tbody><tr>
                    <td><a class="show_more" data="id1"><i class="fa fa-angle-down" aria-hidden="true"></i></a></td>
                    <td>#123467890</td>
                    <td>15.04.2019 10:00</td>
                    <td><img src="/wp-content/themes/shef/verstka/image/cart/img1.jpg" alt="" class="lk_img"></td>
                    <td>1 позиция на сумму 4 800 <span class="ruble">Р</span></td>
                    <td class="status1">Выполнен</td>
                </tr>
                <tr id="id1" class="notvisible">
                    <td colspan="6">
                        <div class="spis_cart">
                        <ul>
                            <li class="relative">
                                
                                <div class="img"><img src="/wp-content/themes/shef/verstka/image/cart/img1.jpg" alt=""></div>
                                <div class="name"><a href="detail.html">Ассорти</a></div>
                                <div class="gram">1 шт</div>
                                <div class="spis_price">4 800 <span class="ruble">Р</span></div>
                                <div class="clb"></div>
                            </li>
                            <li>
                                <div class="green_txt">ОПЛАЧЕН</div>
                                <div class="ord_sum">4 800 <span class="ruble">Р</span></div>
                                <div class="ord_sum_itog">Итоговая сумма:</div>
                            </li>
                        </ul>
                        </div>
                    </td>
                </tr>
                <tr class="open_grey">
                    <td><a class="show_more" data="id2"><i class="fa fa-angle-up" aria-hidden="true"></i></a></td>
                    <td>#123467654</td>
                    <td>16.10.2019 14:30</td>
                    <td>
                        <img src="/wp-content/themes/shef/verstka/image/cart/img1.jpg" class="lk_img" alt="">
                        <img src="/wp-content/themes/shef/verstka/image/cart/img2.jpg" class="lk_img" alt="">
                    </td>
                    <td>2 позиции на сумму 8 000 <span class="ruble">Р</span></td>
                    <td class="status2">В обработке</td>
                </tr>
                <tr id="id2" class="visible">
                    <td colspan="6">
                        <div class="spis_cart">
                        <ul>
                            <li class="relative">
                                
                                <div class="img"><img src="/wp-content/themes/shef/verstka/image/cart/img1.jpg" alt=""></div>
                                <div class="name"><a href="detail.html">Ассорти</a></div>
                                <div class="gram">1 шт</div>
                                <div class="spis_price">4 800 <span class="ruble">Р</span></div>
                                <div class="clb"></div>
                            </li>
                            <li class="relative">
                                
                                <div class="img"><img src="/wp-content/themes/shef/verstka/image/cart/img2.jpg" alt=""></div>
                                <div class="name"><a href="detail.html">Идеальный завтрак</a></div>
                                <div class="gram">1 шт</div>
                                <div class="spis_price">3 200 <span class="ruble">Р</span></div>
                                <div class="clb"></div>
                            </li>
                            <li>
                                <div class="green_txt">ОПЛАЧЕН</div>
                                <div class="ord_sum">8 000 <span class="ruble">Р</span></div>
                                <div class="ord_sum_itog">Итоговая сумма:</div>
                            </li>
                        </ul>
                        </div>
                    </td>
                </tr>
                
            </tbody></table>
        </div>
    </div>