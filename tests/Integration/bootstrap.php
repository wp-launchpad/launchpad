<?php
namespace RocketLauncher\Tests\Integration;

define( 'ROCKET_LAUNCHER__PLUGIN_ROOT', dirname( dirname( __DIR__ ) ) . DIRECTORY_SEPARATOR );
define( 'ROCKET_LAUNCHER__TESTS_FIXTURES_DIR', dirname( __DIR__ ) . '/Fixtures' );
define( 'ROCKET_LAUNCHER__TESTS_DIR', __DIR__ );
define( 'ROCKET_LAUNCHER__IS_TESTING', true );

// Manually load the plugin being tested.
tests_add_filter(
    'muplugins_loaded',
    function() {
        // Load the plugin.
        require ROCKET_LAUNCHER__PLUGIN_ROOT . '/rocket-launcher.php';
    }
);
