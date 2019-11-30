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

    <div class="my_home_ban">
      <div class="wrapper">
        <div class="my_soz">
          <?php dynamic_sidebar( 'sidebar-social' ); ?>          
        </div>
        <div class="ban_subttl">Алло, Шеф. Хочу быстрый фуршет!</div>
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
        </div>
      </div>
      <main>

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
