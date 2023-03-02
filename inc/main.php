<?php

namespace RocketLauncher;

use RocketLauncher\Dependencies\League\Container\Container;
use RocketLauncher\Engine\Activation\Activation;
use RocketLauncher\Engine\Deactivation\Deactivation;

defined( 'ABSPATH' ) || exit;

// Composer autoload.
if ( file_exists( ROCKET_LAUNCHER__PATH . 'vendor/autoload.php' ) ) {
    require ROCKET_LAUNCHER__PATH . 'vendor/autoload.php';
}

/**
 * Tell WP what to do when plugin is loaded.
 *
 * @since 1.0
 */
function plugin_init() {
    // Nothing to do if autosave.
    if ( defined( 'DOING_AUTOSAVE' ) ) {
        return;
    }

    // Last constants.
    define( 'ROCKET_LAUNCHER__PLUGIN_NAME', 'PS2 plugin' );
    define( 'ROCKET_LAUNCHER__PLUGIN_SLUG', sanitize_key( ROCKET_LAUNCHER__PLUGIN_NAME ) );

    $wp_rocket = new Plugin(
        new Container()
    );
    $wp_rocket->load(ROCKET_LAUNCHER__PLUGIN_SLUG, ROCKET_LAUNCHER__TEMPLATE_PATH );

    // Call defines and functions.
}
add_action( 'plugins_loaded',  __NAMESPACE__ . '\\plugin_init' );

register_deactivation_hook( ROCKET_LAUNCHER__FILE, [ Deactivation::class, 'deactivate_plugin' ] );
register_activation_hook( ROCKET_LAUNCHER__FILE, [ Activation::class, 'activate_plugin' ] );
