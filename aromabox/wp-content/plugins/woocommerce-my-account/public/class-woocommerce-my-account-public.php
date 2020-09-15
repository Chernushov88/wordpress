<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://woocommerce.db-dzine.de
 * @since      1.0.0
 *
 * @package    WeLaunch_WooCommerce_My_Account
 * @subpackage WeLaunch_WooCommerce_My_Account/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    WeLaunch_WooCommerce_My_Account
 * @subpackage WeLaunch_WooCommerce_My_Account/public
 * @author     Daniel Barenkamp <contact@db-dzine.de>
 */
class WeLaunch_WooCommerce_My_Account_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * options of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      array    $options
	 */
	private $options;

	/**
	 * Current tab
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string
	 */
	private $current_tab;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) 
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->enabledTabs = array();
		$this->userMeta = array();
	}

	/**
	 * Gets options
	 *
	 * @since    1.0.0
	 */
    private function get_option($option)
    {
    	if(!is_array($this->options)) {
    		return false;
    	}
    	
    	if(!array_key_exists($option, $this->options))
    	{
    		return false;
    	}
    	return $this->options[$option];
    }

	/**
	 * Sets the current tab
	 *
	 * @param    string    $tab      Name Of the tab
	 * @since    1.0.0
	 */
    private function set_current_tab($tab)
    {
    	$this->current_tab = $tab;
    }

	/**
	 * Gets the current tab
	 *
	 * @param    string    $tab      Name Of the tab
	 * @since    1.0.0
	 */
    private function get_current_tab()
    {
    	return $this->current_tab;
	}
	
	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() 
	{

		global $woocommerce_my_account_options;

		$this->options = $woocommerce_my_account_options;

		$customCSS = "";
		if(!$this->get_option('styleEnable')) {
			return false;
		}

		
		$textColor = $this->get_option('styleTabTextColor');
		$backgroundColor = $this->get_option('styleTabBackgroundColor');
		$hoverTextColor = $this->get_option('styleTabHoverTextColor');
		$hoverBackgroundColor = $this->get_option('styleTabHoverBackgroundColor');
		$activeTextColor = $this->get_option('styleTabActiveTextColor');
		$activeBackgroundColor = $this->get_option('styleTabActiveBackgroundColor');

		$customCSS .= "
			.woocommerce-MyAccount-navigation-link, .woocommerce-MyAccount-navigation-link a {
				color: " . $textColor . " !important;
				background-color: " . $backgroundColor . " !important;
			}

			.woocommerce-MyAccount-navigation-link:hover, .woocommerce-MyAccount-navigation-link:hover a {
				color: " . $hoverTextColor . " !important;
				background-color: " . $hoverBackgroundColor . " !important;
			}

			.woocommerce-MyAccount-navigation-link.is-active, .woocommerce-MyAccount-navigation-link.is-active a {
				color: " . $activeTextColor . " !important;
				background-color: " . $activeBackgroundColor . " !important;
			}
		";

		$layout = $this->get_option('styleLayout');
		if($layout == "leftSidebar") {
			$customCSS .= "
				.woocommerce-MyAccount-navigation {
					float: left !important;
				}
			";
		} elseif($layout == "rightSidebar") {
			$customCSS .= "
				.woocommerce-MyAccount-navigation {
					float: right !important;
				}
			";
		} elseif($layout == "fullWidth") {
			$customCSS .= "
				.woocommerce-MyAccount-navigation, .woocommerce-MyAccount-content {
					float: none !important;
					width: 100% !important;
					margin: 0 !important;
				}


				.woocommerce-MyAccount-navigation ul li {
					display: inline-block;
				}

				.woocommerce-MyAccount-navigation ul li a::before {
					float: left !important;
					margin-left: 0 !important;
					margin-right: 5px !important;
				}
			";
		}

		// Write CSS
		file_put_contents(  dirname(__FILE__)  . '/css/woocommerce-my-account-custom.css', $customCSS);
		wp_enqueue_style( $this->plugin_name . '-custom', plugin_dir_url( __FILE__ ) . 'css/woocommerce-my-account-custom.css', array(), $this->version, 'all' );
	}

	/**
	 * Inits the My Account
	 *
	 * @since    1.0.0
	 */
    public function init()
    {
		global $woocommerce_my_account_options;

		$this->options = $woocommerce_my_account_options;

		if (!$this->get_option('enable')) {
			return false;
		}

		// Create Enabled Tabs array
		$tabCount = $this->get_option('tabCount');
		for($tab = 0; $tab < $tabCount; $tab++)
	    {
			if(!$this->get_option($tab . 'TabEnabled') || empty($this->get_option($tab . 'TabCallback')) ) {
				continue;
			}

			$userRoles = $this->get_option($tab . 'TabUserRoles');
			if(is_array($userRoles) && !empty($userRoles)) {

				$currentUserRole = $this->get_user_role();
				if(!in_array($currentUserRole, $userRoles))
				{
					continue;
				}
			}

			$this->enabledTabs[] = $tab . 'Tab';
		}

		// Customer Meta Data
		$user_id = get_current_user_id();
		if($user_id !== 0) {
			$userMeta = get_user_meta( $user_id, '', true);
			if(!empty($userMeta)) {
				$tmp = array();
				foreach ($userMeta as $key => $value) {
					if(is_array($value) && !empty($value)) {
						$tmp[$key] = $value[0];
					} else {
						$tmp[$key] = $value;
					}
				}
				$userMeta = $tmp;
			}
			$userMeta = apply_filters('woocommerce_my_account_user_meta', $userMeta);
			$this->userMeta = $userMeta;
		}

		foreach ($this->enabledTabs as $tab)
	    {
			$endpoint =  $this->get_option($tab . 'Endpoint');

			add_action( 'woocommerce_account_' . $endpoint . '_endpoint', array($this, 'endpoint_content_' . $tab) );
			add_action( 'query_vars', array($this, 'query_vars'), 0);
			add_rewrite_endpoint( $endpoint, EP_ROOT | EP_PAGES );
		}

		add_filter( 'the_title', array($this, 'endpoint_title') );
		add_filter( 'woocommerce_account_menu_items', array($this, 'menu_items'));
		add_filter( 'woocommerce_get_endpoint_url', array($this, 'endpoint_urls'), 10, 4); 
	}

	/*
	 * Change endpoint title.
	 *
	 * @param string $title
	 * @return string
	 */
	public function endpoint_title( $title ) 
	{
		global $wp_query;

		foreach ($this->enabledTabs as $tab)
	    {
			$endpoint =  $this->get_option($tab . 'Endpoint');
			$is_endpoint = isset( $wp_query->query_vars[$endpoint] );

			if ( $is_endpoint && ! is_admin() && is_main_query() && in_the_loop() && is_account_page() ) {
				$title =  $this->get_option($tab . 'MenuTitle');
				remove_filter( 'the_title', 'endpoint_title' );
			}
		}

		return $title;
	}

	/**
	 * Endpoint URLs
	 * @author Daniel Barenkamp
	 * @version 1.0.0
	 * @since   1.0.0
	 * @link    https://welaunch.io/plugins/
	 * @param   [type]                       $url       [description]
	 * @param   [type]                       $endpoint  [description]
	 * @param   [type]                       $value     [description]
	 * @param   [type]                       $permalink [description]
	 * @return  [type]                                  [description]
	 */
	public function endpoint_urls( $url, $endpoint, $value, $permalink )
	{

		foreach ($this->enabledTabs as $tab)
	    {
			$tabEndpoint =  $this->get_option($tab . 'Endpoint');
			$isLink =  $this->get_option($tab . 'Callback');

			if( $endpoint === $tabEndpoint  && $isLink == "link") {
				$url = $this->get_option($tab . 'Link');
			}
    	}

		

		return $url;
	}

	/**
	 *  Add new query var.
	 * @author Daniel Barenkamp
	 * @version 1.0.0
	 * @since   1.0.0
	 * @link    https://welaunch.io/plugins/
	 * @param   [type]                       $vars [description]
	 * @return  [type]                             [description]
	 */
	public function query_vars( $vars )
	{
		$currentTab = $this->get_current_tab();
		$endpoint =  $this->get_option($currentTab . 'Endpoint');

		$vars[] = $endpoint;

		return $vars;
	}

	/**
	 * Insert the new endpoint into the My Account menu.
	 * @author Daniel Barenkamp
	 * @version 1.0.0
	 * @since   1.0.0
	 * @link    https://welaunch.io/plugins/
	 * @param   [type]                       $items [description]
	 * @return  [type]                              [description]
	 */
	public function menu_items( $items ) 
	{
		$new_items = array();

		$reorderTabs = $this->get_option('reorderTabs')['enabled'];

		$tabCount = $this->get_option('tabCount');
		for($tab = 0; $tab < $tabCount; $tab++) {

			$endpoint =  $this->get_option($tab . 'TabEndpoint');
			$userRoles = $this->get_option($tab . 'TabUserRoles');
			if(is_array($userRoles) && !empty($userRoles)) {

				$currentUserRole = $this->get_user_role();
				if(!in_array($currentUserRole, $userRoles))
				{
					unset($reorderTabs[$endpoint]);
				}
			}
		}

		unset($reorderTabs['placebo']);

		if($this->get_option('renameTabs')) {

			$reorderTabs['dashboard'] = $this->get_option('renameDashboardTab');
			$reorderTabs['orders'] = $this->get_option('renameOrdersTab');
			$reorderTabs['downloads'] = $this->get_option('renameDownloadsTab');
			$reorderTabs['edit-address'] = $this->get_option('renameAddressesTab');
			$reorderTabs['payment-methods'] = $this->get_option('renamePaymentTab');
			$reorderTabs['edit-account'] = $this->get_option('renameAccountTab');
			$reorderTabs['customer-logout'] = $this->get_option('renameLogoutTab');
			
		}

		return $reorderTabs;
	}

	/**
	 * Endpoint contents
	 * @author Daniel Barenkamp
	 * @version 1.0.0
	 * @since   1.0.0
	 * @link    https://welaunch.io/plugins/
	 * @return  [type]                       [description]
	 */
	public function endpoint_content_0Tab() {
		$callback =  $this->get_option('0TabCallback');
		$this->do_callback($callback, '0Tab');
	}

	public function endpoint_content_1Tab() {
		$callback =  $this->get_option('1TabCallback');
		$this->do_callback($callback, '1Tab');
	}
	public function endpoint_content_2Tab() {
		$callback =  $this->get_option('2TabCallback');
		$this->do_callback($callback, '2Tab');
	}
	public function endpoint_content_3Tab() {
		$callback =  $this->get_option('3TabCallback');
		$this->do_callback($callback, '3Tab');
	}
	public function endpoint_content_4Tab() {
		$callback =  $this->get_option('4TabCallback');
		$this->do_callback($callback, '4Tab');
	}
	public function endpoint_content_5Tab() {
		$callback =  $this->get_option('5TabCallback');
		$this->do_callback($callback, '5Tab');
	}
	public function endpoint_content_6Tab() {
		$callback =  $this->get_option('6TabCallback');
		$this->do_callback($callback, '6Tab');
	}
	public function endpoint_content_7Tab() {
		$callback =  $this->get_option('7TabCallback');
		$this->do_callback($callback, '7Tab');
	}
	public function endpoint_content_8Tab() {
		$callback =  $this->get_option('8TabCallback');
		$this->do_callback($callback, '8Tab');
	}
	public function endpoint_content_9Tab() {
		$callback =  $this->get_option('9TabCallback');
		$this->do_callback($callback, '9Tab');
	}
	public function endpoint_content_10Tab() {
		$callback =  $this->get_option('10TabCallback');
		$this->do_callback($callback, '10Tab');
	}
	public function endpoint_content_11Tab() {
		$callback =  $this->get_option('11TabCallback');
		$this->do_callback($callback, '11Tab');
	}
	public function endpoint_content_12Tab() {
		$callback =  $this->get_option('12TabCallback');
		$this->do_callback($callback, '12Tab');
	}
	public function endpoint_content_13Tab() {
		$callback =  $this->get_option('13TabCallback');
		$this->do_callback($callback, '13Tab');
	}
	public function endpoint_content_14Tab() {
		$callback =  $this->get_option('14TabCallback');
		$this->do_callback($callback, '14Tab');
	}
	public function endpoint_content_15Tab() {
		$callback =  $this->get_option('15TabCallback');
		$this->do_callback($callback, '15Tab');
	}
	public function endpoint_content_16Tab() {
		$callback =  $this->get_option('16TabCallback');
		$this->do_callback($callback, '16Tab');
	}
	public function endpoint_content_17Tab() {
		$callback =  $this->get_option('17TabCallback');
		$this->do_callback($callback, '17Tab');
	}
	public function endpoint_content_18Tab() {
		$callback =  $this->get_option('18TabCallback');
		$this->do_callback($callback, '18Tab');
	}
	public function endpoint_content_19Tab() {
		$callback =  $this->get_option('19TabCallback');
		$this->do_callback($callback, '19Tab');
	}
	public function endpoint_content_20Tab() {
		$callback =  $this->get_option('20TabCallback');
		$this->do_callback($callback, '20Tab');
	}

	/**
	 * Function that fires for each callback of the tab
	 *
	 * @param      string    $callBackType       	The Callback Type
	 * @param      string    $tab       			The name of the Tab.
	 * @since    1.0.0
	 */
	public function do_callback($callBackType, $tab)
	{
		$perPage = $this->get_option($tab.'PerPage');
		$columns = $this->get_option($tab.'Columns');

		echo '<h2>' . $this->get_option($tab.'Title') . '</h2>';

		if($callBackType == "contactForm7")
		{
			$contactFormId = $this->get_option($tab.'ContactForm7');
			echo do_shortcode('[contact-form-7 id="'.$contactFormId.'" ]');
			return true;
		} 

		if($callBackType == "products")
		{
			$products = implode(',', $this->get_option($tab.'ShowProducts'));
			echo do_shortcode('[products ids="'.$products.'" columns="'.$columns.'"]');
			return TRUE;
		}
		if($callBackType == "productsByCategory") {
			$category = $this->get_option($tab.'ProductsByCategory');
			$term = get_term_by( 'id', $category, 'product_cat', 'ARRAY_A' );
			echo do_shortcode('[product_category category="'.$term['slug'].'" columns="'.$columns.'"]');
			return TRUE;
		}
		if($callBackType == "productCategories") {
			$categories = implode(',', $this->get_option($tab.'ShowCategories'));
			echo do_shortcode('[product_categories ids="'.$categories.'" number="'.$perPage.'" columns="'.$columns.'"]');
			return TRUE;
		}
		if($callBackType == "cart") {
			echo do_shortcode('[woocommerce_cart]');
			return TRUE;
		}
		if($callBackType == "checkout") {
			echo do_shortcode('[woocommerce_checkout]');
			return TRUE;
		}
		if($callBackType == "orderTracking") {
			echo do_shortcode('[woocommerce_order_tracking]');
			return TRUE;
		}
		if($callBackType == "myaccount") {
			echo do_shortcode('[woocommerce_my_account]');
			return TRUE;
		}
		if($callBackType == "recentProducts") {
			echo do_shortcode('[recent_products per_page="'.$perPage.'" columns="'.$columns.'"]');
			return TRUE;
		}
		if($callBackType == "featuredProducts") {
			echo do_shortcode('[featured_products per_page="'.$perPage.'" columns="'.$columns.'"]');
			return TRUE;
		}
		if($callBackType == "sales") {
			echo do_shortcode('[sale_products per_page="'.$perPage.'" columns="'.$columns.'"]');
			return TRUE;
		}
		if($callBackType == "bestSelling") {
			echo do_shortcode('[best_selling_products per_page="'.$perPage.'" columns="'.$columns.'"]');
			return TRUE;
		}
		if($callBackType == "topRated") {
			echo do_shortcode('[top_rated_products per_page="'.$perPage.'" columns="'.$columns.'"]');
			return TRUE;
		}
		if($callBackType == "relatedProducts") {
			echo do_shortcode('[related_products per_page="'.$perPage.'" columns="'.$columns.'"]');
			return TRUE;
		}

		if($callBackType == "editor") {
			$currentTabEditor = $this->get_option($tab . 'Editor');
			$content = apply_filters('the_content', $currentTabEditor);
			$content = $this->replace_vars($content);
			echo $content;
			return TRUE;
		}

		if($callBackType == "function") {
			$function = $this->get_option($tab . 'Function');
			if(function_exists($function)) {
				$function();
			}
			return TRUE;
		}
	}

	/**
	 * Return the current user role
	 * @author Daniel Barenkamp
	 * @version 1.0.0
	 * @since   1.0.0
	 * @link    https://welaunch.io/plugins/
	 * @return  [type]                       [description]
	 */
	private function get_user_role()
	{
		global $current_user;

		$user_roles = $current_user->roles;
		$user_role = array_shift($user_roles);

		return $user_role;
	}

	public function replace_vars($string)
	{
		if (preg_match_all("/{{(.*?)}}/", $string, $m)) {
			foreach ($m[1] as $i => $var) {

				$string = str_replace($m[0][$i], $this->userMeta[$var], $string);
			}
	    }

		return $string;
	}
}