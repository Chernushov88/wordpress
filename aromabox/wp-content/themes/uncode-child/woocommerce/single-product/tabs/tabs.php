<?php

/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters('woocommerce_product_tabs', array());
global $post, $product;

$heading = apply_filters('woocommerce_product_description_heading', __('Description', 'woocommerce'));

if (! empty($product_tabs)) :
    ?>

  <div class="woocommerce-tabs wc-tabs-wrapper">
  <div class="bottom-wrapper">
        <div class="left-card-side">
        
        <?php add_star_rating_aa_item(); ?>
        

            <div class="card-desc">
                <div class="desc-header">
                    <?php the_content(); ?>
                </div>
                <div class="detail-desc-block">
                    <?php do_action('woocommerce_product_additional_information', $product); ?>

                </div>
            </div>

            <div class="btn-desc">
                <a href="#">Читать полностью</a>
            </div>
            <!-- <div class="voit-box">
                <p>ВАШЕ ОТНОШЕНИЕ К <?php the_title(); ?></p>
                <div class="for-voit-wrapp">
                    <div class="wrapivoit">
                        <div class="smile-qwart">
                            <img src="/wp-content/uploads/2020/07/group.png" alt="">
                        </div>
                        <p class="voit-prg">Нравится</p>
                        <p class="voit-numb">67</p>
                    </div>
                    <div class="wrapivoit">
                        <div class="up-qwart">
                            <img src="/wp-content/uploads/2020/07/like-5.png" alt="">
                        </div>
                        <p class="voit-prg">Хороший</p>
                        <p class="voit-numb">67</p>
                    </div>
                    <div class="wrapivoit">
                        <div class="dawn-qwart">
                            <img src="/wp-content/uploads/2020/07/like-6.png" alt="">
                        </div>
                        <p class="voit-prg">Плохой</p>
                        <p class="voit-numb">67</p>
                    </div>
                    <div class="wrapivoit">
                        <div class="hart-qwart">
                            <img src="/wp-content/uploads/2020/07/vector-1.png" alt="">
                        </div>
                        <p class="voit-prg">В избранное</p>
                        <p class="voit-numb">67</p>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="right-card-side">
        
        
        <?php do_action('woocommerce_comments_template_abg'); ?>
        
        
        
        
        
        <!--
        
        
            <p>Отзывы о товаре <span>(98)</span></p>
            <div class="main-wrap-otziv">
                <div class="otziv-btn">
                    <a href="">Оставить отзыв</a>
                </div>
                <div class="wrap-otziv-box">
                    <div class="wrap-otziv">

                        <div class="otziv-bg">
                            <div class="stars-otziv">
                                <img src="/wp-content/uploads/2020/07/bx_bxs-star.png" alt="">
                                <img src="/wp-content/uploads/2020/07/bx_bxs-star.png" alt="">
                                <img src="/wp-content/uploads/2020/07/bx_bxs-star.png" alt="">
                                <img src="/wp-content/uploads/2020/07/bx_bxs-star.png" alt="">
                                <img src="/wp-content/uploads/2020/07/bx_bxs-star.png" alt="">
                            </div>
                            <p>Здравствуйте! Мы сознательно выбрали политику умеренных цен, потому что нам важно
                                долгосрочное сотрудничество с клиеннтами. Также нам не приходится платить за аренду
                                торговых
                                залов, содержать продацов-консультантов и кассиров. Но это не мешает нам работать
                                напрямую с
                                официальными дистрибьютерами и закупать у них товар по оптовым ценам. Отсутствие лишних
                                расходов и ставка на проверенных партнеров позволяет сделать цену приятной для клиента.
                            </p>
                            <img class="rectangle-otziv" src="/wp-content/uploads/2020/07/rectangle-81.png" alt="">
                        </div>

                        <p class="otziv-avtor">Татьяна Ермолаева, <span class="otziv-data"> 11 января</span></p>
                    </div>
                    <div class="wrap-otziv">

                        <div class="otziv-bg">
                            <div class="stars-otziv">
                            <img src="/wp-content/uploads/2020/07/bx_bxs-star.png" alt="">
                                <img src="/wp-content/uploads/2020/07/bx_bxs-star.png" alt="">
                                <img src="/wp-content/uploads/2020/07/bx_bxs-star.png" alt="">
                                <img src="/wp-content/uploads/2020/07/bx_bxs-star.png" alt="">
                                <img src="/wp-content/uploads/2020/07/bx_bxs-star.png" alt="">
                            </div>
                            <p>Здравствуйте! Мы сознательно выбрали политику умеренных цен, потому что нам важно
                                долгосрочное сотрудничество с клиеннтами. Также нам не приходится платить за аренду
                                торговых
                                залов, содержать продацов-консультантов и кассиров. Но это не мешает нам работать
                                напрямую с
                                официальными дистрибьютерами и закупать у них товар по оптовым ценам. Отсутствие лишних
                                расходов и ставка на проверенных партнеров позволяет сделать цену приятной для клиента.
                            </p>
                            <img class="rectangle-otziv" src="/wp-content/uploads/2020/07/rectangle-81.png" alt="">
                        </div>

                        <p class="otziv-avtor">Татьяна Ермолаева, <span class="otziv-data"> 11 января</span></p>
                    </div>
                    <div class="wrap-otziv">

                        <div class="otziv-bg">
                            <div class="stars-otziv">
                            <img src="/wp-content/uploads/2020/07/bx_bxs-star.png" alt="">
                                <img src="/wp-content/uploads/2020/07/bx_bxs-star.png" alt="">
                                <img src="/wp-content/uploads/2020/07/bx_bxs-star.png" alt="">
                                <img src="/wp-content/uploads/2020/07/bx_bxs-star.png" alt="">
                                <img src="/wp-content/uploads/2020/07/bx_bxs-star.png" alt="">
                            </div>
                            <p>Здравствуйте! Мы сознательно выбрали политику умеренных цен, потому что нам важно
                                долгосрочное сотрудничество с клиеннтами. Также нам не приходится платить за аренду
                                торговых
                                залов, содержать продацов-консультантов и кассиров. Но это не мешает нам работать
                                напрямую с
                                официальными дистрибьютерами и закупать у них товар по оптовым ценам. Отсутствие лишних
                                расходов и ставка на проверенных партнеров позволяет сделать цену приятной для клиента.
                            </p>
                            <img class="rectangle-otziv" src="/wp-content/uploads/2020/07/rectangle-81.png" alt="">
                        </div>

                        <p class="otziv-avtor">Татьяна Ермолаева, <span class="otziv-data"> 11 января</span></p>
                    </div>
                </div>
                <div class="otziv-btn">
                    <a href="">Показать еще</a>
                </div>
            </div>
            
            -->
            
            
        </div>
    </div>

        <?php do_action('woocommerce_product_after_tabs'); ?>
 </div>

    <?php
endif; ?>
