<?php

namespace Database\Seeds;

use Engine\Packages\RawSQL\Facade as RawSQL;
use Tool\Engine\ITransaction;
use PDO;


/**
 * group_user_05_06_2020_18_42_20.php
 *
 * Seeding for ...
 */
class group_user_05_06_2020_18_42_20 implements ITransaction
{

    /**
     * Performs seeding
     *
     */
    public static function commit()
    {
        RawSQL::query(
            'INSERT INTO `group_user` (
                `group_id`,
                `user_id`
            ) VALUES
            (1, 1),
            (2, 1),
            (1, 2),
            (1, 3),
            (1, 4)')
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