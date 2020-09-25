<div class="grid-wrapp">
  <div class="grid">
<?php
  /*$loop = new WP_Query( array(
   'post_type' => 'product',  // указываем, что выводить нужно именно товары
   'posts_per_page' => 6, // количество товаров для отображения
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

    <div class="grid-item" data-colspan="<?=$i;?>" data-rowspan="<?=$i;?>" style="background: url(<?= $thumb_url[0];?>);">
    <a href="<?php echo get_permalink(); ?>" ></a>
  </div>
<?php $i++; endwhile; */?>
    <div class="grid-item" data-colspan="2" data-rowspan="2" >
      <a href="" ></a>
    </div>
    <div class="grid-item" data-colspan="1" data-rowspan="1" >
      <a href="" ></a>
    </div>
    <div class="grid-item" data-colspan="2" data-rowspan="1" >
      <a href="" ></a>
    </div>
    <div class="grid-item" data-colspan="1" data-rowspan="2" >
      <a href="" ></a>
    </div>


    <div class="grid-item" data-colspan="2" data-rowspan="1" >
      <a href="" ></a>
    </div>
    <div class="grid-item" data-colspan="1" data-rowspan="1" >
      <a href="" ></a>
    </div>
</div>
</div>
<style>

</style>
<script type="text/javascript" src="/wp-content/themes/envo-storefront/js/jquery.responsivegrid.js"></script>
<script type="text/javascript">
  jQuery('.grid').responsivegrid({
          'breakpoints': {
              'desktop' : {
                  'range' : '1900-8000',
                  'options' : {
                      'column' : 6,
                      'gutter' : '85px',
                      'itemHeight' : '100%',
                      'resizeDelay' : '2000',
                      'resizeTimeout' : '5000',
                  }
              },
              'tablet-landscape' : {
                  'range' : '1366-1900',
                  'options' : {
                      'column' : 6,
                      'gutter' : '35px',
                  }
              },
              'tablet-portrate' : {
                  'range' : '1024-1366',
                  'options' : {
                      'column' : 6,
                      'gutter' : '20px',
                  }
              },
              'tablet-portrate' : {
                  'range' : '767-1024',
                  'options' : {
                      'column' : 3,
                      'gutter' : '10px',
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