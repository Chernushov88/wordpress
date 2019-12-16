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
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  
  <link rel="shortcut icon" href="/wp-content/themes/shef/verstka/image/logo.fw.png" type="image/x-icon">
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
    <header class="header">
      <div class="my_header">
        <div class="wrapper relative">
          <a class="mob button"><i class="fa fa-bars" aria-hidden="true"></i></a>
          <!-- <a href="/wp-content/themes/shef/verstka/cart.html" class="mini_cart mob"><span class="count">2</span></a> -->
          <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
          
          <div class="right_wrap">
            <ul>
              <li class="my_phone">
                
                <?php dynamic_sidebar( 'sidebar-phone' ); ?>
              </li>
              <li class="my_lk"><a href="/lichnyj-kabinet/" class="act">Личный кабинет</a></li>
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
    <?
      get_template_part( 'template-parts/header/header', 'cart' );
    ?>





