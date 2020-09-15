<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "woocommerce_my_account_options";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'woocommerce_my_account_options',
        'use_cdn' => TRUE,
        'dev_mode' => FALSE,
        'display_name' => esc_html__('WooCommerce My Account', 'woocommerce-my-account'),
        'display_version' => '1.0.5',
        'page_title' => esc_html__('WooCommerce My Account', 'woocommerce-my-account'),
        'update_notice' => TRUE,
        'intro_text' => '',
        'footer_text' => '&copy; '.date('Y').' weLaunch',
        'admin_bar' => TRUE,
        'menu_type' => 'submenu',
        'menu_title' => esc_html__('My Account', 'woocommerce-my-account'),
        'allow_sub_menu' => TRUE,
        'page_parent' => 'woocommerce',
        'page_parent_post_type' => 'your_post_type',
        'customizer' => FALSE,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_color' => 'lightgray',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'help-tab',
            'title'   => esc_html__( 'Information', 'woocommerce-my-account' ),
            'content' => esc_html__( 'Need support? Please use the comment function on codecanyon.', 'woocommerce-my-account' )
        ),
    );
    Redux::setHelpTab( $opt_name, $tabs );

    /*
     * <--- END HELP TABS
     */

    $options = get_option('woocommerce_my_account_options');
    $tabOut = 5;
    if(isset($options['tabCount']) && !empty($options['tabCount'])) {
        $tabOut = $options['tabCount'];
    }

    $reorderTabs = array(
        'dashboard'       => esc_html__( 'Dashboard', 'woocommerce' ),
        'orders'          => esc_html__( 'Orders', 'woocommerce' ),
        'downloads'       => esc_html__( 'Downloads', 'woocommerce' ),
        'edit-address'    => esc_html__( 'Addresses', 'woocommerce' ),
        'payment-methods' => esc_html__( 'Payment methods', 'woocommerce' ),
        'edit-account'    => esc_html__( 'Account details', 'woocommerce' ),
        
    );

    for($tab = 0; $tab < $tabOut; $tab++)
    {
        if($options[ $tab . 'TabEnabled'] == "1" && !empty($options[ $tab . 'TabTitle'])) {
            $reorderTabs[$options[ $tab . 'TabEndpoint'] ] = $options[ $tab . 'TabTitle'];
        }
    }

    $reorderTabs['customer-logout'] = esc_html__( 'Logout', 'woocommerce' );


    /*
     *
     * ---> START SECTIONS
     *
     */

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'My Account', 'woocommerce-my-account' ),
        'id'     => 'general',
        'desc'   => esc_html__( 'Need support? Please use the comment function on codecanyon.', 'woocommerce-my-account' ),
        'icon'   => 'el el-home',
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'General', 'woocommerce-my-account' ),
        'id'         => 'general-settings',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'enable',
                'type'     => 'checkbox',
                'title'    => esc_html__( 'Enable', 'woocommerce-my-account' ),
                'subtitle' => esc_html__( 'Enable my account customizer.', 'woocommerce-my-account' ),
                'default'   => 1,
            ),
            array(
                'id'       => 'tabCount',
                'type' => 'spinner',
                'title' => esc_html__('Amount of Tabs', 'woocommerce-my-account'), 
                'subtitle' => esc_html__('Limit the number of tabs to decrease load time.', 'woocommerce-my-account'), 
                'default'  => '5',
                'min'      => '1',
                'step'     => '1',
                'max'      => '20',
            ),
            array(
                'id'      => 'reorderTabs',
                'type'    => 'sorter',
                'title'   => 'Reorder / Disable Tabs',
                'subtitle'    => 'Reorder or even disable the my account tabs.',
                'options' => array(
                    'enabled'  => $reorderTabs,
                    'disabled' => array(
                    )
                ),
            ),
            array(
                'id'       => 'renameTabs',
                'type'     => 'checkbox',
                'title'    => esc_html__( 'Enable Tab Rename', 'woocommerce-my-account' ),
            ),
            array(
                'id'       => 'renameDashboardTab',
                'type'     => 'text',
                'title'    => esc_html__( 'Rename Dashboard Tab', 'woocommerce-my-account' ),
                'default'  => esc_html__( 'Dashboard', 'woocommerce' ),
                'required' => array('renameTabs','equals','1'),
            ),
            array(
                'id'       => 'renameOrdersTab',
                'type'     => 'text',
                'title'    => esc_html__( 'Rename Orders Tab', 'woocommerce-my-account' ),
                'default'  => esc_html__( 'Orders', 'woocommerce' ),
                'required' => array('renameTabs','equals','1'),
            ),
            array(
                'id'       => 'renameDownloadsTab',
                'type'     => 'text',
                'title'    => esc_html__( 'Rename Downloads Tab', 'woocommerce-my-account' ),
                'default'  => esc_html__( 'Downloads', 'woocommerce' ),
                'required' => array('renameTabs','equals','1'),
            ),
            array(
                'id'       => 'renameAddressesTab',
                'type'     => 'text',
                'title'    => esc_html__( 'Rename Addresses Tab', 'woocommerce-my-account' ),
                'default'  => esc_html__( 'Addresses', 'woocommerce' ),
                'required' => array('renameTabs','equals','1'),
            ),
            array(
                'id'       => 'renamePaymentTab',
                'type'     => 'text',
                'title'    => esc_html__( 'Rename Payment Tab', 'woocommerce-my-account' ),
                'default'  => esc_html__( 'Payment methods', 'woocommerce' ),
                'required' => array('renameTabs','equals','1'),
            ),
            array(
                'id'       => 'renameAccountTab',
                'type'     => 'text',
                'title'    => esc_html__( 'Rename Account Tab', 'woocommerce-my-account' ),
                'default'  => esc_html__( 'Account details', 'woocommerce' ),
                'required' => array('renameTabs','equals','1'),
            ),
            array(
                'id'       => 'renameLogoutTab',
                'type'     => 'text',
                'title'    => esc_html__( 'Rename Logout Tab', 'woocommerce-my-account' ),
                'default'  => esc_html__( 'Logout', 'woocommerce' ),
                'required' => array('renameTabs','equals','1'),
            ),
       )
    ) );

    // Global Tab Styling
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Style', 'woocommerce-my-account' ),
        'id'         => 'style',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'styleEnable',
                'type'     => 'checkbox',
                'title'    => esc_html__( 'Enable Tab Styles', 'woocommerce-my-account' ),
            ),
            array(
                'id'     =>'styleLayout',
                'type'     => 'select',
                'title' => esc_html__('Tab Layout', 'woocommerce-my-account'), 
                'subtitle' => __('Need a customized layout? Contact us at <a href="mailto:support@welaunch.io">support@welaunch.io</a>.', 'woocommerce-my-account'),
                'options'  => array(
                    'leftSidebar' => esc_html__('Left Sidebar', 'woocommerce-my-account' ),
                    'rightSidebar' => esc_html__('Right Sidebar', 'woocommerce-my-account' ),
                    'fullWidth' => esc_html__('Full Width', 'woocommerce-my-account' ),
                ),
                'required' => array('styleEnable','equals','1'),
                'default'   => 'leftSidebar',
            ),
            array(
                'id'     =>'styleTabTextColor',
                'type' => 'color',
                'url'      => true,
                'title' => esc_html__('Tab Text Color', 'woocommerce-my-account'), 
                'subtitle' => esc_html__('Add a text color to the tabs.', 'woocommerce-my-account'),
                'validate' => 'color',
                'default'   => '#000000',
                'required' => array('styleEnable','equals','1'),
            ),
            array(
                'id'     =>'styleTabBackgroundColor',
                'type' => 'color',
                'url'      => true,
                'title' => esc_html__('Tab Background Color', 'woocommerce-my-account'), 
                'subtitle' => esc_html__('Add a background color to the tabs.', 'woocommerce-my-account'),
                'validate' => 'color',
                'default'   => '#FFFFFF',
                'required' => array('styleEnable','equals','1'),
            ),
            array(
                'id'     =>'styleTabHoverTextColor',
                'type' => 'color',
                'url'      => true,
                'title' => esc_html__('Tab Hover Text Color', 'woocommerce-my-account'), 
                'subtitle' => esc_html__('Add a text color to the tabs.', 'woocommerce-my-account'),
                'validate' => 'color',
                'default'   => '#FFFFFF',
                'required' => array('styleEnable','equals','1'),
            ),
            array(
                'id'     =>'styleTabHoverBackgroundColor',
                'type' => 'color',
                'url'      => true,
                'title' => esc_html__('Tab Hover Background Color', 'woocommerce-my-account'), 
                'subtitle' => esc_html__('Add a background color to the tabs.', 'woocommerce-my-account'),
                'validate' => 'color',
                'default'   => '#000000',
                'required' => array('styleEnable','equals','1'),
            ), 
            array(
                'id'     =>'styleTabActiveTextColor',
                'type' => 'color',
                'url'      => true,
                'title' => esc_html__('Tab Active Text Color', 'woocommerce-my-account'), 
                'subtitle' => esc_html__('Add a text color to the tabs.', 'woocommerce-my-account'),
                'validate' => 'color',
                'default'   => '#FFFFFF',
                'required' => array('styleEnable','equals','1'),
            ),
            array(
                'id'     =>'styleTabActiveBackgroundColor',
                'type' => 'color',
                'url'      => true,
                'title' => esc_html__('Tab Active Background Color', 'woocommerce-my-account'), 
                'subtitle' => esc_html__('Add a background color to the tabs.', 'woocommerce-my-account'),
                'validate' => 'color',
                'default'   => '#000000',
                'required' => array('styleEnable','equals','1'),
            ), 
        )
    ) );

    for($tab = 0; $tab < $tabOut; $tab++)
    { 

        Redux::setSection( $opt_name, array(
            'title'      => esc_html__( 1+$tab.'. Tab', 'woocommerce-my-account' ),
            'id'         => $tab . '-tab',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => $tab . 'TabEnabled',
                    'type'     => 'checkbox',
                    'title'    => esc_html__( 'Enable', 'woocommerce-my-account' ),
                    'subtitle' => esc_html__( 'Enable this tab.', 'woocommerce-my-account' ),
                ),
                array(
                    'id'       => $tab . 'TabTitle',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Title', 'woocommerce-my-account' ),
                     'required' => array($tab . 'TabEnabled','equals','1'),
                ),
                array(
                    'id'       => $tab . 'TabMenuTitle',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Menu Title', 'woocommerce-my-account' ),
                    'required' => array($tab . 'TabEnabled','equals','1'),
                ),
                array(
                    'id'       => $tab . 'TabEndpoint',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Endpoint URL', 'woocommerce-my-account' ),
                    'subtitle'    => esc_html__( 'This should not contain spaces or special characters.', 'woocommerce-my-account' ),
                    'required' => array($tab . 'TabEnabled','equals','1'),
                ),
                array(
                    'id'       => $tab . 'TabCallback',
                    'type'     => 'select',
                    'options'  => array(
                        'editor' => esc_html__('Editor', 'woocommerce-my-account' ),
                        'link' => esc_html__('Link', 'woocommerce-my-account' ),
                        'contactForm7' => esc_html__('Contact 7 Form', 'woocommerce-my-account' ),
                        'function' => esc_html__('Function', 'woocommerce-my-account' ),
                        // 'products' => esc_html__('Show single Products', 'woocommerce-my-account' ),
                        'productsByCategory' => esc_html__('Show Products by category', 'woocommerce-my-account' ),
                        'productCategories' => esc_html__('Show Product Categories', 'woocommerce-my-account' ),
                        'cart' => esc_html__('Show Cart', 'woocommerce-my-account' ),
                        'orderTracking' => esc_html__('Show Order Tracking', 'woocommerce-my-account' ),
                        'myaccount' => esc_html__('Show My Account', 'woocommerce-my-account' ),
                        'recentProducts' => esc_html__('Show Recent Products', 'woocommerce-my-account' ),
                        'featuredProducts' => esc_html__('Show Featured Products', 'woocommerce-my-account' ),
                        'sales' => esc_html__('Show Sale Products', 'woocommerce-my-account' ),
                        'bestSelling' => esc_html__('Show Best Selling Products', 'woocommerce-my-account' ),
                        'topRated' => esc_html__('Show Top Rated Products', 'woocommerce-my-account' ),
                        'relatedProducts' => esc_html__('Show Related Products', 'woocommerce-my-account' ),
                    ),
                    'title'    => esc_html__( 'Callback', 'woocommerce-my-account' ),
                    'required' => array($tab . 'TabEnabled','equals','1'),
                ),
                // Callback types
                array(
                    'id'       => $tab . 'TabEditor',
                    'type'     => 'editor',
                    'title'    => esc_html__( 'Content Editor', 'woocommerce-my-account' ),
                    'required' => array($tab . 'TabCallback','equals','editor'),
                    'args'   => array(
                        'teeny'            => false,
                    )
                ),
                array(
                    'id'       => $tab . 'TabLink',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Link URL', 'woocommerce-my-account' ),
                    'required' => array($tab . 'TabCallback','equals','link'),
                ),
                array(
                    'id'     => $tab . 'TabContactForm7',
                    'type' => 'select',
                    'data' => 'posts',
                    'args' => array(
                        'post_type' => array('wpcf7_contact_form'), 
                        'posts_per_page' => -1
                    ),
                    'title' => esc_html__('Contact 7 Forms', 'woocommerce-my-account'), 
                    'subtitle' => esc_html__('Select the form you want to show.', 'woocommerce-my-account'), 
                    'required' => array($tab . 'TabCallback','equals','contactForm7'),
                ),
                array(
                    'id'       => $tab . 'TabFunction',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Function Name', 'woocommerce-my-account' ),
                    'subtitle' => esc_html__('Make sure a function with the name above is created in your child theme.', 'woocommerce-my-account'), 
                    'required' => array($tab . 'TabCallback','equals','function'),
                ),
                array(
                    'id'     =>$tab . 'TabProductsByCategory',
                    'type' => 'select',
                    'data' => 'categories',
                    'args' => array('taxonomy' => array('product_cat')),
                    'title' => esc_html__('Show Products by category', 'woocommerce-my-account'), 
                    'subtitle' => esc_html__('Select the category from where the products should be shown.', 'woocommerce-my-account'), 
                    'required' => array($tab . 'TabCallback','equals', 'productsByCategory'),
                ),
                array(
                    'id'     =>$tab . 'TabShowCategories',
                    'type' => 'select',
                    'data' => 'categories',
                    'args' => array('taxonomy' => array('product_cat')),
                    'multi' => true,
                    'title' => esc_html__('Show Categories', 'woocommerce-my-account'), 
                    'subtitle' => esc_html__('Select the products you want to show.', 'woocommerce-my-account'), 
                    'required' => array($tab . 'TabCallback','equals','productCategories'),
                ),
                array(
                    'id'     =>$tab . 'TabPerPage',
                    'type' => 'spinner',
                    'title' => esc_html__('Amount of products', 'woocommerce-my-account'), 
                    'subtitle' => esc_html__('Limit the number of products to be shown on e.g. related products callback.', 'woocommerce-my-account'), 
                    'default'  => '12',
                    'min'      => '1',
                    'step'     => '1',
                    'max'      => '99',
                    'required' => array($tab . 'TabCallback','equals','productsByCategory'),
                ),
                array(
                    'id'     =>$tab . 'TabColumns',
                    'type' => 'spinner',
                    'title' => esc_html__('Columns', 'woocommerce-my-account'), 
                    'subtitle' => esc_html__('Configure how many columns will be shown on e.g. related products callback.', 'woocommerce-my-account'), 
                    'default'  => '3',
                    'min'      => '1',
                    'step'     => '1',
                    'max'      => '99',
                    'required' => array($tab . 'TabCallback','equals','productsByCategory'),
                ),
                array(
                    'id'    => $tab . 'TabUserRoles',
                    'type'   => 'select',
                    'data'   => 'roles',
                    'title'  => esc_html__('Apply for User Roles', 'woocommerce-catalog-mode'),
                    'subtitle' => esc_html__('Select user roles, where this tab should appear.', 'woocommerce-catalog-mode'),
                    'multi'    => true,
                    'default'  => '',
                    'required' => array($tab . 'TabEnabled','equals','1'),
                ),
           )
        ) );
    }

    /*
     * <--- END SECTIONS
     */
