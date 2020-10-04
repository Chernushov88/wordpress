<?
require_once ABSPATH . 'wp-admin/includes/user.php';

/*php if (is_active_sidebar('envo-storefront-top-bar-area')) { ?>
    <div class="top-bar-section container-fluid">
        <div class="<?php echo esc_attr(get_theme_mod('top_bar_content_width', 'container')); ?>">
            <div class="row">
                <?php dynamic_sidebar('envo-storefront-top-bar-area'); ?>
            </div>
        </div>
    </div>
<?php } */?>
<?/*div class="site-header container-fluid">
    <div class="<?php echo esc_attr(get_theme_mod('header_content_width', 'container')); ?>" >
        <div class="heading-row row" >
            <div class="site-heading <?php echo esc_attr(class_exists('WooCommerce') == true ? 'col-md-4' : 'col-md-6' ); ?> col-xs-12" >
                <div class="site-branding-logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="site-branding-text">
                    <?php if (is_front_page()) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                    <?php endif; ?>

                    <?php
                    $description = get_bloginfo('description', 'display');
                    if ($description || is_customize_preview()) :
                        ?>
                        <p class="site-description">
                            <?php echo esc_html($description); ?>
                        </p>
                    <?php endif; ?>
                </div><!-- .site-branding-text -->
            </div>
            <div class="search-heading col-md-6 col-xs-12">
                <?php if (class_exists('WooCommerce')) { ?>
                    <div class="header-search-form">
                        <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                            <input type="hidden" name="post_type" value="product" />
                            <input class="header-search-input" name="s" type="text" placeholder="<?php esc_attr_e('Search products...', 'envo-storefront'); ?>"/>
                            <select class="header-search-select" name="product_cat">
                                <option value=""><?php esc_html_e('All Categories', 'envo-storefront'); ?></option>
                                <?php
                                $categories = get_categories('taxonomy=product_cat');
                                foreach ($categories as $category) {
                                    $option = '<option value="' . esc_attr($category->category_nicename) . '">';
                                    $option .= esc_html($category->cat_name);
                                    $option .= ' (' . absint($category->category_count) . ')';
                                    $option .= '</option>';
                                    echo $option; // WPCS: XSS OK.
                                }
                                ?>
                            </select>
                            <button class="header-search-button" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                <?php } ?>
                <?php if (is_active_sidebar('envo-storefront-header-area')) { ?>
                    <div class="site-heading-sidebar" >
                        <?php dynamic_sidebar('envo-storefront-header-area'); ?>
                    </div>
                <?php } ?>
            </div>
            <?php if (function_exists('envo_storefront_header_cart') && class_exists('WooCommerce')) { ?>
                <div class="header-right col-md-2 hidden-xs" >
                    <?php envo_storefront_my_account(); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
*/?>
<?
//print_r($_GET)
?>
<div class="ms_header ">
    <div class="ms_top_left">
    <a href="/" class="visible-xs-inline-block  logo"><img src="/wp-content/themes/envo-storefront/img/logo-3.png" alt=""></a>
            <div class="ms_top_search">
            <?= do_shortcode('[smart_search id="1"]'); ?>
             <?/*<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="hidden" name="post_type" value="product" />
                <input class="searchinput form-control" name="s" type="text" placeholder="<?php esc_attr_e('Search products...', 'envo-storefront'); ?>"/>
                <button class="header-search-button search-submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>*/?>
        </div>
    <div class="ms_top_trend">
            <span>
            <a href="/product/yun-fat-chow/" class="ms_color"></a></span>
            <span class="top_marquee">
                <a href="http://pozdr2.beget.tech/trending/">立即下载并获取您的视频！</a>
            </span>
        </div>
    </div>
    <div class="ms_top_right">
      <span style="display: none;">Languages</span>
      <?/*<a class="glink">CN</a>*/?>
      <div style="display: none;"><?=   do_shortcode('[gtranslate]'); ?></div>

                <div class="ms_top_btn">
<?/*
<a href="#" class="visible-xs-inline-block visible-search"
   onclick="document.querySelector('#mob_search').classList.toggle('active');">
   <img src="/wp-content/themes/envo-storefront/img/icons-v2/search.png" alt="">
   </a>*/?>
<a href="/create-your-account/" class="ms_btn reg_btn">
    <!--<span>Sign up</span>-->
    <span>用户注册</span>
    <img src="/wp-content/themes/envo-storefront/img/icons-v2/Signup.png" alt="">
    <!--<i style="color: transparent; width: 1px;">SignUp</i>-->
</a>
<a href="/mingming.io/enroll-as-celebrity-new/" class="ms_btn reg_btn">
    <span>明星注册</span>
    <img src="/wp-content/themes/envo-storefront/img/icons-v2/Enroll.png" alt="">
</a>
<?php
if (is_user_logged_in()) {

$current_user = wp_get_current_user();
$login = $current_user->user_login;
    $login;
    $login = 'Logged as '.$login;
}else{
    $login = '登录';
}

 ?>
<?/*<a href="/my-account-2/" class="ms_btn login_btn"><span>=$login;</span>*/?>
<a href="/my-account-2/" class="ms_btn login_btn"><span>登录</span>
<img src="/wp-content/themes/envo-storefront/img/icons-v2/Login.png" alt="">
<!--<i>login</i>-->
</a>
                    </div>
            </div>
</div>
