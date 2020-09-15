<?php

/**
 * The plugin bootstrap file
 *
 *
 * @link              http://woocommerce.db-dzine.com
 * @since             1.0.0
 * @package           WeLaunch_WooCommerce_My_Account
 *
 * @wordpress-plugin
 * Plugin Name:       WooCommerce My Account
 * Plugin URI:        https://welaunch.io/plugins/woocommerce-my-account/
 * Description:       The ultimate WooCommerce My Account Customizer Plugin
 * Version:           1.0.5
 * Author:            WeLaunch
 * Author URI:        https://welaunch.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woocommerce-my-account
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woocommerce-my-account-activator.php
 */
function WeLaunch_WooCommerce_My_Account_activate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-my-account-activator.php';
	WeLaunch_WooCommerce_My_Account_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woocommerce-my-account-deactivator.php
 */
function WeLaunch_WooCommerce_My_Account_deactivate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-my-account-deactivator.php';
	WeLaunch_WooCommerce_My_Account_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'WeLaunch_WooCommerce_My_Account_activate' );
register_deactivation_hook( __FILE__, 'WeLaunch_WooCommerce_My_Account_deactivate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-my-account.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function WeLaunch_WooCommerce_My_Account_run() {

	$plugin_data = get_plugin_data( __FILE__ );
	$version = $plugin_data['Version'];

	$plugin = new WeLaunch_WooCommerce_My_Account($version);
	$plugin->run();

	return $plugin;

}

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'woocommerce/woocommerce.php') && (is_plugin_active('redux-framework/redux-framework.php') || is_plugin_active('redux-dev-master/redux-framework.php')) ){
	$WeLaunch_WooCommerce_My_Account = WeLaunch_WooCommerce_My_Account_run();
} else {
	add_action( 'admin_notices', 'WeLaunch_WooCommerce_My_Account_installed_notice' );
}

function WeLaunch_WooCommerce_My_Account_installed_notice()
{
	?>
    <div class="error">
      <p><?php esc_html_e( 'WooCommerce My Account requires the WooCommerce and Redux Framework plugin. Please install or activate them before!', 'woocommerce-my-account'); ?></p>
    </div>
    <?php
}