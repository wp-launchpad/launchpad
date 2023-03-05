<?php

namespace RocketLauncher\Container;

use RocketLauncher\Dependencies\League\Container\ServiceProvider\AbstractServiceProvider as LeagueServiceProvider;

abstract class AbstractServiceProvider extends LeagueServiceProvider implements ServiceProviderInterface {

    /**
     * Return IDs from front subscribers.
     *
     * @return string[]
     */
    public function get_front_subscribers(): array {
        return [];
    }

    /**
     * Return IDs from admin subscribers.
     *
     * @return string[]
     */
    public function get_admin_subscribers(): array {
        return [];
    }

    /**
     * Return IDs from common subscribers.
     *
     * @return string[]
     */
    public function get_common_subscribers(): array {
        return [];
    }

}