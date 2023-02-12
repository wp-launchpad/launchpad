<?php
namespace PSR2Plugin\Tests\Integration;

define( 'PSR2_PLUGIN_PLUGIN_ROOT', dirname( dirname( __DIR__ ) ) . DIRECTORY_SEPARATOR );
define( 'PSR2_PLUGIN_TESTS_FIXTURES_DIR', dirname( __DIR__ ) . '/Fixtures' );
define( 'PSR2_PLUGIN_TESTS_DIR', __DIR__ );
define( 'PSR2_PLUGIN_IS_TESTING', true );

// Manually load the plugin being tested.
tests_add_filter(
    'muplugins_loaded',
    function() {
        // Load the plugin.
        require PSR2_PLUGIN_PLUGIN_ROOT . '/psr2-plugin.php';
    }
);