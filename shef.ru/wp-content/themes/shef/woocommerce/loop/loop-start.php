<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="wrapper">
<div class="sel_set">
    <ul>
        <li class="sel_first">Выбрать сеты:</li>
        <li><a href="#">Все сеты</a></li>
        <li><a href="#">Фирменные сеты от шефа</a></li>
        <li class="act"><a href="#">Кофе-брейк</a></li>
        <li><a href="#">Фуршет</a></li>
        <li><a href="#">Банкет</a></li>
        <li><a href="#">Барбекю</a></li>
        <li><a href="#">Собери свой сет</a></li>
        <li class="red"><a href="#">Акции</a></li>
        <li class="gren"><a href="#">Праздничные сеты</a></li>
    </ul>
</div>
<div class="clb"></div>
<!-- <ul class="products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>"> -->
<div class="hits">
            <ul>


            
        