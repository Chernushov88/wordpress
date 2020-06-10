<div class="grid-wrapp">
  <div class="grid">
<?php
  $loop = new WP_Query( array(
   'post_type' => 'product',  // указываем, что выводить нужно именно товары
   'posts_per_page' => 11, // количество товаров для отображения
   'orderby' => 'rand', // тип сортировки (в данном случае по дате)
   'order' => '',
   ));

$i = 1;
   while ( $loop->have_posts() ): $loop->the_post();
    $thumb_id = get_post_thumbnail_id();
    $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);

    if ($i == 4) {
      $i = 1;
    }

    ?>

    <div class="grid-item" data-colspan="<?=$i;?>" data-rowspan="2" style="background: url(<?= $thumb_url[0];?>);">
    <a href="<?php echo get_permalink(); ?>" ></a>
  </div>
<?php $i++; endwhile; ?>
</div>
</div>
<style>
  .grid{
  margin-bottom: 145px;
  }
  .grid-item {
  position: relative;
  /*padding: 1px;*/
  overflow: hidden;
  box-sizing: border-box;
  background-size: cover !important;
  background-position: center !important;
  -webkit-transition-duration: var(--image-transition-duration);
    -o-transition-duration: var(--image-transition-duration);
    transition-duration: var(--image-transition-duration);
    -webkit-transition-property: -webkit-filter,-webkit-transform;
    transition-property: -webkit-filter,-webkit-transform;
    -o-transition-property: filter,transform;
    transition-property: filter,transform;
    transition-property: filter,transform,-webkit-filter,-webkit-transform;
    opacity: 0;
    -webkit-transition: 1s ease-in-out all;
    -moz-transition: 1s ease-in-out all;
    -o-transition: 1s ease-in-out all;
    transition: 1s ease-in-out all;
  }
  .loader .grid-item {
    opacity: 1;
  }
  .grid-item a{
  display: block;
  width: 100%;
  height: 100%;
  cursor: pointer;
  }
  .grid-item img{
  display: block;
  width: 100%;
  height: auto;
  transition: 1s ease all;
  }
  .grid-item:hover{
  padding: 0;
  outline: 0;
  box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.30) !important;
  }
  .grid-item a:hover img{
  transform: scale(1.1);
  }
</style>
<script type="text/javascript" src="/wp-content/themes/envo-storefront/js/jquery.responsivegrid.js"></script>
<script type="text/javascript">
  jQuery('.grid').responsivegrid({
          'breakpoints': {
              'desktop' : {
                  'range' : '1200-2600',
                  'options' : {
                      'column' : 7,
                      'gutter' : '10px',
                      'itemHeight' : '80%',
                      'resizeDelay' : '2000',
                      'resizeTimeout' : '5000',
                  }
              },
              'tablet-landscape' : {
                  'range' : '1000-1200',
                  'options' : {
                      'column' : 4,
                  }
              },
              'tablet-portrate' : {
                  'range' : '767-1000',
                  'options' : {
                      'column' : 3,
                  }
              },
              'mobile' : {
                  'range' : '-767',
                  'options' : {
                      'column' : 2,
                  }
              },
          }
      });

  window.onload = function() {
    console.log('11111111111');
    setTimeout( function(){}, 2000)
      document.querySelector('body').classList.add('body-griad');

  }

</script>