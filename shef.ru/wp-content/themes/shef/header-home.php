<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage shef
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<link href="http://allfont.ru/allfont.css?fonts=roboto-light" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="/wp-content/themes/shef/verstka/b-rub_arial/stylesheet.css">
  <!-- <link rel="stylesheet" type="text/css" href="easydropdown/easydropdown.css"/> -->
  <!-- <script src="/wp-content/themes/shef/verstka/https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script> -->
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
  <!-- <script src="/wp-content/themes/shef/verstka/easydropdown/jquery.easydropdown.js"></script> -->
  <link rel="stylesheet" href="/wp-content/themes/shef/verstka/bxslider/bxslider-4-4.2.12/dist/jquery.bxslider.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link rel="stylesheet" href="/wp-content/themes/shef/verstka/css/style.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="/wp-content/themes/shef/verstka/bxslider/bxslider-4-4.2.12/dist/jquery.bxslider.min.js"></script>
  <script>
    jQuery(document).ready(function(){
      jQuery('.slider').bxSlider({
        auto: true,
        pager:true,
        mode: 'fade',
        responsive:false,
        controls:  true
      });
      jQuery('.slider2').bxSlider({
        slideWidth: 270,
        mode: 'horizontal',
        pager: false,
        minSlides: 2,
        maxSlides: 2,
        moveSlides: 1,
        touchEnabled:false,
        controls:  true,
        slideMargin: 30
      });        
      $('.mob.button').click(function(){
        if ($('#menu').is(":visible")){
          $('#menu').fadeOut();
        }   
        else{
          $('#menu').fadeIn();
        }  
      });
    });
  </script>  
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div class="all">
    <header>
      <div class="my_header">
        <div class="wrapper relative">
          <a class="mob button"><i class="fa fa-bars" aria-hidden="true"></i></a>
          <a href="/wp-content/themes/shef/verstka/cart.html" class="mini_cart mob"><span class="count">2</span></a>
          <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
          
          <div class="right_wrap">
            <ul>
              <li class="my_phone">
                
                <?php dynamic_sidebar( 'sidebar-phone' ); ?>
              </li>
              <li class="my_lk"><a href="/lichnyj-kabinet/">Личный кабинет</a></li>
            </ul>
          </div>
          <div class="my_logo">
            <a href="/">
            <img src="/wp-content/themes/shef/verstka/svg/logo.svg" alt=""/>
            </a>
          </div>
          <div style="clear: both;"></div>
        </div>
      </div>
    </header>

<?php 

    $strServ = $_SERVER['REQUEST_URI'];
    $home = '/';
    $dostavka = 'dostavka';
    $lk = 'lichnyj-kabinet';

    if (strstr($strServ, $lk)) {
      # code...
    }
    else{
      if ($_SERVER['REQUEST_URI']=="/"){
      $myClass = 'my_home_ban';
    }else{
      if ( strstr($strServ, $dostavka) ){
            $my_banClass = 'my_set_ban for_delivery';
        }elseif( strstr($strServ, $lk) ){
          $my_banClass = 'lk';
        }
        else{
            $my_banClass = "my_set_ban";
        }?>
      <div class="<?=$myClass . $my_banClass;?>">
          <div class="wrapper">
            <div class="my_soz">
              <?php dynamic_sidebar( 'sidebar-social' ); ?>
              
            </div>
            <div class="ban_subttl">Алло, Шеф. Хочу быстрый фуршет!</div>
            <? if ($_SERVER['REQUEST_URI']!="/"){?>
              <h1 class="ttl50"><?= the_title();?></h1>
            <?}?>
    <?php
    if ($_SERVER['REQUEST_URI']=="/"){
    ?>
        <div class="ban_ttl">Доставка готовых сетов<br />с закусками</div>        
            <a class="view_sets" href="/sety-ot-shefa/">Посмотреть сеты</a>
            <div class="relative pochemu">
              <img class="left_img" src="/wp-content/themes/shef/verstka/image/home/home_left_ugol.fw.png" alt=""/>
              <img class="right_img" src="/wp-content/themes/shef/verstka/image/home/home_right_ugol.fw.png" alt=""/>
              <div class="pochemy_left">Почему мы?</div>
              <div class="pochemy_right">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
              <div class="pochemu_txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
              <div class="pochemu_custom">
                <div class="pochemu1">
                  <img class="img_p1" alt="" src="/wp-content/themes/shef/verstka/image/home/p1.fw.png"/>
                  <img class="img_line" alt="" src="/wp-content/themes/shef/verstka/image/home/line1.fw.png"/>
                  <div class="p_text m1">
                    <div class="p_ttl">Почему лучшие 1</div>
                    <div class="p_bot">Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor sit amet, consectetur adipiscing elit.</div>
                  </div>
                </div>
                <div class="pochemu2">
                  <img class="img_p2" alt="" src="/wp-content/themes/shef/verstka/image/home/p2.fw.png"/>
                  <img class="img_line" alt="" src="/wp-content/themes/shef/verstka/image/home/line2.fw.png"/>
                  <div class="p_text m2">
                    <div class="p_ttl">Почему лучшие 2</div>
                    <div class="p_bot">Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor sit amet, consectetur adipiscing elit.</div>
                  </div>
                </div>
                <div class="pochemu3">
                  <img class="img_p3" alt="" src="/wp-content/themes/shef/verstka/image/home/p3.fw.png"/>
                  <img class="img_line" alt="" src="/wp-content/themes/shef/verstka/image/home/line3.fw.png"/>
                  <div class="p_text m3">
                    <div class="p_ttl">Почему лучшие 3</div>
                    <div class="p_bot">Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor sit amet, consectetur adipiscing elit.</div>
                  </div>
                </div>
                <div class="clb"></div>
              </div>
            </div>
    <?}else{
      
    }?>
            

          </div>
        </div>
      <?}
    }?>



    
    <main>

