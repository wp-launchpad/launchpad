<?php

namespace PSR2Plugin\Engine\Activation;

interface ActivationInterface
{

    /**
     * Executes this method on plugin activation
     *
     * @return void
     */
    public function activate();
}