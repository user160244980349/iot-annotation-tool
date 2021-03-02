<?php

namespace Tool\Engine\Packages\Console;

use Engine\Config;

/**
 * Console.php
 *
 * Provides console interface for application.
 */
class ConsoleService
{

    /**
     * Alias for service.
     *
     * @access public
     * @var string
     */
    static public string $alias = 'console';

    /**
     * Alias for service.
     *
     * @access public
     * @var string
     */
    private array $_commands;

    /**
     * ServiceBus services registration.
     *
     * @access public
     * @return ServiceBus
     */
    public function __construct()
    {
        $this->_commands = Config::get('commands');
    }

    /**
     * Run command.
     *
     * @access public
     * @param array $args - Command prompt arguments
     * @return void
     */
    public function run(array $args): void
    {
        array_shift($args);
        $alias = $args[0];
        array_shift($args);

        foreach ($this->_commands as $command) {
            if ($command->test($alias)) {
                $command->execute($args);
            }
        }
    }

}
