<?php
/**
 * Plugin Name: Save and Share Cart for WooCommerce - Revised
 * Plugin URI: http://wc-cart.com/
 * Description: A WooCommerce plugin to share cart on different social media platforms.
 * Version: 2.0.0
 * Author: Ankit Gade
 * Author URI: https://sharethingz.com/
 * Text Domain: wcssc
 * Domain Path: /i18n/languages/
 *
 * @package WooCommerce
 */

namespace Ankit\WCSSC;

if( ! defined( 'ABSPATH' ) ) {
	wp_die( __( 'This operation is not allowed', 'wcssc' ) );
}

define( 'WCSSC_BASE', dirname(__FILE__) );
define( 'WCSSC_BASE_FILE', __FILE__ );
define( 'WCSSC_BASE_URL', plugins_url( basename( dirname(__FILE__) ) ) );
define( 'WCSSC_ASSETS_BUILD', WCSSC_BASE_URL . '/assets/js/build' );
define( 'WCSSC_ASSET_MANIFEST', WCSSC_BASE . '/assets/js/build/asset-manifest.json' );

require WCSSC_BASE . '/vendor/autoload.php';

$saveCart = new SaveShareCart();