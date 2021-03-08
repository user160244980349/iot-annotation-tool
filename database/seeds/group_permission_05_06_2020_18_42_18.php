<?php

namespace Database\Seeds;

use Engine\Packages\RawSQL\Facade as RawSQL;
use Tool\Engine\ITransaction;
use PDO;


/**
 * group_permission_05_06_2020_18_42_18.php
 *
 * Seeding for ...
 */
class group_permission_05_06_2020_18_42_18 implements ITransaction
{

    /**
     * Performs seeding
     *
     */
    public static function commit()
    {
        RawSQL::query(
            'INSERT INTO `group_permission` (
                `group_id`,
                `permission_id`
            ) VALUES
            (1, 1),
            (2, 2),
            (2, 3)')
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