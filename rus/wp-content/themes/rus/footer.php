<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<footer>

	<div class="footer-blocks container">
		<div class="info-site">
			<div class="footer-logo">
				<a href="#"><img src="/wp-content/themes/rus/verstka/img/white-logo.png" alt="" class="logo"></a>
			</div>

			<div class="footer-region-choise">
				<a class="region-link" href="#">Ваш регион</a>
				<span class="region-arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
			</div>

			<div class="footer-block-phone">
				<a href="tel:+7 (495) 777 77 77">
					<img class="img-phone" src="/wp-content/themes/rus/verstka/img/phone.png" alt="">
				</a>

				<a class="footer-phone" href="tel:+7 (495) 777 77 77">+7 (495) 777 77 77</a>
			</div>

			<div class="footer-socialmedia">
				<div class="b-icon-footer">
					<a class="socialmedia_i" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
				<div class="b-icon-footer">
					<a class="socialmedia_i" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</div>
				<div class="b-icon-footer">
					<a class="socialmedia_i" href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
				</div>
				<div class="b-icon-footer">
					<a class="socialmedia_i" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				</div>
				<div class="b-icon-footer">
					<a class="socialmedia_i" href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
				</div>

			</div>
		</div>

		<div class="footer-menu">
			<div class="touch_menu " id="touch_menu-footer" onclick="touchMenu(this,'#footer_menu');">
			  <div class="icon-bar"></div>
			  <div class="icon-bar"></div>
			  <div class="icon-bar"></div>
			</div>
				<div class="footer-block-title">
					<p>Меню</p>
				</div>

				<!-- <ul>
					<li><a href="#">Новости</a></li>
					<li><a href="#">О нас</a></li>
					<li><a href="#">Вакансии</a></li>
					<li><a href="#">Контакты</a></li>
				</ul> -->
				<?php get_template_part( 'template-parts/navigation/navigation', 'bottom' ); ?>
		</div>
<div class="touch_menu " id="touch-services" onclick="touchMenu(this,'#footer_services');">
  <div class="icon-bar"></div>
  <div class="icon-bar"></div>
  <div class="icon-bar"></div>
</div>
		<div class="footer-our-services main_menu" id="footer_services">
			<div class="footer-block-title">
				<p>Наши услуги</p>
			</div>
			<div class="footer-services-list ">

		<?php
$args = array(
	'show_option_all'    => '',
	'show_option_none'   => __('No categories'),
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '1',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => true,
	'title_li'           => '',
	'number'             => NULL,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => 'Walker_Category',
	'hide_title_if_empty' => false,
	'separator'          => '<br />',
);
 ?>
 <ul class="services-ul"><?php wp_list_categories( $args ); ?></ul>

			</div>
		</div>
	</div>

</footer>
<script type="text/javascript" src="/wp-content/themes/rus/verstka/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/rus/verstka/js/owl.carousel/owl.carousel.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<script type="text/javascript" src="/wp-content/themes/rus/verstka/js/index.js"></script>
<script type="text/javascript" src="/wp-content/themes/rus/verstka/js/modal.js"></script>


<?php wp_footer(); ?>

</body>
</html>
