<?php

namespace Tool\Engine\Packages\Console;

/**
 * Command.php
 *
 * Command class for console interaction.
 */
class Command
{

    /**
     * Name of command.
     *
     * @access public
     * @var string
     */
    public string $name;

    /**
     * Controller.
     *
     * @access public
     * @var array
     */
    public array $controller;

    /**
     * Command constructor.
     *
     * @access public
     * @param string $name - Name of command
     * @param array $controller - Controller
     * @return void
     */
    public function __construct(string $name, 
                                array $controller)
    {
        $this->name = $name;
        $this->controller = $controller;
    }


    /**
     * Route constructor.
     *
     * @access public
     * @param string $name - Name of command
     * @return bool
     */
    public function test(string $name): bool
    {
        if ($this->name == $name) {
            return true;
        }
        return false;
    }

    /**
     * Execution of command.
     *
     * @access public
     * @param array $controller - Controller
     * @param array $args - Arguments
     * @return void
     */
    public function execute($args): void
    {
        forward_static_call($this->controller, ...$args);
    }
}
