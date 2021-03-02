<?php

namespace Database\Seeds;

use Engine\Packages\RawSQL\Facade as RawSQL;
use Tool\Engine\ITransaction;
use Engine\Packages\ServiceBus;
use PDO;


/**
 * users_05_06_2020_17_17_34.php
 *
 * Seeding for ...
 */
class users_05_06_2020_17_17_34 implements ITransaction
{

    /**
     * Performs seeding
     *
     */
    public static function commit()
    {
        RawSQL::query(
            'INSERT INTO `users` (
                `name`,
                `email` 
            ) VALUES
            (\'Pete\', \'pete@box.com\'),
            (\'Bob\', \'bob@box.com\'),
            (\'Steve\', \'steve@box.com\'),
            (\'Maria\', \'maria@box.com\')')
            ->fetchAll();
    }

    /**
     * Revert all seeds
     *
     */
    public static function revert()
    {
        /** nothing */
    }
}