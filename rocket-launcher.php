<?php
/**
 * Plugin Name: Rocket Launcher
 * Description: Rocket Launcher.
 * Version: 1.0.0
 * Requires at least: 5.5
 * Requires PHP: 7.1
 * Author: CrochetFeve0251
 * Licence: GPLv2 or later
 *
 * Text Domain: rocket-launcher
 * Domain Path: languages
 *
 */

defined( 'ABSPATH' ) || exit;

define( 'ROCKET_LAUNCHER_VERSION',               '1.0.0' );
define( 'ROCKET_LAUNCHER_FILE',                  __FILE__ );
define( 'ROCKET_LAUNCHER_PATH',                  realpath( plugin_dir_path( ROCKET_LAUNCHER_FILE ) ) . '/' );
define( 'ROCKET_LAUNCHER_INC_PATH',              realpath( ROCKET_LAUNCHER_PATH . 'inc/' ) . '/' );
define( 'ROCKET_LAUNCHER_TEMPLATE_PATH',         realpath( ROCKET_LAUNCHER_PATH . 'templates/' ) . '/' );


require ROCKET_LAUNCHER_INC_PATH . 'main.php';
