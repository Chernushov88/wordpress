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

<div class="container">
<div class="services-block services-block-single">
	<div class="services-list">
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
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
// echo '0-0';
				get_template_part( 'template-parts/post/content', get_post_format() );
// echo '0-1';

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
// echo '0-2';
				// the_post_navigation(
				// 	array(
				// 		'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
				// 		'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
				// 	)
				// );
// echo '0-3';
			endwhile; // End of the loop.
			?>

	<?/*php get_sidebar(); */?>
</div>

<?php
get_footer();
