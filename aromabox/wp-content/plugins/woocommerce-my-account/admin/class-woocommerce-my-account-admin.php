<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://woocommerce.db-dzine.de
 * @since      1.0.0
 *
 * @package    WeLaunch_WooCommerce_My_Account
 * @subpackage WeLaunch_WooCommerce_My_Account/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    WeLaunch_WooCommerce_My_Account
 * @subpackage WeLaunch_WooCommerce_My_Account/admin
 * @author     Daniel Barenkamp <contact@db-dzine.de>
 */
class WeLaunch_WooCommerce_My_Account_Admin {

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
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

    /**
     * Load Extensions
     * @author Daniel Barenkamp
     * @version 1.0.0
     * @since   1.0.0
     * @link    http://plugins.db-dzine.com
     * @return  boolean
     */
    public function load_extensions()
    {
        if(!is_admin() || !current_user_can('administrator') || (defined('DOING_AJAX') && DOING_AJAX && (isset($_POST['action']) && !$_POST['action'] == "woocommerce_my_account_options_ajax_save") )) {
            return false;
        }

        // Load the theme/plugin options
        if (file_exists(plugin_dir_path(dirname(__FILE__)).'admin/options-init.php')) {
            require_once plugin_dir_path(dirname(__FILE__)).'admin/options-init.php';
        }
        return true;
    }

    /**
     * Init
     * @author Daniel Barenkamp
     * @version 1.0.0
     * @since   1.0.0
     * @link    http://plugins.db-dzine.com
     * @return  boolean
     */
    public function init()
    {
        global $woocommerce_my_account_options;

        if(!is_admin() || !current_user_can('administrator') || (defined('DOING_AJAX') && DOING_AJAX)){
            $woocommerce_my_account_options = get_option('woocommerce_my_account_options');
        }

        $this->options = $woocommerce_my_account_options;
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

    public function settings_changed()
    {
        update_option('woocommerce_my_account_options_changed', true);
    }


    public function flush_rewrite_rules()
    {
        if ( get_option('woocommerce_my_account_options_changed') == true ) {
            flush_rewrite_rules();
            update_option('woocommerce_my_account_options_changed', false);
        }
    }
}