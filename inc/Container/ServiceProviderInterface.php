<?php

namespace RocketLauncher\Container;

use RocketLauncher\Dependencies\League\Container\ServiceProvider\ServiceProviderInterface as LeagueServiceProviderInterface;


interface ServiceProviderInterface extends LeagueServiceProviderInterface
{
    /**
     * Return IDs provided by the Service Provider.
     *
     * @return string[]
     */
    public function declares(): array;

    /**
     * Return IDs from front subscribers.
     *
     * @return string[]
     */
    public function get_front_subscribers(): array;

    /**
     * Return IDs from admin subscribers.
     *
     * @return string[]
     */
    public function get_admin_subscribers(): array;

    /**
     * Return IDs from common subscribers.
     *
     * @return string[]
     */
    public function get_common_subscribers(): array;
}
