<?php

namespace Database\Seeds;

use Engine\Packages\RawSQL\Facade as RawSQL;
use Tool\Engine\ITransaction;
use PDO;


/**
 * permissions_05_06_2020_18_42_13.php
 *
 * Seeding for ...
 */
class permissions_05_06_2020_18_42_13 implements ITransaction
{

    /**
     * Performs seeding
     *
     */
    public static function commit()
    {
        RawSQL::query(
            'INSERT INTO `permissions` (
                `for`
            ) VALUES
            (\'visit-home\'),
            (\'manage-bp\'),
            (\'manage-groups\'),
            (\'manage-products\')')
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