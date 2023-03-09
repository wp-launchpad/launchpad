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

use function RocketLauncher\Dependencies\RocketLauncherCore\boot;

defined( 'ABSPATH' ) || exit;


require __DIR__ . '/inc/Dependencies/RocketLauncherCore/boot.php';

boot(__FILE__);
