<?php

namespace Tool\Engine\Packages\Seed;

use Engine\Packages\ServiceBus;


/**
 * Application.php
 *
 * Decorator class for application.
 */
class Facade
{

    /**
     * Application run method.
     *
     * @access public
     * @return void
     */
    public static function create(string $name): void
    {
        ServiceBus::instance()->get('seed')->create($name);
    }

    /**
     * Application run method.
     *
     * @access public
     * @return void
     */
    public static function do(): void
    {
        ServiceBus::instance()->get('seed')->do();
    }

}
