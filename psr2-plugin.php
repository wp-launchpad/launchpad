<?php
/**
 * Plugin Name: PSR2 Plugin
 * Description: PSR2 Plugin.
 * Version: 1.0.0
 * Requires at least: 5.5
 * Requires PHP: 7.1
 * Author: CrochetFeve0251
 * Licence: GPLv2 or later
 *
 * Text Domain: psr2-plugin
 * Domain Path: languages
 *
 */

defined( 'ABSPATH' ) || exit;

define( 'PSR2_PLUGIN_VERSION',               '1.0.0' );
define( 'PSR2_PLUGIN_WP_VERSION',            '5.5' );
define( 'PSR2_PLUGIN_WP_VERSION_TESTED',     '5.9' );
define( 'PSR2_PLUGIN_PHP_VERSION',           '7.1' );
define( 'PSR2_PLUGIN_FILE',                  __FILE__ );
define( 'PSR2_PLUGIN_PATH',                  realpath( plugin_dir_path( PSR2_PLUGIN_FILE ) ) . '/' );
define( 'PSR2_PLUGIN_INC_PATH',              realpath( PSR2_PLUGIN_PATH . 'inc/' ) . '/' );
define( 'PSR2_PLUGIN_TEMPLATE_PATH',         realpath( PSR2_PLUGIN_PATH . 'templates/' ) . '/' );


require PSR2_PLUGIN_INC_PATH . 'main.php';