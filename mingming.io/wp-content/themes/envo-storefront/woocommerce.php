<?php get_header();

    $strServer =$_SERVER['REQUEST_URI'];
    $product = "/product/";
    $classProduct = '';
    if (strstr($strServer, $product)){
        $classProduct = 'col-md-product';
    }
?>

<!-- start content container -->
<div class="row row_product">
    <article class="col-md-<?php envo_storefront_main_content_width_columns(); ?> <?=$classProduct;?> col-product">
        <?php woocommerce_content(); ?>
    </article>
    <?php get_sidebar('right'); ?>
</div>
<!-- end content container -->

<?php
get_footer();
