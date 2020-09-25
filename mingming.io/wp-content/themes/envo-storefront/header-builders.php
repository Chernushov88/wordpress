<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin: 0 !important">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TH34B82');</script>
<!-- End Google Tag Manager -->
<style>
p {
    margin: 0;
}
#elementor-tab-content-2634{
  display: none !important;
}
.elementor-widget:not(:last-child) {
    margin-bottom: 0;
}
.elementor-element-76f5231 ul.products li.product {
    margin-bottom: 2rem !important;
}
</style>
  </head>
  <body id="blog" <?php body_class(); ?> >
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TH34B82"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
        <a href="javascript:void(0);" class="ms_btn writing_btn" onclick="ShowPopup('#popupWriting')">Write to us</a>
      </div>
    </div>
    <?php wp_body_open(); ?>
    <div class="page-wrap">
    <?php get_template_part('template-parts/template-part', 'topnav'); ?>
    <?php get_template_part('template-parts/template-part', 'head'); ?>
