<?php
//all shortcodes
/**
*  Слайдер на главной
*/
function jt_slider($atts){
	ob_start(); 
	?>
    <div class="home_baner" >
      <div class="container">
        <div class="owl-carousel owl-theme" id="carousel_home_baner">
            <?php 
                    $args = array(
                        'post_type' => 'jt_slider',     
                        'posts_per_page'=> -1,           
                        );  
                    $archive_query = new WP_Query( $args );
                    $all_post = $archive_query->found_posts;
                ?>
                <?php if ( $archive_query->have_posts() ) : while ( $archive_query->have_posts() ) : $archive_query->the_post();   ?>
        <?
            $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id,'full');
            $image_url = $image_url[0];
        ?>
                    <!-- <div class="item" style="background-image: url(img/slide-1.jpg);"> -->
                        <div class="item" style="background-image: url(<?= $image_url; ?>);">
                        <div class="h1"><?php the_title() ?></div>
                        <?php the_content() ?>
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
        </div>
      </div>
    </div>
<?php
	$result = ob_get_clean();
	return $result;
}
add_shortcode('jt-slider','jt_slider');
/**
*  Слайдер на главной
*/
function jt_actionSite($atts){
    ob_start(); 
    ?>
    <div class="action" >
      <div class="container">
        <div class="h2"><span>АКЦИИ</span></div>

        <div class="owl-carousel owl-theme" id="carousel_action">
            <?php 
                    $args = array(
                        'post_type' => 'jt_actionSite',     
                        'posts_per_page'=> -1,           
                        );  
                    $archive_query = new WP_Query( $args );
                    $all_post = $archive_query->found_posts;
                ?>
                <?php if ( $archive_query->have_posts() ) : while ( $archive_query->have_posts() ) : $archive_query->the_post();   ?>
                    <div class="item">
                        <a href="<? the_permalink();?>"><?php the_post_thumbnail(); ?></a>
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
        </div>
      </div>
    </div>
<?php
    $result = ob_get_clean();
    return $result;
}
add_shortcode('jt-actionSite','jt_actionSite');

