<?php

namespace PSR2Plugin;

use PSR2Plugin\Dependencies\League\Container\Container;
use PSR2Plugin\Engine\Activation\Activation;
use PSR2Plugin\Engine\Deactivation\Deactivation;

defined( 'ABSPATH' ) || exit;

// Composer autoload.
if ( file_exists( PSR2_PLUGIN_PATH . 'vendor/autoload.php' ) ) {
    require PSR2_PLUGIN_PATH . 'vendor/autoload.php';
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
    define( 'PSR2_PLUGIN_PLUGIN_NAME', 'PS2 plugin' );
    define( 'PSR2_PLUGIN_PLUGIN_SLUG', sanitize_key( PSR2_PLUGIN_PLUGIN_NAME ) );

    $wp_rocket = new Plugin(
        new Container()
    );
    $wp_rocket->load(PSR2_PLUGIN_PLUGIN_SLUG, PSR2_PLUGIN_TEMPLATE_PATH );

    // Call defines and functions.
}
add_action( 'plugins_loaded',  __NAMESPACE__ . '\\plugin_init' );

register_deactivation_hook( PSR2_PLUGIN_FILE, [ Deactivation::class, 'deactivate_plugin' ] );
register_activation_hook( PSR2_PLUGIN_FILE, [ Activation::class, 'activate_plugin' ] );