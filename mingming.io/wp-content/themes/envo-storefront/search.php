<?php get_header(); ?>

<?php get_template_part('template-parts/template-part', 'head'); ?>
<style>
.woocommerce ul.products::before{
    display: none;
}
.woocommerce ul.products li.product:nth-of-type(3n + 3) {
    margin-right: 0;

}
.woocommerce ul.products li.product:nth-of-type(3n + 4){
    clear: inherit;
}
.text-center {
    text-align: left;
    margin: 0 0 30px;
}
.woocommerce ul.products li.product img{
    border-radius: 10px;
}
</style>
<!-- start content container -->
<div class="row">


    <div class="col-md-<?php envo_storefront_main_content_width_columns(); ?>">
        <?php
        // if this was a search we display a page header with the results count. If there were no results we display the search form.
        if (is_search()) :
            /* translators: %s: search result string */
            echo "<h1 class='search-head text-center'>" . sprintf(esc_html__('Search Results for: %s', 'envo-storefront'), get_search_query()) . "</h1>";

        endif;

        if (have_posts()) :
?>
    <div class="woocommerce columns-4">
    <ul class="products columns-3">
        <?
            while (have_posts()) : the_post();

                get_template_part('content', get_post_format());


            endwhile;

            the_posts_pagination();
?>    </ul>
</div><?
        else :

            get_template_part('content', 'none');

        endif;
        ?>

    </div>

    <?php get_sidebar('right'); ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>
