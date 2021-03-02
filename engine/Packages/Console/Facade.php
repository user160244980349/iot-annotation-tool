<?php

namespace Tool\Engine\Packages\Console;

use Engine\Packages\ServiceBus;

/**
 * Console.php
 *
 * Console decorator.
 */
class Facade
{

    /**
     * Run command.
     *
     * @access public
     * @param array $args - Command line arguments
     * @return void
     */
    public static function run(array $args): void
    {
        ServiceBus::instance()->get('console')->run($args);
    }

}
