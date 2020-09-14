<?php
/**
* Plugin Name: Логистическая платформа Pickpoint для WooCommerce
* Plugin URI: #
* Description: Официальный плагин Pickpoint для WooCommerce. Добавляет на сайт автоматизированный расчет доставки и возможность передавать заказы в логистическую платформу Pickpoint.
* Author: Pickpoint
* Author URI: #
* Version: 0.0.1
* Date: 27.03.2020
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}  
define( 'WC_PICKPOINT_URL', plugin_dir_url( __FILE__ ));



	class pickpoint_wc_custom_shipping_pp {
		function __construct() {
			add_action( 'init', 'woocommerce_custom_shipping_init',90 );
			
			//add_filter( 'woocommerce_shipping_packages', array( __CLASS__, 'woocommerce_shipping_packages') );
		}
		static function woocommerce_shipping_packages($packages) {
			if(isset($packages[0]['rates']) && is_array($packages[0]['rates']) && sizeof($packages[0]['rates'])> 1 && isset($packages[0]['rates']["wc_custom_shipping_pickpoint"]) ) {
				$f = array( 'wc_custom_shipping_pickpoint' => $packages[0]['rates']["wc_custom_shipping_pickpoint"] );
				unset($packages[0]['rates']["wc_custom_shipping_pickpoint"]);
				$packages[0]['rates'] = $f + $packages[0]['rates'];		
			}
			return $packages;
		}
		function woocommerce_castom_shipping_fallback_notice_($s) {
			echo '<div class="error"><p>' . sprintf( __( '%s', 'pickpoint' ), $s ) . '</p></div>';
		}
		function woocommerce_castom_shipping_fallback_notice() {
			echo '<div class="error"><p>' . sprintf( __( 'WooCommerce  depends on the last version of %s to work!', 'pickpoint' ), '<a href="http://wordpress.org/extend/plugins/woocommerce/">WooCommerce</a>' ) . '</p></div>';
		}
	}

	add_action('plugins_loaded', 'pickpoint_wc_custom_shipping_pp',90);
	function pickpoint_wc_custom_shipping_pp() {
		new pickpoint_wc_custom_shipping_pp();
		load_plugin_textdomain( 'pickpoint',  false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}

	function woocommerce_custom_shipping_init() {
		if ( version_compare( WOOCOMMERCE_VERSION, '2.0', '<' ) ) {
			if ( class_exists( 'WC_Free_Shipping' )) {
				class Pickpoint_pinckpoint extends WC_Free_Shipping {}
			}
		} else {
			if ( class_exists( 'WC_Shipping_Method' )) {
				class Pickpoint_pinckpoint extends WC_Shipping_Method {}
			}
		}
		if ( ! class_exists( 'Pickpoint_pinckpoint' ) ) {
			add_action( 'admin_notices',  array( 'pickpoint_wc_custom_shipping_pp', 'woocommerce_castom_shipping_fallback_notice'),90 );
			return;
		}
		class wc_custom_shipping_pickpoint extends Pickpoint_pinckpoint {
			var $_one;
			var $enabled = false;
			var $enabled_admin;
			var $title;
			var $min_amount;
			var $fee;
			var $city;
			var $requires;
			var $fix_echo_button_postamat;
			function __construct() {
				add_action('wp_footer', array($this, 'sctipt_foot'),90 );
				$this->id 			= __CLASS__;
				$this->method_title = __('PickPoint', 'pickpoint');
				$this->init();
				add_filter('woocommerce_cart_shipping_method_full_label', array($this, 'woocommerce_cart_shipping_method_full_label'), 90, 2 );
				if ( version_compare( WOOCOMMERCE_VERSION, '2.0', '<' ) ) $_SESSION['_chosen_shipping_method_one']  = true;
			}
			function sctipt_foot() {
				if( is_checkout() && !isset( $_GET['key'] ) ) {
					if ( $this->enabled == "no"  ) return false;
					$this->footer();
					global $woocommerce;
					 ?>
					 <script type="text/javascript" src="//pickpoint.ru/select/postamat.js"></script>
					<script type="text/javascript" src="<?php echo WC_PICKPOINT_URL?>js/postamat.js"></script>
						
							<?php
				}
			}
			function comp_woocomerce_mess_error ($m) {
				if( version_compare( WOOCOMMERCE_VERSION, '2.1', '<' ) ) {
					global $woocommerce;
					$woocommerce->add_error( $m );
				} else {
					wc_add_notice( $m, 'error' );
				}
			}
			public function admin_options() {

				?>
				<h3><?php _e( 'Постаматы PickPoint', 'pickpoint' ); ?></h3>
				<table class="form-table">
				<?php
					// Generate the HTML For the settings form.
					$this->generate_settings_html();
				?>
				</table><!--/.form-table-->
				<?php
			}
			function woocommerce_cart_shipping_method_full_label($full_label, $method) {
				if( $this->id ==  $method->id && $method->cost <= 0) {
					$full_label = $this->title ;
				}
				return $full_label;
			}
			function init_form_fields(){
				global $woocommerce;

				// Backwards compat

				if(version_compare( WOOCOMMERCE_VERSION, '2.0', '<' )) {
				
					$this->form_fields = array(
					'enabled' => array(
									'title' 		=> __( 'Enable/Disable', 'woocommerce' ),
									'type' 			=> 'checkbox',
									'label' 		=> __( 'Enable PickPoint', 'pickpoint' ),
									'default' 		=> 'yes'
								),
					'title' => array(
									'title' 		=> __( 'Method Title', 'woocommerce' ),
									'type' 			=> 'text',
									'description' 	=> __( 'This controls the title which the user sees during checkout.', 'woocommerce' ),
									'default'		=> __( 'PickPoint', 'pickpoint' )
								),
					'min_amount' => array(
									'title' 		=> __( 'Minimum Order Amount', 'woocommerce' ),
									'type' 			=> 'text',
									'description' 	=> __('Users will need to spend this amount to get free shipping. Leave blank to disable.', 'woocommerce'),
									'default' 		=> ''
								),
								'fee' => array(
									'title' 		=> __( 'Delivery Fee', 'woocommerce' ),
									'type' 			=> 'number',
									'custom_attributes' => array(
										'step'	=> 'any',
										'min'	=> '0'
									),
									'description' 	=> 'Добавочная стоимость при выборе этого метода доставки.',
									'default'		=> '',
									'desc_tip'      => true,
									'placeholder'	=> '0.00'
								),
								'city' => array(
									'title' 		=> __( 'Delivery City', 'woocommerce' ),
									'type' 			=> 'text',
									'description' 	=> 'Город отправления.',
									'default'		=> '',
								),
					'requires_coupon' => array(
									'title' 		=> __( 'Coupon', 'woocommerce' ),
									'type' 			=> 'checkbox',
									'label' 		=> __( 'Free shipping requires a free shipping coupon', 'woocommerce' ),
									'description' 	=> __('Users will need to enter a valid free shipping coupon code to use this method. If a coupon is used, the minimum order amount will be ignored.', 'woocommerce'),
									'default' 		=> 'no'
								),
					'description' => array(
									'title' 		=> __( 'Примечание для покупателя', 'pickpoint' ),
									'type' 			=> 'textarea',
									'description' 	=> __('Примечание увидит покупатель, когда выберет данный метод доставки.', 'pickpoint'),
									'default' 		=> ''
								)
					);
				} else {
				if ( $this->requires_coupon && $this->min_amount )
					$default_requires = 'either';
				elseif ( $this->requires_coupon )
					$default_requires = 'coupon';
				elseif ( $this->min_amount )
					$default_requires = 'min_amount';
				else
					$default_requires = '';
				$this->form_fields = array(
					'enabled' => array(
									'title' 		=> __( 'Enable/Disable', 'woocommerce' ),
									'type' 			=> 'checkbox',
									'label' 		=> __( 'Enable PickPoint', 'pickpoint' ),
									'default' 		=> 'no'
								),
					'enabled_admin' => array(
									'title' 		=> __( 'Включить только для админа', 'pickpoint' ),
									'type' 			=> 'checkbox',
									'label' 		=> __( 'Enable PickPoint', 'pickpoint' ) . " (admin)",
									'default' 		=> 'no'
								),
					'title' => array(
									'title' 		=> __( 'Method Title', 'pickpoint' ),
									'type' 			=> 'text',
									'description' 	=> __( 'This controls the title which the user sees during checkout.', 'woocommerce' ),
									'default'		=> __( 'PickPoint', 'pickpoint' ),
									'desc_tip'      => true,
								),
					'availability' => array(
									'title' 		=> __( 'Method availability', 'woocommerce' ),
									'type' 			=> 'select',
									'default' 		=> 'all',
									'class'			=> 'availability',
									'options'		=> array(
										'all' 		=> __( 'All allowed countries', 'woocommerce' ),
										'specific' 	=> __( 'Specific Countries', 'woocommerce' )
									)
								),
					'countries' => array(
									'title' 		=> __( 'Specific Countries', 'woocommerce' ),
									'type' 			=> 'multiselect',
									'class'			=> 'chosen_select',
									'css'			=> 'width: 450px;',
									'default' 		=> '',
									'options'		=> $woocommerce->countries->countries
								),
			
					'requires' => array(
									'title' 		=> __( 'PickPoint (опции задействования)', 'pickpoint' ),
									'type' 			=> 'select',
									'default' 		=> $default_requires,
									'options'		=> array(
										'' 				=> __( 'N/A', 'woocommerce' ),
										'coupon'		=> __( 'Купон на бесплатную доставку. Активация "'.$this->method_title.'"', 'woocommerce' ),
										'min_amount' 	=> __( 'A minimum order amount (defined below)', 'woocommerce' ),
										'either' 		=> __( 'A minimum order amount OR a coupon', 'woocommerce' ),
										'both' 			=> __( 'A minimum order amount AND a coupon', 'woocommerce' ),
									)
								),
					'min_amount' => array(
									'title' 		=> __( 'Minimum Order Amount', 'woocommerce' ),
									'type' 			=> 'number',
									'custom_attributes' => array(
										'step'	=> 'any',
										'min'	=> '0'
									),
									'description' 	=> __( 'Покупателям необходимо потратить именно столько, чтобы активировать данный метод доставки. Оставьте пустым, чтобы опция была неактивной.', 'woocommerce' ),
									'default' 		=> '0',
									'desc_tip'      => true,
									'placeholder'	=> '0.00'
								),
								'fee' => array(
									'title' 		=> __( 'Delivery Fee', 'woocommerce' ),
									'type' 			=> 'number',
									'custom_attributes' => array(
										'step'	=> 'any',
										'min'	=> '0'
									),
									'description' 	=> 'Добавочная стоимость при выборе этого метода доставки.',
									'default'		=> '',
									'desc_tip'      => true,
									'placeholder'	=> '0.00'
								),
								'city' => array(
									'title' 		=> __( 'Delivery City', 'woocommerce' ),
									'type' 			=> 'text',
									'description' 	=> 'Город отправления.',
									'default'		=> '',
								),
					'description' => array(
									'title' 		=> __( 'Примечание для покупателя', 'pickpoint' ),
									'type' 			=> 'textarea',
									'description' 	=> __('Примечание увидит покупатель, когда выберет данный метод доставки.', 'pickpoint'),
									'default' 		=> ''
								),
					'fix_echo_button_postamat' => array(
									'title' 		=> __( 'Включить, если кнопка не появляется в вашей теме', 'pickpoint' ),
									'type' 			=> 'checkbox',
									'label' 		=> __( 'Включить альтернативный вывод кнопки', 'pickpoint' ),
									'default' 		=> 'no'
								)
								
					);
				}
					
			}




			function init() {
			global $woocommerce;

				$this->init_settings(); 
				// Define user set variables
				$this->enabled		= $this->settings['enabled'];
				$this->enabled_admin		= $this->settings['enabled_admin'];
				$this->title 		= $this->settings['title'];
				if($this->enabled_admin == 'yes' && !is_super_admin() ) $this->enabled = 'no';
				$this->min_amount 	= $this->settings['min_amount'];
				if(!version_compare( WOOCOMMERCE_VERSION, '2.0', '<' )) {
					@$this->availability = $this->settings['availability'];
					@$this->countries 	= $this->settings['countries'];
				}
				$this->fee			= $this->settings['fee'];
				$this->city			= $this->settings['city'];
				@$this->description  = $this->settings['description'];
				@$this->fix_echo_button_postamat  = ($this->settings['fix_echo_button_postamat'] == 'no' || empty($this->settings['fix_echo_button_postamat'])) ? true : false;
				if(version_compare( WOOCOMMERCE_VERSION, '2.0', '<' )) $this->requires_coupon 	= $this->settings['requires_coupon'];
				else  $this->requires_coupon 	= $this->settings['requires'];
						// Load the form fields.
				$this->init_form_fields();

				// Load the settings.
				
				// Actions
				add_action('woocommerce_update_options_shipping_'.$this->id, array($this, 'process_admin_options'),90);
				
				if ( $this->is_availables( ) ) {

					add_action( 'woocommerce_review_order_after_shipping',  array( $this, 'review_order_pickup_location' ) );
					add_action( 'woocommerce_checkout_update_order_meta',   array( $this, 'checkout_update_order_meta' ), 90, 2 );
					add_action( 'woocommerce_thankyou',                     array( $this, 'order_pickup_location' ), 90 );
					add_action( 'woocommerce_view_order',                   array( $this, 'order_pickup_location' ), 90 );
					if( version_compare( WOOCOMMERCE_VERSION, '3.0', '<' ) )
					add_action( 'woocommerce_after_template_part',          array( $this, 'email_pickup_location' ), 90, 3 );
					else
					add_action( 'woocommerce_after_template_part',          array( $this, 'email_pickup_location' ), 90, 4 );
							
							add_action( 'woocommerce_order_status_pending_to_processing_notification', array( $this, 'store_order_id' ),90, 1 );
							add_action( 'woocommerce_order_status_pending_to_completed_notification',  array( $this, 'store_order_id' ),90, 1 );
							add_action( 'woocommerce_order_status_pending_to_on-hold_notification',    array( $this, 'store_order_id' ),90, 1 );
							add_action( 'woocommerce_order_status_failed_to_processing_notification',  array( $this, 'store_order_id' ),90, 1 );
							add_action( 'woocommerce_order_status_failed_to_completed_notification',   array( $this, 'store_order_id' ),90, 1 );
							add_action( 'woocommerce_order_status_completed_notification',             array( $this, 'store_order_id' ),90, 1 );
							add_action( 'woocommerce_new_customer_note_notification',                  array( $this, 'store_order_id' ),90, 1 );
						
						
				}
				add_action( 'woocommerce_after_checkout_validation',    array( $this, 'checkout_validation' ),90 );
				add_filter( 'woocommerce_shipping_methods', array( $this, 'add_nova_pocha' ),90 );
				
				add_action('woocommerce_update_options_shipping_methods', array($this, 'process_admin_options'),90);
				//add_action('woocommerce_update_options_shipping_', array($this, 'calculate_shipping'),90);
				if ( is_admin() ) {
					add_action( 'woocommerce_admin_order_data_after_shipping_address', array( $this, 'admin_order_pickup_location' ),90 );
				}
				
				//add_action('woocommerce_checkout_update_order_review', 'action_woocommerce_checkout_update_order_review', 90, 2);
				//add_action( 'init', 'calculate_shipping' );
				//add_action('woocommerce_before_calculate_totals', 'action_woocommerce_before_calculate_totals',10,2);
				//add_action( 'woocommerce_review_order_before_cart_contents', 'woocommerce_tutsplus_validate_order' , 10 );
				//add_action('woocommerce_cart_total', 'calculate_totals', 10, 1);
				add_action( 'wp_enqueue_scripts', array($this,'update_shipping') );
				add_action( 'wp_ajax_get_and_set_shipping_rate', array( $this,'get_and_set_shipping_rate') );
				add_action( 'wp_ajax_nopriv_get_and_set_shipping_rate', array( $this,'get_and_set_shipping_rate') );
				
				add_action('woocommerce_before_calculate_totals', array( $this,'woo_add_cart_fee'));


				}
				function woo_add_cart_fee() {
					$chosen_methods = WC()->session->get( 'chosen_shipping_methods' );
					$chosen_shipping = $chosen_methods[0];
				    if ($chosen_shipping != "wc_custom_shipping_pickpoint") {
				        WC()->session->set( 'ship_total_value', $this->fee); 
				    }
				}
				
				public function get_and_set_shipping_rate()
				{
					$shipping_cost = $this->fee;
				    $shipping_zone = $_POST['zone'];
					$k = (int)$shipping_zone + 1;
					$shipping_cost += (100*$k);
					
					//echo $chosen_shipping ;
				    WC()->session->set( 'ship_total_value', $shipping_cost); 
				}
				
				function update_shipping() { 
				    wp_register_script('ship_select_script', WC_PICKPOINT_URL.'js/postamat.js', array('jquery'));
				    wp_localize_script('ship_select_script', 'shipselect', array('ajaxurl' => admin_url('admin-ajax.php'), 'post_ship_select_nonce' =>wp_create_nonce('ship_select_nonce')));
				    wp_enqueue_script('jquery');
				    wp_enqueue_script('ship_select_script');

				 } 

			function checkout_validation( $posted ) {
				global $woocommerce;
				if(is_array($posted['shipping_method']) && isset($posted['shipping_method'][0]) ) $posted['shipping_method'] = $posted['shipping_method'][0]; 
				if ( $posted['shipping_method'] == $this->id ) {
					if ( empty( $_POST['order_comments'] )  ) {
						$this->comp_woocomerce_mess_error( __( '<span class="req">Нужно выбрать постамат</span>.', 'pickpoint' ) );
					}
				}
			}
			function calculate_shipping( $package = array() ) {
			global $woocommerce;
				$shipping_total = 0;	
				$new_cost = WC()->session->get( 'ship_total_value' ); 
				$fee = ( trim( $this->fee ) == '' ) ? 0 : $this->fee;
				
				$shipping_total 	= ($new_cost == '') ? $this->fee : $new_cost;
				$rate = array(
					'id' 		=> $this->id,
					'label' 	=> $this->title,
					'cost' 		=> $shipping_total
				);

				$this->add_rate($rate);
			}
			public function admin_order_pickup_location() {
				global $post;
						
				$order = new WC_Order( $post->ID );
				if ( !version_compare( WOOCOMMERCE_VERSION, '2.1.0', '<' ) ) {
					$pickup_location_array = get_post_meta($order->id, '_order_comments', true);	
					$is_true = ( $order->get_shipping_method() == $this->title && !empty($pickup_location_array) ) ;
				} else {
					$is_true = ($order->shipping_method == $this->id && isset( $order->order_custom_fields['_order_comments'][0] ) ); 
				}
				if ( $is_true ) {
					if ( version_compare( WOOCOMMERCE_VERSION, '2.1.0', '<' ) ) {
						$pickup_location = maybe_unserialize( $order->order_custom_fields['_billing_address_1'][0] );
						$pickup_location_array = maybe_unserialize( $order->order_custom_fields['_order_comments'][0] );
					} else {
						$pickup_location =  get_post_meta($order->id, '_billing_address_1', true);
					}
				}
					if(!empty($pickup_location_array)) {
						echo '<div>';
						echo '<h3>'.__( 'Доставка в Постаматы PickPoint:','pickpoint' ).'</h3>';
						
						echo '<div><strong><strong> ID постамата: </strong></strong>'.$pickup_location_array .'</div>';
						echo '<div> <strong><strong>Название точки:</strong></strong> '.$pickup_location .'</div>';
						echo '</div>';
					}
			}
			/*public function checkout_update_order_meta( $order_id, $posted ) {
				if(is_array($posted['shipping_method']) && isset($posted['shipping_method'][0]) ) $posted['shipping_method'] = $posted['shipping_method'][0]; 
				if ( $posted['shipping_method'] == $this->id ) {

					if ( isset($_POST['order_comments']) ) {
						
						if(!add_post_meta( $order_id, '_order_comments', esc_attr($_POST["order_comments"]) )) update_post_meta( $order_id, '_order_comments', esc_attr($_POST["order_comments"]) );
					}
					if ( isset($_POST['billing_address_1']) ) {
						
						if(!add_post_meta( $order_id, '_billing_address_1', esc_attr($_POST["billing_address_1"]) )) update_post_meta( $order_id, '_billing_address_1', esc_attr($_POST["billing_address_1"]) );
					}
				}
			}*/

			function order_pickup_location($order_id) {
				$order = new WC_Order( $order_id );
				if ( !version_compare( WOOCOMMERCE_VERSION, '2.1.0', '<' ) ) {
					$is_true = ( $order->get_shipping_method() == $this->title ) ;
				} else {
					$is_true = ($order->shipping_method == $this->id ); 
				}
				if ( $is_true ) {
					if ( version_compare( WOOCOMMERCE_VERSION, '2.1.0', '<' ) ) {
						$pickup_location = maybe_unserialize( $order->order_custom_fields['_billing_address_1'][0] );
						$pickup_location_array = maybe_unserialize( $order->order_custom_fields['_order_comments'][0] );
					} else {
						$pickup_location =  get_post_meta($order->id, '_billing_address_1', true);
						$pickup_location_array = get_post_meta($order->id, '_order_comments', true);			
					}
					
					if(!empty($pickup_location_array)) {
						echo '<div>';
						echo '<h3>'.__( 'Доставка в Постаматы PickPoint:','pickpoint' ).'</h3>';
						
						echo '<div><strong> ID постамата: </strong>'.$pickup_location_array .'</div>';
						echo '<div> <strong>Название точки:</strong> '.$pickup_location .'</div>';
						echo '</div>';
					}
				}
			}
			public function store_order_id( $arg ) {
				if ( is_int( $arg ) ) $this->email_order_id = $arg;
				elseif ( is_array( $arg ) && array_key_exists( 'order_id', $arg ) ) $this->email_order_id = $arg['order_id'];
			}
			public function email_pickup_location( $template_name, $template_path, $located, $args = array() ) {
				if($template_name == 'emails/email-addresses.php' && isset($args["order"]) && is_object($args["order"]) ) {
					$this->email_order_id  = $args["order"]->get_id();
				}
				if ( $template_name == 'emails/email-addresses.php' && $this->email_order_id ) {

					$order = new WC_Order( $this->email_order_id );
					if ( !version_compare( WOOCOMMERCE_VERSION, '2.1.0', '<' ) ) {
						$is_true = ( $order->get_shipping_method() == $this->title ) ;
					} else {
						$is_true = ($order->shipping_method == $this->id ); 
					}
					if ( $is_true ) {
					if ( version_compare( WOOCOMMERCE_VERSION, '2.1.0', '<' ) ) {
						$pickup_location = maybe_unserialize( $order->order_custom_fields['_billing_address_1'][0] );
						$pickup_location_array = maybe_unserialize( $order->order_custom_fields['_order_comments'][0] );
					} else {
						$pickup_location =  get_post_meta($order->id, '_billing_address_1', true);
						$pickup_location_array = get_post_meta($order->id, '_order_comments', true);			
					}
						
						if(!empty($pickup_location_array)) {
							echo '<div>';
							echo '<h3>'.__( 'Доставка в Постаматы PickPoint:','pickpoint' ).'</h3>';
							
							echo '<div><strong> ID постамата: </strong>'.$pickup_location_array .'</div>';
							echo '<div> <strong>Название точки:</strong> '.$pickup_location .'</div>';
							echo '</div>';
						}
					}
				}
			}
			
			public function is_availables() {
						
				if ( $this->enabled == "no"  ) return false;
				
			if(version_compare( WOOCOMMERCE_VERSION, '2.0', '<' )) {
				global $woocommerce;
				$is_available 		= false;
				$has_coupon 		= false;
				$has_met_min_amount = false;
				if ( $this->requires_coupon == 'yes' && $this->min_amount )
					$default_requires = 'either';
				elseif ( $this->requires_coupon=='yes' )
					$default_requires = 'coupon';
				elseif ( $this->min_amount )
					$default_requires = 'min_amount';
				else
					$default_requires = '';
				if ( in_array( $default_requires, array( 'coupon', 'either' ) ) ) {

					if ( $woocommerce->cart->applied_coupons ) {
						foreach ($woocommerce->cart->applied_coupons as $code) {
							$coupon = new WC_Coupon( $code );

							if ( $coupon->is_valid() && $coupon->enable_free_shipping() )
								$has_coupon = true;
						}
					}
				}

				if ( in_array( $default_requires, array( 'min_amount', 'either' ) ) ) {

					if ( isset( $woocommerce->cart->cart_contents_total ) ) {

						if ( $woocommerce->cart->prices_include_tax )
							$total = $woocommerce->cart->tax_total + $woocommerce->cart->cart_contents_total;
						else
							$total = $woocommerce->cart->cart_contents_total;

						if ( $total >= $this->min_amount )
							$has_met_min_amount = true;
					}
				}
				switch ( $default_requires ) {
					case 'min_amount' :
						if ( $has_met_min_amount ) $is_available = true;
					break;
					case 'coupon' :
						if ( $has_coupon ) $is_available = true;
					break;
					case 'either' :
						if ( $has_met_min_amount && $has_coupon ) $is_available = true;
					break;
					case 'both' :
						if ( $has_met_min_amount || $has_coupon ) $is_available = true;
					break;
					default :
						$is_available = true;
					break;
				}
				
			} else {
				global $woocommerce;
				$is_available 		= false;
				$has_coupon 		= false;
				$has_met_min_amount = false;

				if ( in_array( $this->requires_coupon, array( 'coupon', 'either', 'both' ) ) ) {

					if ( $woocommerce->cart->applied_coupons ) {
						foreach ($woocommerce->cart->applied_coupons as $code) {
							$coupon = new WC_Coupon( $code );

							if ( $coupon->is_valid() && $coupon->enable_free_shipping() )
								$has_coupon = true;
						}
					}
				}

				if ( in_array( $this->requires_coupon, array( 'min_amount', 'either', 'both' ) ) ) {

					if ( isset( $woocommerce->cart->cart_contents_total ) ) {

						if ( $woocommerce->cart->prices_include_tax )
							$total = $woocommerce->cart->tax_total + $woocommerce->cart->cart_contents_total;
						else
							$total = $woocommerce->cart->cart_contents_total;

						if ( $total >= $this->min_amount )
							$has_met_min_amount = true;
							
					}
				}

				switch ( $this->requires_coupon ) {
					case 'min_amount' :
						if ( $has_met_min_amount ) $is_available = true;
					break;
					case 'coupon' :
						if ( $has_coupon ) $is_available = true;
					break;
					case 'both' :
						if ( $has_met_min_amount && $has_coupon ) $is_available = true;
					break;
					case 'either' :
						if ( $has_met_min_amount || $has_coupon ) $is_available = true;
					break;
					default :
						$is_available = true;
					break;
				}
				
			}
				if(!$is_available) $this->enabled = "no";
				return apply_filters( 'woocommerce_shipping_' . $this->id . '_is_available', $is_available );
			}
			
			public function review_order_pickup_location() {
				global $woocommerce;
				if ( version_compare( WOOCOMMERCE_VERSION, '2.0', '<' ) ) $chosen_shipping_method = $_SESSION['_chosen_shipping_method']; 
				elseif( version_compare( WOOCOMMERCE_VERSION, '2.1', '<' ) ) $chosen_shipping_method = $woocommerce->session->chosen_shipping_method;
				else $chosen_shipping_method = $woocommerce->session->chosen_shipping_methods[0];
				
				if(  isset($_POST['shipping_method'] ) && is_array( $_POST['shipping_method'] ) && isset($_POST['shipping_method'][0]) ) $posted['shipping_method'] = $_POST['shipping_method'][0];
				if(isset($posted['shipping_method']) && is_null($chosen_shipping_method) ) $chosen_shipping_method = $posted['shipping_method'];
				
				if ( version_compare( WOOCOMMERCE_VERSION, '2.0', '<' ) ) $this->_one = $_SESSION['_chosen_shipping_method_one']; else $this->_one = true;
				if ( $chosen_shipping_method == $this->id  && $this->_one ) {
					if ( version_compare( WOOCOMMERCE_VERSION, '2.0', '<' ) ) { $_SESSION['_chosen_shipping_method_one'] = false; $colspan = ' colspan="2" ';$_colspan = ' colspan="3" ';} else { $colspan = ''; $_colspan = ' colspan="2" '; }
					$s = '';
					if(!empty($this->description)) {
						
						echo '<td'.$_colspan.'>'.wpautop($this->description).'<a href="#"  style="color: #FFffff;float:right;margin-bottom: 20px;"  class="button" onclick="PickPoint.open(pickpoint_castom_function, {fromcity:\''.$this->city.'\'});return false">'.__('Выбрать постамат', 'pickpoint') .'</a></td>';
					
						$s = ' style="border-top:none!important;padding-top: 0;margin-top: 0;" ';
					} else {
						echo '<tr class="free_shipping_pm" style="display: table-cell!important;">';
						echo '<td'.$_colspan.' style="border-bottom: none!important; margin-bottom: 0;padding-bottom: 0;"><a href="#" style="color: #FF0000;"  class="button" onclick="PickPoint.open(pickpoint_castom_function, {fromcity:\''.$this->city.'\'});return false">'.__('Выбрать постамат', 'pickpoint') .'</a></td>';	
						
						$s = ' style="border-top:none!important;padding-top: 0;margin-top: 0;" ';
					}
				}
			}

			public function footer(  ) {
				if($this->fix_echo_button_postamat) return;
				if(!empty($this->description)) {
						$echo = '<div class="free_shipping_pickpoint_postamat">';
						$echo .= '<div id="payment"><div class="payment_box s">'. str_replace('"', '\\"', wpautop($this->description) ).'</div></div><a href="#"  style="color: #FF0000;"  class="button" onclick="PickPoint.open(pickpoint_castom_function, {fromcity:\''.$this->city.'\'});return false">'.__('Выбрать постамат', 'pickpoint') .'</a>';
						$echo .= '</div>';
						$s = ' style="border-top:none!important;padding-top: 0;margin-top: 0;" ';
					} else {
						$echo = '<div class="free_shipping_pickpoint_postamat">';
						$echo .= '<a href="#" style="color: #FF0000;"  class="button" onclick="PickPoint.open(pickpoint_castom_function, {fromcity:\''.$this->city.'\'});return false">'.__('Выбрать постамат', 'pickpoint') .'</a>';	
						$echo .= '</div>';
						$s = ' style="border-top:none!important;padding-top: 0;margin-top: 0;" ';
					}
					?>
				<script type="text/javascript">
					jQuery('body').delegate('#shipping_method_0', 'change', function(){
						jQuery('.free_shipping_pickpoint_postamat').remove();
						if(jQuery('#shipping_method_0').val() == '<?php echo $this->id; ?>')
						jQuery(this).parent().after('<?php echo $echo; ?>');
					});
					jQuery('#shipping_method_0').trigger('change');
				</script>
				<?php
			}
			public function add_nova_pocha( $methods ) {
				// since the gateway is always constructed, we'll pass it in to the register filter so it doesn't have to be re-instantiated
				//global $woocommerce;
				//$woocommerce->cart->calculate_shipping();
				$methods[] = $this;
				return $methods;
			}
		}
unset($fields['billing']['billing_company']);
	    unset($fields['billing']['billing_address_1']);
	    unset($fields['billing']['billing_address_2']);
	    unset($fields['billing']['billing_city']);
	    unset($fields['billing']['billing_postcode']);
	    unset($fields['billing']['billing_country']);
	    unset($fields['billing']['billing_state']);
	    unset($fields['billing']['billing_phone']);
	    unset($fields['order']['order_comments']);
	    unset($fields['billing']['billing_address_2']);
	    unset($fields['billing']['billing_postcode']);
	    unset($fields['billing']['billing_company']);
	    unset($fields['billing']['billing_city']);
		new wc_custom_shipping_pickpoint();
	}
