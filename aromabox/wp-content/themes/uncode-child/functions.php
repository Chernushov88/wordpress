<?php

require_once  get_stylesheet_directory() . '/inc/shortcode.php';

add_action('after_setup_theme', 'uncode_language_setup');
function uncode_language_setup()
{
    load_child_theme_textdomain('uncode', get_stylesheet_directory() . '/languages');
}

function theme_enqueue_styles()
{
    $production_mode = ot_get_option('_uncode_production');
    $resources_version = ($production_mode === 'on') ? null : rand();
    if (function_exists('get_rocket_option') && ( get_rocket_option('remove_query_strings') || get_rocket_option('minify_css') || get_rocket_option('minify_js') )) {
        $resources_version = null;
    }
    $parent_style = 'uncode-style';
    $child_style = array('uncode-style');
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/library/css/style.css', array(), $resources_version);
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', $child_style, $resources_version);
    wp_enqueue_script('child-js', get_stylesheet_directory_uri() . '/js/script.js');
    function add_defer_attribute($tag, $handle)
    {
        $scripts_to_defer = array('child-js');
      
        foreach ($scripts_to_defer as $defer_script) {
            if ($defer_script === $handle) {
                return str_replace(' src', ' defer="defer" src', $tag);
            }
        }
        return $tag;
    }
     add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles', 100);
add_action('woocommerce_grouped_product_list_before_label', 'woocommerce_grouped_product_thumbnail');



function woocommerce_grouped_product_thumbnail($product)
{

    $image_size = array( 170, 170 );
// array( width, height ) image size in pixel
    $attachment_id = get_post_meta($product->id, '_thumbnail_id', true);
    ?>
    <td class="label">
        <?php echo wp_get_attachment_image($attachment_id, $image_size); ?>
    </td>
    <?php
}


add_action('woocommerce_grouped_product_list_after_price', 'woocommerce_grouped_product_list_after_price_abg', 999);
function woocommerce_grouped_product_list_after_price_abg($product)
{

    ?>
    <td class="price">
      <a href="<?php echo $product->add_to_cart_url() ?>" value="<?php echo esc_attr($product->get_id()); ?>" class="ajax_add_to_cart single_add_to_cart_button alt btn btn-default add_to_cart_button" data-product_id="<?php echo $product->get_id(); ?>" data-product_sku="<?php echo $product->get_sku() ?>" ><?php echo esc_html($product->single_add_to_cart_text()); ?></a>
    </td><?php
}

//////////////////////////////////////////////////////////////////


add_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 11);
add_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 16);
//add_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 21);
//add_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 6);
add_action('woocommerce_review_before', 'woocommerce_review_display_gravatar', 11);
add_action('woocommerce_review_meta', 'woocommerce_review_display_meta', 11);
//add_action('woocommerce_review_meta', array( 'WC_Structured_Data', 'generate_review_data' ), 21);
add_action('woocommerce_review_comment_text', 'woocommerce_review_display_comment_text', 11);
add_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 11);
//add_action('woocommerce_before_main_content', array( 'WC_Structured_Data', 'generate_website_data' ), 30);
add_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 11);
add_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 21);
add_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 11);
add_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 11);
add_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 21);
add_action('woocommerce_no_products_found', 'wc_no_products_found');
add_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 11);
add_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 11);
add_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 11);
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 11);
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 11);
add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 11);
//add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 6 );
add_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 11);
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 6);
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 11);
add_action('woocommerce_before_subcategory', 'woocommerce_template_loop_category_link_open', 11);
add_action('woocommerce_before_subcategory_title', 'woocommerce_subcategory_thumbnail', 11);
add_action('woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title', 11);
add_action('woocommerce_after_subcategory', 'woocommerce_template_loop_category_link_close', 11);

add_action('woocommerce_comments_template_abg', 'comments_template', 50);
//remove_action( 'woocommerce_template_loop_rating','woocommerce_shop_loop_item_desc', 6);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

function tab_lk_main()
{

    // TAB - ЛК - Главная
    if (!is_user_logged_in()) {
        return;
    }
    $post_id = 81404;
// example post id
    $post_content = get_post($post_id);
    $content = $post_content->post_content;
    echo apply_filters('the_content', $content);
}


function tab_lk_products()
{

    // Товары
    if (!is_user_logged_in()) {
        return;
    }
    $post_id = 81399;
// example post id
    $post_content = get_post($post_id);
    $content = $post_content->post_content;
    echo apply_filters('the_content', $content);
}

function tab_lk_orders()
{

    // Покупки
    if (!is_user_logged_in()) {
        return;
    }
    $post_id = 81409;
// example post id
    $post_content = get_post($post_id);
    $content = $post_content->post_content;
    echo apply_filters('the_content', $content);
}


function tab_lk_feedback()
{

    // Обратная связь
    if (!is_user_logged_in()) {
        return;
    }
    $post_id = 81420;
// example post id
    $post_content = get_post($post_id);
    $content = $post_content->post_content;
    echo apply_filters('the_content', $content);
}
function tab_lk_comments()
{

    // Мои отзывы
    if (!is_user_logged_in()) {
        return;
    }
    $post_id = 81426;
// example post id
    $post_content = get_post($post_id);
    $content = $post_content->post_content;
    echo apply_filters('the_content', $content);
}

function tab_lk_profile()
{

    // TAB - ЛК - Профиль
    if (!is_user_logged_in()) {
        return;
    }
    $post_id = 81422;
// example post id
    $post_content = get_post($post_id);
    $content = $post_content->post_content;
    echo apply_filters('the_content', $content);
}



/////////////// шоп


if (! function_exists('yith_wcwl_add_to_wishlist_in_shop')) {
    function yith_wcwl_add_to_wishlist_in_shop()
    {
        echo do_shortcode("[yith_wcwl_add_to_wishlist]");
    }

}
add_action('woocommerce_before_shop_loop_item', 'yith_wcwl_add_to_wishlist_in_shop', 10);
//add_action('woocommerce_single_product_image_thumbnail_html', 'yith_wcwl_add_to_wishlist_in_shop', 10);


function my_custom_contnet()
{
    echo '<div class="custom" style="background: #fdfd5a; clear:left; width:50%">';
    echo '<p>My custom contnet here..</p>';
    echo '</div>';
}

function webroom_add_short_description_in_product_categories()
{
    global $product;
    if (! $product->get_short_description()) :
        ?>
    <p>&nbsp;</p>
        <?php
    else :
        ?>
    <div itemprop="description">
         <?php echo apply_filters('woocommerce_short_description', $product->get_short_description()) ?>
    </div>
        <?php
    endif;
}
add_action('woocommerce_after_shop_loop_item_title', 'webroom_add_short_description_in_product_categories', 5);
add_action('woocommerce_before_shop_loop_item_title', 'add_star_rating_aa', 999);


function add_star_rating_aa_item()
{
    global $woocommerce, $product;
    $average = $product->get_average_rating();
    echo '<div class="stars-block"><div class="star-rating"><span style="width:' . ( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">' . $average . '</strong> ' . __('out of 5', 'woocommerce') . '</span></div>' .
    '<div class="stars-prgrph">' . get_comments(array(
        'status'   => 'approve',
        'post_status' => 'publish',
        'post_type'   => 'product',
        'count' => true,
        'post_id' => $product->id,
    )) .  ' отзывов </div>'


    . '</div>';
}




function add_star_rating_aa()
{
    global $woocommerce, $product;
    $average = $product->get_average_rating();
    echo '<div class="short-rate-img"><div class="star-rating"><span style="width:' . ( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">' . $average . '</strong> ' . __('out of 5', 'woocommerce') . '</span></div>' .
    '<div class="short-rate-comm">' . get_comments(array(
        'status'   => 'approve',
        'post_status' => 'publish',
        'post_type'   => 'product',
        'count' => true,
        'post_id' => $product->id,
    )) . '<div class="short-rate-wishlist">' . YITH_WCWL_Wishlist_Factory::get_wishlist_items_count(array( 'product_id' => $product->id, 'user_id' => false, 'session_id' => false, 'wishlist_id' => 'all' )) . '</div>' . '</div>'


    . '</div>';
}

add_action('woocommerce_after_shop_loop_item', 'add_button_qw', 999);
function add_button_qw()
{
    global $product;
    if (true) {
        echo '<a class="qw" href="#">Быстрый просмотр</a>';
    } else {
        echo '<div class="wrap-btn-cart-custom"><a class="cart-custom-btn" href="#">В корзину</a></div>';
    }
}









function add_percentage_to_sale_badge($product)
{
    if ($product->is_type('variable')) {
        $percentages = array();

        // Get all variation prices
        $prices = $product->get_variation_prices();

        // Loop through variation prices
        foreach ($prices['price'] as $key => $price) {
            // Only on sale variations
            if ($prices['regular_price'][$key] !== $price) {
                // Calculate and set in the array the percentage for each variation on sale
                $percentages[] = round(100 - ($prices['sale_price'][$key] / $prices['regular_price'][$key] * 100));
            }
        }
        // We keep the highest value
        $percentage = max($percentages) . '%';
    } else {
        $regular_price = (float) $product->get_regular_price();
        $sale_price    = (float) $product->get_sale_price();
        if ($sale_price != 0) {
            $percentage    = '-' . round(100 - ($sale_price / $regular_price * 100)) . '%';
        }
    }
    return '<span class="single-product-price-diskount">' . $percentage . '</span>';
}

function woocommerce_orders()
{
    $user_id = get_current_user_id();
    if ($user_id == 0) {
         return do_shortcode('[woocommerce_my_account]');
    } else {
        ob_start();
        wc_get_template('myaccount/my-orders.php', array(
            'current_user'  => get_user_by('id', $user_id),
            'order_count'   => $order_count
         ));
        return ob_get_clean();
    }
}
add_shortcode('woocommerce_orders', 'woocommerce_orders');

function woocommerce_edit_profile()
{
    $user_id = get_current_user_id();
    if ($user_id == 0) {
         return do_shortcode('[woocommerce_my_account]');
    } else {
        ob_start();
        wc_get_template('myaccount/form-edit-account.php', array(
            'current_user'  => get_user_by('id', $user_id),
            'order_count'   => $order_count
         ));
        return ob_get_clean();
    }
}
add_shortcode('woocommerce_edit_profile', 'woocommerce_edit_profile');

function woocommerce_edit_address()
{
    $user_id = get_current_user_id();
    if ($user_id == 0) {
         return do_shortcode('[woocommerce_my_account]');
    } else {
        ob_start();
        wc_get_template('myaccount/form-edit-address.php', array(
            'current_user'  => get_user_by('id', $user_id),
            'order_count'   => $order_count
         ));
        return ob_get_clean();
    }
}
add_shortcode('woocommerce_edit_address', 'woocommerce_edit_address');

add_filter( 'woocommerce_shipping_package_name', 'custom_shipping_package_name' ,20, 3 );
function custom_shipping_package_name( $sprintf, $i, $package ) {
 //   $sprintf = sprintf( _nx( 'Delivery', 'Delivery %d', ( $i + 1 ), 'delivery packages', 'woocommerce' ), ( $i + 1 ) );
	
	print_r($chosen_shipping_methods);
	if ( 'wc_custom_shipping_pickpoint'== WC()->session->get( 'chosen_shipping_methods' )[0]){
		$chosen_shipping_methods = WC()->session->get( 'customer' );
		$shipping_address = $chosen_shipping_methods['shipping_address'];
		$sprintf= $sprintf.': <br> ' .$shipping_address;
	}
    return $sprintf;
}