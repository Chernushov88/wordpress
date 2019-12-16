<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();


$strServ = $_SERVER['REQUEST_URI'];
$dostavka = 'dostavka';
$lk = 'lichnyj-kabinet';
$editeData = '/redaktirovat-dannye/';
$pozvoniShefu = 'pozvoni-shefu';
$catalog = 'sety-ot-shefa';
$korzina = 'korzina';
$oformlenieZakaza = 'oformlenie-zakaza';
$productCategory = 'product-category';
// my_set_ban for_delivery
if( strstr($strServ, $lk) || strstr($strServ, $editeData) ){
  $mainClass = 'lk';
}elseif( strstr($strServ, $pozvoniShefu) ){
    // $mainClass = 'my_set_ban for_delivery';
}else{
	if( strstr($strServ, $catalog) ){
		$my_banClass = "my_set_ban for_set";
	}elseif( strstr($strServ, $dostavka) ){
        $my_banClass = 'my_set_ban for_delivery';
    }elseif( strstr($strServ, $korzina) ){
        $my_banClass = 'my_set_ban for_cart';
    }elseif( strstr($strServ, $oformlenieZakaza) ){
        $my_banClass = 'my_set_ban for_cart for_order';
    }else{
	    $my_banClass = "my_set_ban";
	}?>
<div class="<?=$my_banClass;?>">
    <div class="wrapper">
        <div class="my_soz">
            <?php dynamic_sidebar( 'sidebar-social' ); ?>
        </div>
        
        <div class="breadcrumbs_set">
        	<!-- <a href="index.html">Главная</a> 
        	<span class="orange"><i class="fa fa-angle-right" aria-hidden="true"></i></span>    Сеты от Шефа -->
        	<?php if ( function_exists( 'the_breadcrumb' ) ) the_breadcrumb(); ?>
        </div>
        <h1 class="ttl50"><?= the_title();?></h1>
    </div>
    <?if( strstr($strServ, $catalog) || strstr($strServ, $korzina) || strstr($strServ, $productCategory) ):?>
    <div class="blk_info">
        <div class="wrapper">
            <ul>
                <li>
                    <div class="grey_txt">Мин. стоимость заказа в Москве:</div>
                    5 000 <span class="ruble">Р</span>
                </li>
                <li>
                    <div class="grey_txt">Мин. стоимость заказа в МО:</div>
                    10 000 <span class="ruble">Р</span>
                </li>
                <li>
                    <div class="grey_txt">Доставка:</div>
                    от 0 <span class="ruble">Р</span>
                </li>
                <li>
                    <div class="grey_txt">Принимаем заказы до 10 сетов:</div>
                    За 24 часа
                </li>
                <li>
                    <div class="grey_txt">Принимаем заказы от 10 сетов:</div>
                    За 48 часов
                </li>
            </ul>           
<?
    // get_template_part( 'template-parts/header/header', 'cart' );
?>
          	
        </div>
    </div> 
    <?endif;?>

</div>
<?}



     ?>


<main class="<?=$mainClass;?>">
<!-- <div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"> -->

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

<!-- 		</main>
	</div>
</div> -->

<?php
get_footer();
