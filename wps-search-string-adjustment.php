<?php
/**
 * Plugin Name: WPS Search String Adjustment
 * Plugin URI: https://www.netpad.gr
 * Description: WPS Search String Adjustment omitting special characters
 * Version: 1.0.0
 * Author: gtsiokos
 * Author URI: https://www.netpad.gr
 */

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

class Wps_Search_String_Adjustment {

	public static function init() {
		add_filter( 'woocommerce_product_search_request_search_query', array( __CLASS__, 'woocommerce_product_search_request_search_query' ) );
	}

	public static function woocommerce_product_search_request_search_query( $search_string ) {
		$special_characters = array( '.', '(', ')', '-' );
		$search_string = str_replace( $special_characters, '', $search_string );

		return $search_string;
	}
} Wps_Search_String_Adjustment::init();