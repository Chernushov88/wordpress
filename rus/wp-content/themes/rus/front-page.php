<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
	<section class="container flex">
	    <?
	      get_template_part( 'template-parts/page/content', 'services' );
	    ?>

		<div class="main-slider">
			<? echo do_shortcode('[jt-slider]'); ?>
		</div>
	</section>
<section class="container flex container-home">
	<div class="left-info">
		<?php dynamic_sidebar( 'sidebar-info' ); ?>
	</div>
		<div class="right-info">

			<div class="news">
				<div class="title-block"><h2>Новости</h2></div>
				<div class="articles">

					<?php
		              $args = array(
		                  'post_type' => 'post',
		                  'posts_per_page' => 6,
		                  'orderby' => 'rand'
		              );
		              $loop = new WP_Query($args);
		              while ($loop->have_posts()) : $loop->the_post();?>
						  <div class="article-news">

								<a href="<?=get_permalink();?>">
									<div class="article-date">
										<?= get_the_date(); ?>
									</div>
								<?=the_post_thumbnail();?>
								<div class="article-title">
									<p><?=the_title(); ?></p>
								</div>
								</a>
							</div>
		            <?php endwhile; ?>
				</div>

			<div class="mailing">
				<div class="mailing-container">
					<h3>Подпишитесь на нашу новостную рассылку</h3>

				<div class="mailing-form">
					<form action="" id="myform">
						<input type="checkbox" checked> Согласие на обработку своих персональных данных <br>
						<input name="email" type="email" placeholder="Ваш e-mail">
						<button name="submit" type="button" value="" onclick="send('/forma.php','myform','result');">Подписаться</button>
						<div class="result" id="result"></div>
					</form>
					<?/* do_shortcode('[contact-form-7 id="74" title="Форма на главной"]'); */?>
				</div>
				</div>
			</div>



			<?
		      get_template_part( 'template-parts/page/content', 'partners' );
		    ?>

			<div class="contact-info">

				<div class="title-block"><h2>Контактная информация</h2></div>
				<div class="flex">
					<div class="contacts center-flex">

						<?php dynamic_sidebar( 'sidebar-contactInformation' ); ?>

					</div>
					<div class="contacts-map">
						<div class="map">
							<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A874996e9c904138e34453a80699fbf9dead4ef12d3f4849d9d12eb6c8f4fdbfb&amp;width=480&amp;height=316&amp;lang=ru_RU&amp;scroll=true"></script>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>

		<?php
		// Show the selected front page content.
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif;
		?>

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here.
		?>



<?php
get_footer();
