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
<style>
    .woocommerce-result-count, .woocommerce-pagination{display: none;}
</style>
<div class="wrapper">
<?
$strServ = $_SERVER['REQUEST_URI'];
$catalog = 'sety-ot-shefa';
$productCategory = 'product-category';
$newstrServ = $_SERVER['REQUEST_URI'];

if( strstr($strServ, $catalog) || strstr($strServ, $productCategory) ){?>
<div class="sel_set">
<?
$classAct = '';
if( strstr($strServ, $catalog) ){ 
    $classAct = 'act';
}
    ?>
    <ul>
        <li class="sel_first">Выбрать сеты:</li>
        <li class="<?=$classAct?>"><a href="/sety-ot-shefa/">Все сеты</a></li>
        <!-- <li class="sel_first">Выбрать сеты:</li>
        <li><a href="#">Все сеты</a></li>
        <li><a href="#">Фирменные сеты от шефа</a></li>
        <li class="act"><a href="#">Кофе-брейк</a></li>
        <li><a href="#">Фуршет</a></li>
        <li><a href="#">Банкет</a></li>
        <li><a href="#">Барбекю</a></li>
        <li><a href="#">Собери свой сет</a></li>
        <li class="red"><a href="#">Акции</a></li>
        <li class="gren"><a href="#">Праздничные сеты</a></li> -->

<?php

    $args = array(
        'taxonomy' => 'product_cat',
        'orderby'    => 'count',
        'order'      => 'DESC',
        'hide_empty' => false
    );

    $product_categories = get_terms( $args );

    $count = count($product_categories);
  
    if ( $count > 0 ){
        foreach ( $product_categories as $product_category ) {
            // $item = '<div class="catalogue-item">';
            // $item .= '<a href="' . get_term_link( $product_category ) . '" class="catalogue-item-link"></a>';
            // $item .= '<div class="catalogue-item-img">';
            // $item .= '<img src="'.  wp_get_attachment_url( $thumbnail_id ) .'" alt="">';
            // $item .= '</div>';
            // $item .= '<p class="catalog-item-title">' . $product_category->name . '</p>';
            // $item .= '</div>';
            // echo $item;
            $classList = '';
            $clsssActive = '';

            if ( $product_category->name != 'Uncategorized') {    
                if ($newstrServ == '/product-category/'.$product_category->slug.'/') {
                   $clsssActive = ' act';
                }
               if ($product_category->slug == 'akcii') {
                    $classList = 'red';
                    
                }elseif ($product_category->slug == 'prazdnichnye-sety') {
                    $classList = 'gren';
                    
                } 
                          
                    
                echo '<li class="'.$classList.$clsssActive.'"><a href="/product-category/'.$product_category->slug.'">' . $product_category->name . '</a></li>';
            }
            
      
        }
    }
?>

<!-- class="red" akcii    -->
    </ul>
</div>
<div class="clb"></div>
<?}elseif( strstr($strServ, $dostavka) ){
    
}else{
    
}
?>   

<!-- <ul class="products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>"> -->
<div class="hits">
            <ul>


            
        