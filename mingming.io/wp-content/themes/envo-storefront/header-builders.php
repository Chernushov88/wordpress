<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <script>

window.addEventListener("load", function() {

  let w = innerWidth,
h = innerHeight;
//alert(w + 'x' + h)
let h1 = document.querySelector('#testWidthHeight');
console.log(h1);
//h1.textContent = w + 'x' + h;
//h1.innerHTML = w ;
  console.log(w);
  console.log(h);
    console.log(h1);
}, false);



    </script>
  </head>
  <body id="blog" <?php body_class(); ?> >
    <div class="wp_loader">
      <div class="wrap">
        <img src="/wp-content/themes/envo-storefront/img/loader.gif" alt="site loader">
      </div>
    </div>
    <div class="hide" id="mob_search">
       <div class="ms_top_search">
        <a href="#"
             class="close"
             onclick="document.querySelector('#mob_search').classList.remove('active');"><i class="fa fa-times" aria-hidden="true"></i></a>
            <?= do_shortcode('[smart_search id="1"]'); ?>
        </div>
    </div>
    <div class="ms_sidemenu_wrapper ">
      <div class="ms_nav_close">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
      </div>
      <div class="ms_sidemenu_inner">
        <div class="ms_logo_inner">
          <div class="ms_logo">
            <a href="/" class="logo"><img src="/wp-content/themes/envo-storefront/img/logo-3.png" alt=""></a>
          </div>
        </div>
        <?php do_action('envo_storefront_before_menu'); ?>
        <nav id="site-navigation" class="navbar navbar-default">
          <div class="navbar-header">
            <?php if (function_exists('max_mega_menu_is_enabled') && max_mega_menu_is_enabled('main_menu')) : ?>
            <?php elseif (has_nav_menu('main_menu')) : ?>
            <span class="navbar-brand brand-absolute visible-xs"><?php esc_html_e('Menu', 'envo-storefront'); ?></span>
            <?php if (function_exists('envo_storefront_header_cart') && class_exists('WooCommerce')) { ?>
            <div class="mobile-cart visible-xs" >
              <?php envo_storefront_header_cart(); ?>
            </div>
            <?php } ?>
            <?php if (function_exists('envo_storefront_my_account') && class_exists('WooCommerce')) { ?>
            <div class="mobile-account visible-xs" >
              <?php envo_storefront_my_account(); ?>
            </div>
            <?php } ?>
            <div id="main-menu-panel" class="open-panel" data-panel="main-menu-panel">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <?php endif; ?>
          </div>
          <?php
            $menu_pos = get_theme_mod('main_menu_float', 'left');
            wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'depth' => 5,
                'container_id' => 'my-menu',
                'container' => 'div',
                'container_class' => 'menu-container',
                'menu_class' => 'nav navbar-nav navbar-' . $menu_pos,
                'fallback_cb' => 'Envo_Storefront_WP_Bootstrap_Navwalker::fallback',
                'walker' => new Envo_Storefront_WP_Bootstrap_Navwalker(),
            ));
            ?>
          <?php do_action('envo_storefront_menu'); ?>
        </nav>
        <?php do_action('envo_storefront_after_menu'); ?>
      </div>
    </div>
    <?php wp_body_open(); ?>
    <div class="page-wrap">
    <?php get_template_part('template-parts/template-part', 'topnav'); ?>
    <?php get_template_part('template-parts/template-part', 'head'); ?>
    <h1 id="testWidthHeight"></h1>