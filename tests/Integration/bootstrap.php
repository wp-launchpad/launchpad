<?php
namespace RocketLauncher\Tests\Integration;

define( 'ROCKET_LAUNCHER_PLUGIN_ROOT', dirname( dirname( __DIR__ ) ) . DIRECTORY_SEPARATOR );
define( 'ROCKET_LAUNCHER_TESTS_FIXTURES_DIR', dirname( __DIR__ ) . '/Fixtures' );
define( 'ROCKET_LAUNCHER_TESTS_DIR', __DIR__ );
define( 'ROCKET_LAUNCHER_IS_TESTING', true );

// Manually load the plugin being tested.
tests_add_filter(
    'muplugins_loaded',
    function() {
        // Load the plugin.
        require ROCKET_LAUNCHER_PLUGIN_ROOT . '/rocket-launcher.php';
    }
);
