<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://woocommerce.db-dzine.de
 * @since      1.0.0
 *
 * @package    WeLaunch_WooCommerce_My_Account
 * @subpackage WeLaunch_WooCommerce_My_Account/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    WeLaunch_WooCommerce_My_Account
 * @subpackage WeLaunch_WooCommerce_My_Account/includes
 * @author     Daniel Barenkamp <contact@db-dzine.de>
 */
class WeLaunch_WooCommerce_My_Account_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		$loaded = load_plugin_textdomain(
			'woocommerce-my-account',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
