 <?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage shef
 * @since 1.0
 * @version 1.0
 */

?>
    </main>
<?php

$strServ = $_SERVER['REQUEST_URI'];
$footerClass = '';
$pozvoniShefu = 'pozvoni-shefu';
$home = '/';
$lk = 'lichnyj-kabinet';

if( $strServ == $home ){
  $footerClass = 'mob';
  
}
else{
  if( strstr($strServ, $pozvoniShefu) ){
    $footerClass = 'marg_t0 fut_abs';
  }elseif( strstr($strServ, $lk) ){
    $footerClass = 'marg_t0';
  }
}?>
    <footer class="<?=$footerClass;?>">
      <div class="wrapper relative">
        <a href="/wp-content/themes/shef/verstka/#" class="go_top m0"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        <div class="fut_left">
          <a href="/wp-content/themes/shef/verstka/index.html">
          <img src="/wp-content/themes/shef/verstka/svg/logo.svg" alt=""/>
          </a>
        </div>
        <div class="fut_right">
          <div class="fut_tel">
            <a href="/wp-content/themes/shef/verstka/tel:+74959919917">+7 (495) 991-991-7</a>
          </div>
          <div class="my_soz">
<!--
            <a href="/wp-content/themes/shef/verstka/https://vk.com"><i class="fa fa-vk" aria-hidden="true"></i></a>
            <a href="/wp-content/themes/shef/verstka/https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
-->
            <a href="www.instagram.com/call.chef/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="fut_center">
          Все права защищены «Call Cheff» 2019
          <div class="politika"><a href="/wp-content/themes/shef/verstka/#">Политика конфиденциальности</a></div>
          <div class="razrab"><a href="https://www.eleven-group.ru/">Разработано </div>
        </div>
      </div>
      <div class="clb"></div>
      <div class="bot_fut mob">
        <a href="/wp-content/themes/shef/verstka/tel:+74959919917" class="icon_phone"></a>
        <a href="/wp-content/themes/shef/verstka/lk.hnml" class="icon_lk"></a>
        <a href="/wp-content/themes/shef/verstka/cart.html" class="icon_cart"></a>
      </div>
    </footer>
  </div>
  <script src="/wp-content/themes/shef/assets/js/common.js"></script>
  <div id="scroll"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
<?php wp_footer(); ?>

</body>
</html>