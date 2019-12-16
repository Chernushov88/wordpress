<?php
  /**
   * Displays content for front page
   *
   * @package WordPress
   * @subpackage Twenty_Seventeen
   * @since 1.0
   * @version 1.0
   */
  

  ?>

<div class="wrapper">
  <div class="clb"></div>
  <div class="hit_ttl">Хиты продаж</div>
  <div class="hits">
    <ul>
      
      <?php
        $args = array(  
            'post_type' => 'product',  
            'posts_per_page' => 6,  
            'product_tag' => 'bestsellers',  
            'orderby' => 'rand'  
        );
        // print_r($args);
        $loop = new WP_Query($args);          
        while ($loop->have_posts()) : $loop->the_post();  
          $product = new WC_Product_Variable(get_the_ID());  
          if (!$product->has_child( )) {  
              $product = new WC_Product(get_the_ID());  
          }
          $price_sum = $product->get_price_html();
          $people_count = get_post_meta( $loop->post->ID, 'people_count', true ); 
        ?>
      <li>
        <div class="hit_img hit_img-home">
          <a href="<?php echo get_permalink($loop->post->ID) ?>">
            <?php the_post_thumbnail(); ?>
          </a>
        </div>
        <div class="hit_text">
          <div class="one_hit_ttl"><a href="<?php echo get_permalink($loop->post->ID) ?>"><?php the_title(); ?></a></div>
          <div class="hit_descr">— Круассан с ростбифом — 10 шт. по 35 г
            Ассорти мини-салатов — 15 шт.:...
          </div>
          <div class="blk_price">
            <div class="count_chel"><?=$people_count;?></div>
            <div class="my_price">
              <?php print_r($price_sum); ?>
              <!-- <span class="old_price">8 290 <span class="ruble">Р</span> </span>
              <span class="new_red_price">6 290<span class="ruble">Р</span></span> -->
            </div>
          </div>
        </div>
        <a class="add_cart" href="<?php the_permalink(); ?>?add-to-cart=<?=$product->id?>">
        Добавить в корзину
        </a>
      </li>
      <?php endwhile;?>
    </ul>
  </div>
  <div style="clear: both;"></div>
  <a href="/sety-ot-shefa/" class="show_sets">Посмотреть все сеты</a>
</div>
<div class="blk_shef">
  <div class="wrapper relative">
    <?php dynamic_sidebar( 'meet_the_shef' ); ?>  
  </div>
</div>
<div class="fish_shef">
  <div class="wrapper">

    <div class="my_articles">
      <div class="fish_ttl">Фишки от Шефа</div>
      <div class="desktop">
        
        <div class="art_left relative">
          <?php
              $args = array(  
                  'post_type' => 'post',  
                  'posts_per_page' => 1,  
                  'taxonomy'=>'home_article_single',
                  'orderby' => 'rand'
              );
              // echo '<pre>';
              //   print_r($args);
              // echo '</pre>';              
               

              $loop = new WP_Query($args);          
              while ($loop->have_posts()) : $loop->the_post(); 
                $single_post = get_post_meta( get_the_ID(), 'single_post', true );
                // $single_post;
                if ($single_post == 1) {?>
                  <?=the_post_thumbnail();?>
                  <div class="art_text_white">
                    <?/* get_the_ID();*/?>
                    <div class="art_ttl"><a href="<?=get_permalink();?>"><?=the_title(); ?></a></div>
                    <div class="art_date"><?=the_date(); ?></div>
                  </div>   
                <? } ?>
                           
            <?php endwhile;?>
        </div>
        <div class="art_right">
          <div class="slider2">
            <?php
              $args = array(  
                  'post_type' => 'post',  
                  'posts_per_page' => -1, 
                  'taxonomy'=>'home_article_slider', 
                  'orderby' => 'rand'                  
              );
              // echo '<pre>';
              //   print_r($args);
              // echo '</pre>';
              $loop = new WP_Query($args);          
              while ($loop->have_posts()) : $loop->the_post(); 
                $single_post = get_post_meta( $loop->post->ID, 'single_post', true );
                if ($single_post != 1) {?>
                <div class="one_sld">
              <div class="one_sld_img"><?=the_post_thumbnail();?></div>
              <div class="art_text">
                <div class="art_ttl_black"><a href="<?=get_permalink();?>"><?=the_title(); ?></a></div>
                <div class="art_date_grey"><?= get_the_date(); ?></div>
              </div>
            </div>    
            <? } 
             endwhile;?>          
          </div>
        </div>
      </div>
      <div class="mob">
	  
	  <?
	      $args = array(  
                  'post_type' => 'post',  
                  'posts_per_page' => 1,  
                  'taxonomy'=>'home_article_single',
                  'orderby' => 'rand'
              );
              // echo '<pre>';
              //   print_r($args);
              // echo '</pre>';              
               

              $loop = new WP_Query($args);          
              while ($loop->have_posts()) : $loop->the_post(); 
                $single_post = get_post_meta( get_the_ID(), 'single_post', true );
                // $single_post;
                if ($single_post == 1) {?>
                
				  
        <div class="fich relative">
          <?=the_post_thumbnail();?>
          <div class="art_text_white">
            <div class="art_ttl"><a href="<?=get_permalink();?>"><?=the_title(); ?></a></div>
            <div class="art_date"><?=the_date(); ?></div>
          </div>
        </div>
				  
				  
				  
                <? } ?>
                           
            <?php endwhile;?>
	  
	  
	  
	  
	   <?php
              $args = array(  
                  'post_type' => 'post',  
                  'posts_per_page' => -1, 
                  'taxonomy'=>'home_article_slider', 
                  'orderby' => 'rand'                  
              );
              // echo '<pre>';
              //   print_r($args);
              // echo '</pre>';
              $loop = new WP_Query($args);          
              while ($loop->have_posts()) : $loop->the_post(); 
                $single_post = get_post_meta( $loop->post->ID, 'single_post', true );
                if ($single_post != 1) {?>
              
			
			
			   <div class="fich">
        <?=the_post_thumbnail();?>
          <div class="art_text">
            <div class="art_ttl_black"><a href="<?=get_permalink();?>"><?=the_title(); ?></a></div>
            <div class="art_date_grey"><?= get_the_date(); ?></div>
          </div>
        </div>
			
			
			
            <? } 
             endwhile;?>   
	  
	  
     
      
	  
	  
      </div>
      <div style="clear: both;"></div>
    </div>

  </div>
</div>

      


<div class="insta">
  <?php dynamic_sidebar( 'instagram' ); ?>  

</div>
<div class="my_contacts relative">
  <div class="cont_right">
    <img src="/wp-content/themes/shef/verstka/image/home/map.png" alt=""/>
  </div>
  <div class="cont_left">
    <div class="wrp_cont">
      <div class="cont_ttl">Контакты</div>
      <div class="cont_blk">
        <a class="map_tel" style="text-align:center" href="tel:+84959919917">+8-495-991-991-7</a>
        <a class="map_email" href="mailto:hello@call-the-chef.ru">hello@call-the-chef.ru</a>
        <div class="my_soz">
          <a href="https://vk.com"><i class="fa fa-vk" aria-hidden="true"></i></a>
          <a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="allo">
        <div class="allo_ttl">- Алло, Шеф. </div>
        Хочу быстрый фуршет!
      </div>
      <img class="green_trub" alt="" src="/wp-content/themes/shef/verstka/image/home/zvonok.fw.png"/>
    </div>
  </div>
  <div class="clb"></div>
</div>
<?php /*
  <article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >
<?php
  if ( has_post_thumbnail() ) :
    $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );
  
    $ratio = $thumbnail[2] / $thumbnail[1] * 100;
    ?>
<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
  <div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
</div>
<?php endif; ?>
<div class="panel-content">
  <div class="wrap">
    <header class="entry-header">
      <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
      <?php twentyseventeen_edit_link( get_the_ID() ); ?>
    </header>
    <div class="entry-content">
      <?php
        the_content(
          sprintf(
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
            get_the_title()
          )
        );
        ?>
    </div>
  </div>
</div>
</article><!-- #post-<?php the_ID(); ?> -->
*/ ?>