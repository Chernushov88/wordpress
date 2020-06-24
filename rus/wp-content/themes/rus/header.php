<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- owl.carousel -->
<link rel="stylesheet" href="/wp-content/themes/rus/verstka/css/owl.carousel/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="/wp-content/themes/rus/verstka/css/owl.carousel/owl.theme.default.min.css" type="text/css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->


<link rel="stylesheet" href="/wp-content/themes/rus/verstka/css/stylesheet.css" >
<link rel="stylesheet" href="/wp-content/themes/rus/verstka/css/stylesheetLato.css">
<link rel="stylesheet" href="/wp-content/themes/rus/verstka/css/style.css">
<link rel="stylesheet" href="/wp-content/themes/rus/verstka/css/vacancy-styles.css">
<link rel="stylesheet" href="/wp-content/themes/rus/verstka/css/service.css">
<link rel="stylesheet" href="/wp-content/themes/rus/verstka/css/media.css">


<link rel="stylesheet" href="/wp-content/themes/rus/verstka/css/font-awesome.css">



<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?/*div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>
	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div>
			</div>
		<?php endif; ?>
	</header>
	<?php
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content"*/?>
	<div class="modal-bg" style="display: none;">

	</div>
	<div class="modal-bid" style="display: none;">
		<div>
			<div class="modal-name">
				<h3>Оставить заявку</h3>
				<button><i class="fa fa-times-circle" aria-hidden="true"></i></button>
			</div>
		</div>
		<form method="POST" action="" id="myform3">
			<input type="text" name="name" placeholder="Имя">
			<input type="email" name="email" placeholder="E-mail">
			<input type="phone" name="phone" placeholder="Телефон">
            <button name="submit" type="button" value="" onclick="send('/forma3.php','myform3','result3');">Отправить</button>
            <div class="result" id="result3"></div>
		</form>
	</div>

	<header>
		<div class="banner container">

			<div class="logo">
				<a href="/"><img src="/wp-content/themes/rus/verstka/img/logo.png" alt="" class="logo"></a>

			</div>




			<div class="region-choise">

				<a class="region-link" href="#">Ваш регион</a>
				<span class="region-arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
			</div>




			<div class="header-phone">
				<a href="tel:+7 (495) 777 77 77">
					<img class="img-phone" src="/wp-content/themes/rus/verstka/img/phone.png" alt="">
				</a>

				<a class="phone" href="tel:+7 (495) 777 77 77">+7 (495) 777 77 77</a>
			</div>
			<div class="header-socialmedia">
				<div class="b-icon">
					<a class="socialmedia_i" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
				<div class="b-icon">
					<a class="socialmedia_i" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</div>
				<div class="b-icon">
					<a class="socialmedia_i" href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
				</div>
				<div class="b-icon">
					<a class="socialmedia_i" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				</div>
				<div class="b-icon">
					<a class="socialmedia_i" href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
				</div>

			</div>

			<div class="header-button-bid">
				<a class="spanButton" href="#">Оставить заявку</a>
			</div>
		</div>
		<nav>
			<div class="nav-list container flex">
<?
$url = $_SERVER['REQUEST_URI'];
$current = '';
if ($url == '/nashi-uslugi/') {
     $current = 'current';
 }elseif($url == '/lichnyj-kabinet/'){
    $current2 = 'current';
 } ?>
				<div class="our-services">

					<a href="/nashi-uslugi/" class="<?=$current;?>">
						Наши услуги</a>
					<i class="fa fa-bars" aria-hidden="true" style="margin-right:20px; text-align: center;"  id="our-services-js"></i>
				</div>
<div class="touch_menu" id="touch_menu" onclick="touchMenu(this,'#main_menu');">
              <div class="icon-bar"></div>
              <div class="icon-bar"></div>
              <div class="icon-bar"></div>
            </div>

				<div class="nav-menu main_menu" id="main_menu">
					<!-- <ul>
						<li><a href="news.html">Новости</a></li>
						<li><a href="about-us.html">О нас</a></li>
						<li><a href="vacancy.html">Вакансии</a></li>
						<li><a href="contacts.html">Контакты</a></li>
					</ul> -->
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					<!-- <div class="account">
						<a href="/lichnyj-kabinet" class="<?=$current2;?>">
						<div class="b-icon_user">
							<i class="fa fa-user" aria-hidden="true" style="font-size: 19px; color: #333333; position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);"></i>
						</div>
						Личный кабинет</a>
					</div> -->
				</div>

			</div>

		</nav>
	</header>


<!--
intellectual.korshuqb.beget.tech

sch-int.ru-new


UPDATE wp_options SET option_value = REPLACE(option_value, 'http://intellectual.korshuqb.beget.tech', 'http://sch-int.ru-new') WHERE option_name = 'home' OR option_name = 'siteurl';
UPDATE wp_posts SET post_content = REPLACE (post_content, 'http://intellectual.korshuqb.beget.tech', 'http://sch-int.ru-new');
UPDATE wp_postmeta SET meta_value = REPLACE (meta_value, 'http://intellectual.korshuqb.beget.tech', 'http://sch-int.ru-new');


UPDATE wp_options SET option_value = REPLACE(option_value, 'http://pozdr.beget.tech/', 'http://pozdr.beget.tech-local/') WHERE option_name = 'home' OR option_name = 'siteurl';
UPDATE wp_posts SET post_content = REPLACE (post_content, 'http://pozdr.beget.tech/', 'http://pozdr.beget.tech-local/');
UPDATE wp_postmeta SET meta_value = REPLACE (meta_value, 'http://pozdr.beget.tech/', 'http://pozdr.beget.tech-local/');



UPDATE wp_options SET option_value = REPLACE(option_value, 'http://rus', 'http://rus.skarlat.tmweb.ru') WHERE option_name = 'home' OR option_name = 'siteurl';
UPDATE wp_posts SET post_content = REPLACE (post_content, 'http://rus', 'http://rus.skarlat.tmweb.ru');
UPDATE wp_postmeta SET meta_value = REPLACE (meta_value, 'http://rus', 'http://rus.skarlat.tmweb.ru');



-->