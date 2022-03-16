<?php
/**
 * Plugin Name: Products
 * Plugin URI: http://webyfix.com
 * Description: Portfolio is Fully Responsive and Mobile Friendly portfolio for WordPress to display your portfolio work in Grid and Isotope Views.
 * Author: Webyfix
 * Version: 200.6.34
 * Author URI: https://webyfix.com
 * Tag: portfolio, portfolio plugin,filterable portfolio, portfolio gallery, portfolio display, portfolio slider, responsive portfolio, portfolio showcase, wp portfolio
 * Text Domain: tlp-portfolio
 * Domain Path: /languages
 */

$plugin_data = get_file_data( __FILE__, array( 'version' => 'Version' ), false );
define( 'TLP_PORTFOLIO_VERSION', $plugin_data['version'] );
define( 'TLP_PORTFOLIO_PLUGIN_PATH', dirname( __FILE__ ) );
define( 'TLP_PORTFOLIO_PLUGIN_ACTIVE_FILE_NAME', plugin_basename( __FILE__ ) );
define( 'TLP_PORTFOLIO_PLUGIN_URL', plugins_url( '', __FILE__ ) );
define( 'TLP_PORTFOLIO_LANGUAGE_PATH', dirname( plugin_basename( __FILE__ ) ) . '/languages' );

require( 'lib/init.php' );
