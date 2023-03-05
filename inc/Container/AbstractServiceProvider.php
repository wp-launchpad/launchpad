<?php

namespace RocketLauncher\Container;

use RocketLauncher\Dependencies\League\Container\ServiceProvider\AbstractServiceProvider as LeagueServiceProvider;

abstract class AbstractServiceProvider extends LeagueServiceProvider implements ServiceProviderInterface {

    /**
     * Return IDs provided by the Service Provider.
     *
     * @return string[]
     */
    public function declares(): array {
        return [];
    }

    /**
     * Override the logic from the provides method.
     *
     * @param string $alias Alias to check.
     *
     * @return bool
     */
    public function provides(string $alias): bool
    {

        if(count($this->provides) === 0) {
            $this->provides = array_merge($this->declares(), $this->get_front_subscribers(), $this->get_common_subscribers(), $this->get_admin_subscribers());
        }

        return parent::provides($alias);
    }

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
