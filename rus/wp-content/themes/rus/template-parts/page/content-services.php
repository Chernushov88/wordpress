<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<div class="services-block ">
	<div class="services-list">
<!-- 		<a class="services-link" href="#">Продвижение в интернете</a>
		<a class="services-link" href="#">Наружная реклама</a>
		<a class="services-link" href="#">Фото и видео съемка</a>
		<a class="services-link" href="#">Обучение и тренинги</a>
		<a class="services-link" href="#">Колл центр</a>
		<a class="services-link" href="#">Бизнес аудит</a>
		<a class="services-link" href="#">Юрист</a>
		<a class="services-link" href="#">Бухгалтерия</a>
		<a class="services-link" href="#">Подбор персонала</a>
		<a class="services-link" href="#">Коммерческая недвижимость</a>
		<a class="services-link" href="#">Обслуживание офиса</a>
		<a class="services-link" href="#">Инвестиции и кредитование</a> -->
		<?php
$args = array(
	'show_option_all'    => '',
	'show_option_none'   => __('No categories'),
	'orderby'            => 'ID',
	'order'              => 'ASK',
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
);





 ?>
 <ul class="services-ul"><?php wp_list_categories( $args ); ?></ul>
	</div>
</div>

