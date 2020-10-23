<?php
/**
 * The current version of the theme.
 */
define('ENVO_STOREFRONT_VERSION', '1.0.7');

add_action('after_setup_theme', 'envo_storefront_setup');

if (!function_exists('envo_storefront_setup')) :

    /**
     * Global functions
     */
    function envo_storefront_setup() {

        // Theme lang.
        load_theme_textdomain('envo-storefront', get_template_directory() . '/languages');

        // Add Title Tag Support.
        add_theme_support('title-tag');

        // Register Menus.
        register_nav_menus(
            array(
                'main_menu' => esc_html__('Main Menu', 'envo-storefront'),
            )
        );

        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(300, 300, true);
        add_image_size('envo-storefront-single', 1140, 641, true);
        add_image_size('envo-storefront-med', 720, 405, true);

        // Add Custom Background Support.
        $args = array(
            'default-color' => 'ffffff',
        );
        add_theme_support('custom-background', $args);

        add_theme_support('custom-logo', array(
            'height' => 60,
            'width' => 200,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array('site-title', 'site-description'),
        ));

        // Adds RSS feed links to for posts and comments.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         */
        add_theme_support('title-tag');

        // Set the default content width.
        $GLOBALS['content_width'] = 1140;

        add_theme_support('custom-header', apply_filters('envo_storefront_custom_header_args', array(
            'width' => 2000,
            'height' => 200,
            'default-text-color' => '',
            'wp-head-callback' => 'envo_storefront_header_style',
        )));

        // WooCommerce support.
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
        add_theme_support('html5', array('search-form'));
        /* 
         * This theme styles the visual editor to resemble the theme style,
         * specifically font, colors, icons, and column width.
         */
        add_editor_style(array('css/bootstrap.css', envo_storefront_fonts_url(), 'css/editor-style.css'));

        // Recommend plugins.
        add_theme_support('recommend-plugins', array(
            'envothemes-demo-import' => array(
                'name' => 'EnvoThemes Demo Import',
                'active_filename' => 'envothemes-demo-import/envothemes-demo-import.php',
                'description' => esc_html__('Save time by importing our demo data: your website will be set up and ready to be customized in minutes.', 'envo-storefront'),
            ),
            'woocommerce' => array(
                'name' => 'WooCommerce',
                'active_filename' => 'woocommerce/woocommerce.php',
                /* translators: %s plugin name string */
                'description' => sprintf(esc_attr__('To enable shop features, please install and activate the %s plugin.', 'envo-storefront'), '<strong>WooCommerce</strong>'),
            ),
            'elementor' => array(
                'name' => 'Elementor',
                'active_filename' => 'elementor/elementor.php',
                /* translators: %s plugin name string */
                'description' => sprintf(esc_attr__('The most advanced frontend drag & drop page builder.', 'envo-storefront'), '<strong>Elementor</strong>'),
            ),
        ));

        remove_action( 'admin_init', 'envothemes_pro_notice' ); // not supported yet
        remove_action( 'admin_init', 'envothemes_review_notice' ); // not supported yet
    }

endif;

if (!function_exists('envo_storefront_header_style')) :

    /**
     * Styles the header image and text displayed on the blog.
     */
    function envo_storefront_header_style() {
        $header_image = get_header_image();
        $header_text_color = get_header_textcolor();
        if (get_theme_support('custom-header', 'default-text-color') !== $header_text_color || !empty($header_image)) {
            ?>
            <style type="text/css" id="envo-storefront-header-css">
            <?php
            // Has a Custom Header been added?
            if (!empty($header_image)) :
                ?>
                    .site-header {
                        background-image: url(<?php header_image(); ?>);
                        background-repeat: no-repeat;
                        background-position: 50% 50%;
                        -webkit-background-size: cover;
                        -moz-background-size:    cover;
                        -o-background-size:      cover;
                        background-size:         cover;
                    }
            <?php endif; ?>
            <?php
            // Has the text been hidden?
            if ('blank' === $header_text_color) :
                ?>
                    .site-title,
                    .site-description {
                        position: absolute;
                        clip: rect(1px, 1px, 1px, 1px);
                    }
            <?php elseif ('' !== $header_text_color) : ?>
                    .site-title a,
                    .site-title,
                    .site-description {
                        color: #<?php echo esc_attr($header_text_color); ?>;
                    }
            <?php endif; ?>
            </style>
            <?php
        }
    }

endif; // envo_storefront_header_style

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function envo_storefront_pingback_header() {
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">' . "\n", esc_url(get_bloginfo('pingback_url')));
    }
}

add_action('wp_head', 'envo_storefront_pingback_header');

/**
 * Set Content Width
 */
function envo_storefront_content_width() {

    $content_width = $GLOBALS['content_width'];

    if (is_active_sidebar('envo-storefront-right-sidebar')) {
        $content_width = 750;
    } else {
        $content_width = 1040;
    }

    /**
     * Filter content width of the theme.
     */
    $GLOBALS['content_width'] = apply_filters('envo_storefront_content_width', $content_width);
}

add_action('template_redirect', 'envo_storefront_content_width', 0);

/**
 * Register custom fonts.
 */
function envo_storefront_fonts_url() {
    $fonts_url = '';

    /**
     * Translators: If there are characters in your language that are not
     * supported by Open Sans Condensed, translate this to 'off'. Do not translate
     * into your own language.
     */
    $font = _x('on', 'Open Sans Condensed font: on or off', 'envo-storefront');

    if ('off' !== $font) {
        $font_families = array();

        $font_families[] = 'Open Sans Condensed:300,500,700';

        $query_args = array(
            'family' => urlencode(implode('|', $font_families)),
            'subset' => urlencode('cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese'),
        );

        $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
    }

    return esc_url_raw($fonts_url);
}

/**
 * Add preconnect for Google Fonts.
 */
function envo_storefront_resource_hints($urls, $relation_type) {
    if (wp_style_is('envo-storefront-fonts', 'queue') && 'preconnect' === $relation_type) {
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }

    return $urls;
}

add_filter('wp_resource_hints', 'envo_storefront_resource_hints', 10, 2);

/**
 * Enqueue Styles (normal style.css and bootstrap.css)
 */
function envo_storefront_theme_stylesheets() {
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style('envo-storefront-fonts', envo_storefront_fonts_url(), array(), null);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.7');
    wp_enqueue_style('mmenu-light', get_template_directory_uri() . '/css/mmenu-light.min.css', array(), ENVO_STOREFRONT_VERSION);
    // Theme stylesheet.
    wp_enqueue_style('envo-storefront-stylesheet', get_stylesheet_uri(), array('bootstrap'), ENVO_STOREFRONT_VERSION);
    // Load Font Awesome css.
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0');
}

add_action('wp_enqueue_scripts', 'envo_storefront_theme_stylesheets');

/**
 * Register Bootstrap JS with jquery
 */
function envo_storefront_theme_js() {
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7', true);
    wp_enqueue_script('mmenu', get_template_directory_uri() . '/js/mmenu-light.min.js', array('jquery'), ENVO_STOREFRONT_VERSION, true);
    wp_enqueue_script('envo-storefront-theme-js', get_template_directory_uri() . '/js/customscript.js', array('jquery'), ENVO_STOREFRONT_VERSION, true);

}

add_action('wp_enqueue_scripts', 'envo_storefront_theme_js');

if (!function_exists('envo_storefront_is_pro_activated')) {

    /**
     * Query Envo Storefront activation
     */
    function envo_storefront_is_pro_activated() {
        return defined('ENVO_STOREFRONT_PRO_CURRENT_VERSION') ? true : false;
    }

}

/**
 * Register Custom Navigation Walker include custom menu widget to use walkerclass
 */
require_once( trailingslashit(get_template_directory()) . 'lib/wp_bootstrap_navwalker.php' );

/**
 * Register Theme Info Page
 */
require_once( trailingslashit(get_template_directory()) . 'lib/dashboard.php' );

/**
 * Customizer options
 */
require_once( trailingslashit(get_template_directory()) . 'lib/customizer.php' );

if (class_exists('WooCommerce')) {

    /**
     * WooCommerce options
     */
    require_once( trailingslashit(get_template_directory()) . 'lib/woocommerce.php' );
}

add_action('widgets_init', 'envo_storefront_widgets_init');

/**
 * Register the Sidebar(s)
 */
function envo_storefront_widgets_init() {
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'envo-storefront'),
            'id' => 'envo-storefront-right-sidebar',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title"><h3>',
            'after_title' => '</h3></div>',
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Top Bar Section', 'envo-storefront'),
            'id' => 'envo-storefront-top-bar-area',
            'before_widget' => '<div id="%1$s" class="widget %2$s col-sm-4">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title"><h3>',
            'after_title' => '</h3></div>',
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Header Section', 'envo-storefront'),
            'id' => 'envo-storefront-header-area',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title"><h3>',
            'after_title' => '</h3></div>',
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Footer Section', 'envo-storefront'),
            'id' => 'envo-storefront-footer-area',
            'before_widget' => '<div id="%1$s" class="widget %2$s col-md-3">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title"><h3>',
            'after_title' => '</h3></div>',
        )
    );
}

function envo_storefront_main_content_width_columns() {

    $columns = '12';

    if (is_active_sidebar('envo-storefront-right-sidebar')) {
        $columns = $columns - 3;
    }

    echo absint($columns);
}

if (!function_exists('envo_storefront_entry_footer')) :

    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function envo_storefront_entry_footer() {

        // Get Categories for posts.
        $categories_list = get_the_category_list(' ');

        // Get Tags for posts.
        $tags_list = get_the_tag_list('', ' ');

        // We don't want to output .entry-footer if it will be empty, so make sure its not.
        if ($categories_list || $tags_list || get_edit_post_link()) {

            echo '<div class="entry-footer">';

            if ('post' === get_post_type()) {
                if ($categories_list || $tags_list) {

                    // Make sure there's more than one category before displaying.
                    if ($categories_list) {
                        echo '<div class="cat-links"><span class="space-right">' . esc_html__('Category', 'envo-storefront') . '</span>' . wp_kses_data($categories_list) . '</div>';
                    }

                    if ($tags_list) {
                        echo '<div class="tags-links"><span class="space-right">' . esc_html__('Tags', 'envo-storefront') . '</span>' . wp_kses_data($tags_list) . '</div>';
                    }
                }
            }

            edit_post_link();

            echo '</div>';
        }
    }

endif;

if (!function_exists('envo_storefront_generate_construct_footer')) :
    /**
     * Build footer
     */
    add_action('envo_storefront_generate_footer', 'envo_storefront_generate_construct_footer');

    function envo_storefront_generate_construct_footer() {
        /*?>
        <div class="footer-credits-text text-center">
            <?php
            printf(esc_html__('Proudly powered by %s', 'envo-storefront'), '<a href="' . esc_url(__('https://wordpress.org/', 'envo-storefront')) . '">' . esc_html__('WordPress', 'envo-storefront') . '</a>');
            ?>
            <span class="sep"> | </span>
            <?php
            printf(esc_html__('Theme: %1$s', 'envo-storefront'), '<a href="' . esc_url('https://envothemes.com/free-envo-storefront/') . '">' . esc_html_x('Envo Storefront', 'Theme name, do not translate', 'envo-storefront') . '</a>');
            ?>
        </div>
        <?php*/
    }

endif;


if (!function_exists('envo_storefront_widget_date')) :

    /**
     * Returns date for widgets.
     */
    function envo_storefront_widget_date() {
        ?>
        <span class="posted-date">
            <?php echo esc_html(get_the_date()); ?>
        </span>
        <?php
    }

endif;

if (!function_exists('envo_storefront_widget_comments')) :

    /**
     * Returns date for widgets.
     */
    function envo_storefront_widget_comments() {
        ?>
        <span class="comments-meta">
            <?php
            if (!comments_open()) {
                esc_html_e('Off', 'envo-storefront');
            } else {
                ?>
                <a href="<?php the_permalink(); ?>#comments" rel="nofollow" title="<?php esc_attr_e('Comment on ', 'envo-storefront') . the_title_attribute(); ?>">
                    <?php echo absint(get_comments_number()); ?>
                </a>
            <?php } ?>
            <i class="fa fa-comments-o"></i>
        </span>
        <?php
    }

endif;

if (!function_exists('envo_storefront_excerpt_length')) :

    /**
     * Excerpt limit.
     */
    function envo_storefront_excerpt_length($length) {
        return 20;
    }

    add_filter('excerpt_length', 'envo_storefront_excerpt_length', 999);

endif;

if (!function_exists('envo_storefront_excerpt_more')) :

    /**
     * Excerpt more.
     */
    function envo_storefront_excerpt_more($more) {
        return '&hellip;';
    }

    add_filter('excerpt_more', 'envo_storefront_excerpt_more');

endif;

if (!function_exists('envo_storefront_thumb_img')) :

    /**
     * Returns widget thumbnail.
     */
    function envo_storefront_thumb_img($img = 'full', $col = '', $link = true, $single = false) {
        if (function_exists('envo_storefront_pro_thumb_img')) {
            envo_storefront_pro_thumb_img($img, $col, $link, $single);
        } elseif (( has_post_thumbnail() && $link == true)) {
            ?>
            <div class="news-thumb <?php echo esc_attr($col); ?>">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail($img); ?>
                </a>
            </div><!-- .news-thumb -->
        <?php } elseif (has_post_thumbnail()) { ?>
            <div class="news-thumb <?php echo esc_attr($col); ?>">
                <?php the_post_thumbnail($img); ?>
            </div><!-- .news-thumb -->
            <?php
        }
    }

endif;

/**
 * Single previous next links
 */
if (!function_exists('envo_storefront_prev_next_links')) :

    function envo_storefront_prev_next_links() {
        the_post_navigation(
                array(
                    'prev_text' => '<span class="screen-reader-text">' . __('Previous Post', 'envo-storefront') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Previous', 'envo-storefront') . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>%title</span>',
                    'next_text' => '<span class="screen-reader-text">' . __('Next Post', 'envo-storefront') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Next', 'envo-storefront') . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span></span>',
                )
        );
    }

endif;

/**
 * Post author meta funciton
 */
if (!function_exists('envo_storefront_author_meta')) :

    function envo_storefront_author_meta() {
        ?>
        <span class="author-meta">
            <span class="author-meta-by"><?php esc_html_e('By', 'envo-storefront'); ?></span>
            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename'))); ?>">
                <?php the_author(); ?>
            </a>
        </span>
        <?php
    }

endif;

if (!function_exists('wp_body_open')) :

    /**
     * Fire the wp_body_open action.
     *
     * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
     *
     */
    function wp_body_open() {
        /**
         * Triggered after the opening <body> tag.
         *
         */
        do_action('wp_body_open');
    }

endif;

/**
 * Skip to content link
 */
function envo_storefront_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#site-content">' . esc_html__( 'Skip to the content', 'envo-storefront' ) . '</a>';
}

add_action( 'wp_body_open', 'envo_storefront_skip_link', 5 );
add_filter ('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');

function redirect_to_checkout() {
    global $woocommerce;
    $checkout_url = $woocommerce->cart->get_checkout_url();
    return $checkout_url;
}


// Add a custom user role

$result = add_role( 'actor', __(
'Actor' ),
array( 'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => true, // Allows user to edit pages
'edit_others_posts' => true, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => true, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User can’t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User can’t update any plugins
'update_core' => false // user cant perform core updates
) );

add_filter('user_contactmethods', 'my_user_contactmethods');

$result = add_role( 'buyer', __(
'Buyer' ),
array( 'read' => true, // true allows this capability
'edit_posts' => true, // Allows user to edit their own posts
'edit_pages' => true, // Allows user to edit pages
'edit_others_posts' => true, // Allows user to edit others posts not just their own
'create_posts' => true, // Allows user to create new posts
'manage_categories' => true, // Allows user to manage post categories
'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
'edit_themes' => false, // false denies this capability. User can’t edit your theme
'install_plugins' => false, // User cant add new plugins
'update_plugin' => false, // User can’t update any plugins
'update_core' => false // user cant perform core updates
) );

add_filter('user_contactmethods', 'my_user_contactmethods');



function my_user_contactmethods($user_contactmethods){

  $user_contactmethods['findyou'] = 'Where can we find you?';
  $user_contactmethods['handle'] = 'Your handle';
   $user_contactmethods['followers'] = 'How many followers do you have?';
     $user_contactmethods['invite'] = 'Invite code';
   $user_contactmethods['birthday'] = 'Birthday';
     $user_contactmethods['idtov'] = 'ID item';
	     $user_contactmethods['phone'] = 'Phone actor';
		 $user_contactmethods['balance'] = 'Balance';
		 $user_contactmethods['proc'] = 'Procent';
		  $user_contactmethods['charity'] = 'Charity';

		  $user_contactmethods['self'] = 'Self-presentation';
		  $user_contactmethods['who'] = 'Who are you';
		$user_contactmethods['userimg'] = 'Link foto';
		  $user_contactmethods['uservideo1'] = 'Represent yourself';
		   $user_contactmethods['uservideo2'] = 'Specially for MingMing';
		    $user_contactmethods['vip'] = 'Vip status';
			$user_contactmethods['rank0'] = 'Rank0';
			$user_contactmethods['rank1'] = 'Rank1';
			$user_contactmethods['rank2'] = 'Rank2';
			$user_contactmethods['rank3'] = 'Rank3';
			$user_contactmethods['rank4'] = 'Rank4';
			$user_contactmethods['rank5'] = 'Rank5';
  return $user_contactmethods;
}


function register_my_new_order_statuses() {
	register_post_status( 'wc-payed', array(
		'label'                     => _x( '已支付', 'Order status', 'payed' ),
		'public'                    => true,
		'exclude_from_search'       => false,
		'show_in_admin_all_list'    => true,
		'show_in_admin_status_list' => true,
		'label_count'               => _n_noop( 'Status name <span class="count">(%s)</span>', 'Payed <span class="count">(%s)</span>', 'payed' )
	) );
}

add_action( 'init', 'register_my_new_order_statuses' );

// Register in wc_order_statuses.
function my_new_wc_order_statuses( $order_statuses ) {
	$order_statuses['wc-payed'] = _x( '已支付', 'Order status', 'payed' );

	return $order_statuses;
}

add_filter( 'wc_order_statuses', 'my_new_wc_order_statuses' );


add_filter('woocommerce_save_account_details_required_fields', 'ts_hide_last_name');
function ts_hide_last_name($required_fields)
{
  unset($required_fields["account_last_name"]);
  unset($required_fields["account_email"]);
  unset($required_fields["account_display_name"]);
  return $required_fields;
}
function only_admin()
{
if ( ! current_user_can( 'manage_options' ) && '/wp-admin/admin-ajax.php' != $_SERVER['PHP_SELF'] ) {
                wp_redirect( site_url() );
    }
}
add_action( 'admin_init', 'only_admin', 1 );
add_action( 'woocommerce_thankyou', 'woocommerce_thankyou_change_order_status', 10, 1 );
function woocommerce_thankyou_change_order_status( $order_id ){
    if( ! $order_id ) return;

    $order = wc_get_order( $order_id );

    if ( ( $order->get_status() == 'processing' ) or ( $order->get_status() == 'completed' ) )
	{
	//$order->update_status( 'payed' );
	 $order_meta = get_post_meta($order_id);

/////////////
    $po=array();$em=array();$iduu=array();

            foreach($order->get_items() as $item_id => $item)
            {
            $product_id = method_exists( $item, 'get_product_id' ) ? $item->get_product_id() : $item['product_id'];
            $po[]=$product_id;
            }

	if (!empty($po[0]))
	{
	 $users = get_users( array(
	'meta_key'     => 'idtov',
	'meta_value'   =>  $po[0]
     ) );

foreach( $users as $user )
{
	$em[]=$user->user_email;
	$iduu[]=$user->ID;
}
if (!empty($em))
{

$ema=$em[0];
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; utf-8\r\n";
$headers .= "From: no-reply@mingming.io\r\n";
$message='Hello! Someone made an order! Please check at your <a target="_blank" href="https://mingming.io/my-account-2/orders/">Mingming account!</a>';
mail($ema, "New order from the MingMing.io!", $message,$headers, "-fwebmaster@mingming.io");



$idus=$iduu[0];
$idzak=$po[0];
$baln=get_user_meta( $idus, 'balance', true);
$proc=get_user_meta( $idus, 'proc', true);
if (empty($proc))
{
$proc1=25;
}
else
{
$proc1=$proc;
}
$price = get_post_meta($idzak, '_regular_price', true );
$proce=(($price/100))*($proc1);
$cem=round($proce,1);
$otog=$baln+$cem;
//update_user_meta( $idus, 'balance', $otog);




}


	}

////////////////////


	}






}

add_action('woocommerce_order_status_completed', 'competedStatusOrder1');
function competedStatusOrder1( $order_id )
{
	 $order = wc_get_order( $order_id );
$order->update_status( 'payed' );

}


add_action('woocommerce_order_status_payed', 'competedStatusOrder0');
function competedStatusOrder0( $order_id )
{


    $order = wc_get_order( $order_id );


	 $order_meta = get_post_meta($order_id);

/////////////
    $po=array();$em=array();$iduu=array();

            foreach($order->get_items() as $item_id => $item)
            {
            $product_id = method_exists( $item, 'get_product_id' ) ? $item->get_product_id() : $item['product_id'];
            $po[]=$product_id;
            }

	if (!empty($po[0]))
	{
	 $users = get_users( array(
	'meta_key'     => 'idtov',
	'meta_value'   =>  $po[0]
     ) );

foreach( $users as $user )
{
	$em[]=$user->user_email;
	$iduu[]=$user->ID;
}
if (!empty($em))
{



$idus=$iduu[0];
$idzak=$po[0];
$baln=get_user_meta( $idus, 'balance', true);
$proc=get_user_meta( $idus, 'proc', true);
if (empty($proc))
{
$proc1=25;
}
else
{
$proc1=$proc;
}
$price = get_post_meta($idzak, '_regular_price', true );
$proce=(($price/100))*($proc1);
$cem=round($proce,1);

$priceuser=$price-$cem;

$cher=get_user_meta( $idus, 'charity', true);
if ($cher>0)
{


if ($cher==10)
	{
	$nablog=($priceuser*10)/100;
	$nablog1=round($nablog,1);
	$priceuser1=$priceuser-$nablog1;
	$otog=$baln+$priceuser1;
	}
    elseif ($cher==50)
	{
	$nablog=($priceuser*50)/100;
	$nablog1=round($nablog,1);
	$priceuser1=$priceuser-$nablog1;
	$otog=$baln+$priceuser1;
	}
	elseif ($cher==100)
	{
	$otog=$baln;
	}



}
else
{
	$otog=$baln+$priceuser;
}





update_user_meta( $idus, 'balance', $otog);




//////////////////////////////////////////////

          $order_statuses7 = array('wc-payed');
          $customer_orders5 = wc_get_orders( array(
              'post_status' => $order_statuses7,
              'numberposts' => -1
          ) );

     $p=0;
          foreach($customer_orders5 as $order )
		  {
   $order_id = method_exists( $order, 'get_id' ) ? $order->get_id() : $order->id;
              foreach($order->get_items() as $item_id => $item)
            {
          $product_id = method_exists( $item, 'get_product_id' ) ? $item->get_product_id() : $item['product_id'];
              if ($product_id==$idus)
              {
              $p++;
              }
            }

		  }

if ($p==1)
{
$otog1=$otog+20;
update_user_meta( $idus, 'balance', $otog1);
update_user_meta( $idus, 'rank4', '1');
}

///////////////////////////////////////////////







}


	}

////////////////////





}





/**
 * Register the Product post type with a Dashicon.
 *
 * @see register_post_type()
 */
// allow SVG uploads
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
  $existing_mimes['svg'] = 'image/svg+xml';
  return $existing_mimes;
}
function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
 }
 add_action('admin_head', 'fix_svg');

 function is_user_role($role, $user_id = null) {
    $user = is_numeric($user_id) ? get_userdata($user_id) : wp_get_current_user();
    if (!$user)
     return false;
    return in_array($role, (array) $user->roles);
}

/********** ********* *********
количество товаров на странице интернет магазина WooCommerce
********* ********* ********* */
// add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 20 );
/********** ********* *********
Регистрация нового типа записи
https://wp-kama.ru/function/register_post_type
********* ********* ********* */
add_action('init', 'articlesvideo_init');
function articlesvideo_init(){
    register_post_type('articlesvideo', array(
        'labels'             => array(
            'name'               => 'VideoPost', // Основное название типа записи
            'singular_name'      => 'VideoPost', // отдельное название записи типа articles_video
            'add_new'            => 'Добавить новое видео',
            'add_new_item'       => 'Добавить новую видео',
            'edit_item'          => 'Редактировать видео',
            'new_item'           => 'Новаое видео',
            'view_item'          => 'Посмотреть видео',
            'search_items'       => 'Найти видео',
            'not_found'          =>  'Видео не найдено',
            'not_found_in_trash' => 'В корзине видео не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'VideoPost'

          ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
    ) );
}
add_filter( 'woocommerce_add_cart_item_data', 'woo_custom_add_to_cart' );

function woo_custom_add_to_cart( $cart_item_data ) {

    global $woocommerce;
    $woocommerce->cart->empty_cart();

    // Do nothing with the data and return
    return $cart_item_data;
}

/*
add_action( 'template_redirect', 'checkout_redirect_non_logged_to_login_access');
function checkout_redirect_non_logged_to_login_access() {
    // Here the conditions (woocommerce checkout page and unlogged user)
    if( is_checkout() && !is_user_logged_in()){
        // Redirecting to your custom login area
        // wp_redirect( 'https://mingming.io/create-your-account/' );
        wp_redirect( get_permalink( get_option('woocommerce_myaccount_page_id') ) );
        // always use exit after wp_redirect() function.
        exit;
    }
}
add_action( 'woocommerce_before_cart', 'customer_redirected_displaying_message');
function customer_redirected_displaying_message() {
    if( !is_user_logged_in() ){
        // HERE Type your displayed message and text button
        $message = __('To access checkout, you need first to be logged in', 'woocommerce');
        $button_text = __('Login area', 'woocommerce');
        $cart_link = get_permalink( get_option('woocommerce_myaccount_page_id') );
        wc_add_notice(  $message . '<a href="' . $cart_link . '" class="button wc-forward">' . $button_text . '</a>', 'notice' );
    }
}
*/
function add_user_to_mailchimp($order_id) {


$order_meta = get_post_meta( $order_id);
$emop=$order_meta['_billing_email'][0];
if ( is_user_logged_in() )
{

}
else
{
//////////////////////////////////////
$em11=array();
$users11 = get_users( array( ) );
foreach( $users11 as $user )
{
$em11[]=$user->user_email;
}
if (in_array($emop, $em11))
{
echo '0';
}
else
{
$userdata1 = array(
	'ID'              => 0,
	'user_pass'       => $emop,
	'user_login'      => $emop,
	'user_nicename'   => $emop,
	'user_url'        => '',
	'user_email'      => $emop,
	'display_name'    => $emop,
	'nickname'        => '',
	'first_name'      => $emop,
	'last_name'       => '',
	'description'     => '',
	'rich_editing'    => 'true', // false - выключить визуальный редактор
	'user_registered' => date('Y-m-d H:i:s'),
	'role'            => 'buyer'
);
$id=wp_insert_user( $userdata1 );
$args = array(
    'customer_id'   => $id,
    'order_id'      => $order_id,
);
$order1=wc_create_order($args);

}

}
	////////////////////////////////////////


}
add_action( 'woocommerce_checkout_update_order_meta', 'add_user_to_mailchimp', 1, 1 );