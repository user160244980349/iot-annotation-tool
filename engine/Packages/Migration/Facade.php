<?php

namespace Tool\Engine\Packages\Migration;

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
        ServiceBus::instance()->get('migration')->create($name);
    }

    /**
     * Application run method.
     *
     * @access public
     * @return void
     */
    public static function do(): void
    {
        ServiceBus::instance()->get('migration')->do();
    }

    /**
     * Application run method.
     *
     * @access public
     * @return void
     */
    public static function undo(): void
    {
        ServiceBus::instance()->get('migration')->undo();
    }

    /**
     * Application run method.
     *
     * @access public
     * @return void
     */
    public static function reset(): void
    {
        ServiceBus::instance()->get('migration')->reset();
    }

}
