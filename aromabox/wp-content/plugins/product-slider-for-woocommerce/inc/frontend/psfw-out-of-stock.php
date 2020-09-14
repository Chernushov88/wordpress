<?php
defined( 'ABSPATH' ) or die( "No script kiddies please!" );

global $wpdb;
$db_table_name = $wpdb->prefix . "postmeta";

$out_of_stock = $wpdb->get_results("SELECT * FROM $db_table_name  WHERE meta_key = '_stock_status' AND meta_value = 'outofstock'");
$out_of_stock_list = array();

if(!empty($out_of_stock)){
    foreach ($out_of_stock as $stock) {
        $out_of_stock_list[] = $stock->post_id;
    }
}