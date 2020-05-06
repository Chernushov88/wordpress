<?/*php if (is_active_sidebar('envo-storefront-top-bar-area')) { ?>
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
            <a href="/product/yun-fat-chow/" class="ms_color">
              Trending Actor Yun-Fat Chow           </a></span>
            <span class="top_marquee">
                <a href="http://pozdr2.beget.tech/trending/">
                  Thank you so much! I cannot wait to give this to my brother on his birthday!!             </a>
            </span>
        </div>
    </div>
    <div class="ms_top_right">
                <div class="ms_top_btn">
<a href="javasctipt:void(0);"
   class="visible-xs-inline-block visible-search"
   onclick="document.querySelector('#mob_search').classList.toggle('active');"><i class="fa fa-search" aria-hidden="true"></i></a>
<a href="/create-your-account/" class="ms_btn reg_btn"> <span>Sign up</span> <img src="/wp-content/themes/envo-storefront/img/icon/Signup_brighter.png" alt=""></a>
<a href="/enroll/" class="ms_btn reg_btn"><span>Enroll as Actor </span><img src="/wp-content/themes/envo-storefront/img/icon/Enroll_brighter.png" alt=""></a>
<?php
if (is_user_logged_in()) {
    $login = 'My profile';
}else{
    $login = 'login';
}

 ?>
<a href="/my-account-2/" class="ms_btn login_btn"><span><?=$login;?></span><img src="/wp-content/themes/envo-storefront/img/icon/login_brighter.png" alt=""></a>
                    </div>
            </div>
</div>