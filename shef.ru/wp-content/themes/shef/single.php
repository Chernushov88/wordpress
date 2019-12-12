<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="my_set_ban prod">
	<div class="wrapper">
	    <div class="my_soz">
	        <a href="https://vk.com"><i class="fa fa-vk" aria-hidden="true"></i></a>
	        <a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	        <a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	    </div>

	    <div class="breadcrumbs_set">
        	<!-- <a href="index.html">Главная</a> 
        	<span class="orange"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
        	<a href="/sety-ot-shefa/">Сеты от Шефа</a>
        	<span class="orange"><i class="fa fa-angle-right" aria-hidden="true"></i></span> -->
        	<? /*the_title();*/?>
        	<?/*php if ( function_exists( 'the_breadcrumb' ) ) the_breadcrumb(); */?>
        	<? woocommerce_breadcrumb();?>
        </div>
	    
	    
	    <h1 class="ttl50"><? the_title();?></h1>
	</div>     
</div>
<main>
    <div class="wrapper relative mtop">
        <? global $woocommerce; ?>
      	<a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="mini_cart desktop">
			<span class="count"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
      	</a>
        
        
        
        
        

<!-- <div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"> -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				// the_post_navigation(
				// 	array(
				// 		'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
				// 		'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
				// 	)
				// );

			endwhile; // End of the loop.
			?>

<!-- 		</main>
	</div>
	<?/*php get_sidebar(); */?>
</div> -->
    </div>
</main>
<?php
get_footer();
