<?php
/**
 * Plugin Name: Launchpad
 * Description: Launchpad.
 * Version: 1.0.0
 * Requires at least: 5.5
 * Requires PHP: 7.1
 * Author: CrochetFeve0251
 * Licence: GPLv2 or later
 *
 * Text Domain: launchpad
 * Domain Path: languages
 *
 */

use function Launchpad\Dependencies\RocketLauncherCore\boot;

defined( 'ABSPATH' ) || exit;


require __DIR__ . '/inc/Dependencies/RocketLauncherCore/boot.php';

boot(__FILE__);
