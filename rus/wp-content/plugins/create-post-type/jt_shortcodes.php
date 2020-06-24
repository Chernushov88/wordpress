<?php
//all shortcodes
/**
*  Слайдер на главной
*/
function jt_slider($atts){
	ob_start();
	?>

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
        <div class="slide"  style="background-image: url(<?= $image_url; ?>)">
            <div class="text-slide">
                    <h1 class="slide-h"><?php the_title(); ?></h1>
                    <div class="slide-p"><?php the_excerpt(); ?></div>
                    <a class="slide-btn" href="#">Подробнее</a>
                    <!-- <a class="slide-btn" href="<? the_permalink();?>">Подробнее</a> -->
                </div>
        </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
        </div>

<?php
	$result = ob_get_clean();
	return $result;
}
add_shortcode('jt-slider','jt_slider');
/**
*  Наши партнеры
*/
function jt_actionSite($atts){
    ob_start();
    ?>

    <div class="our-partners">
                <div class="title-block"><h2>Наши партнеры</h2></div>
                <div class="main-slider-partners">
                    <div class="slide-partners">
                    </div>
                    <ul class="dots">
                        <li id="slide00"><button></button></li>
                        <li id="slide01"><button></button></li>
                        <li id="slide02"><button></button></li>
                    </ul>
                </div>
            </div>


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

