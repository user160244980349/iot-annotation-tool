<?php

namespace Tool\Engine\Packages\Migration;


/**
 * Migration.php
 *
 * Command class to deploy RawSQL schemes.
 */
class Handler
{

    /**
     * Create tables.
     *
     * @access public
     * @param string $name - Migration`s name
     */
    public static function create(string $name): void
    {
        print('creating migration...\n');

        Facade::create($name);

        print("migration has been created.\n");
    }

    /**
     * Creates tables.
     *
     * @access public
     */
    public static function do(): void
    {
        print("setting up migrations...\n");

        Facade::do();
        
        print("migrations have been set up.\n");
    }

    /**
     * Drops tables.
     *
     * @access public
     */
    public static function undo(): void
    {
        print("reverting migrations...\n");

        Facade::undo();
        
        print("all migrations have been reverted.\n");
    }

    /**
     * Drops tables and up them again with seeding.
     *
     * @access public
     */
    public static function reset(): void
    {
        print("resetting migrations...\n");
        
        Facade::reset();

        print("all migrations have been reset.\n");
    }
    
}