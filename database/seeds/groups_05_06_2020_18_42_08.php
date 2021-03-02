<?php

namespace Database\Seeds;

use Engine\Packages\RawSQL\Facade as RawSQL;
use Tool\Engine\ITransaction;
use PDO;


/**
 * groups_05_06_2020_18_42_08.php
 *
 * Seeding for ...
 */
class groups_05_06_2020_18_42_08 implements ITransaction
{

    /**
     * Performs seeding
     *
     */
    public static function commit()
    {
        RawSQL::query(
            'INSERT INTO `groups` (
                `name`
            ) VALUES
            (\'Authenticated\'),
            (\'Administrator\')')
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