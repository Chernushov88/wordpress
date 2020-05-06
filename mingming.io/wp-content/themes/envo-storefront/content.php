<?/*article class="col-6 col-sm-4 col-md-6 col-lg-4 ">
    <div <?php post_class(); ?>>
        <div class="news-item <?php echo esc_attr(has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail' ) ?>">
            <?php envo_storefront_thumb_img('envo-storefront-med'); ?>
            <div class="news-text-wrap">
                <?php envo_storefront_author_meta(); ?>
                <div class="content-date-comments">
                    <?php envo_storefront_widget_date(); ?>
                    <?php envo_storefront_widget_comments(); ?>
                </div>
                <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                <div class="post-excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
    </div>
</article */?>
<?php post(); ?>>
<li class="product">
    <a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
        <?php envo_storefront_thumb_img('envo-storefront-med'); ?>
        <h2 class="woocommerce-loop-product__title"><? the_title();?></h2>
    </a>
</li>
