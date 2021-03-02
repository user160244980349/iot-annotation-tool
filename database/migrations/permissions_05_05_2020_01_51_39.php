<?php

namespace Database\Migrations;

use Engine\Packages\RawSQL\Facade as RawSQL;
use Tool\Engine\ITransaction;
use PDO;


class permissions_05_05_2020_01_51_39 implements ITransaction
{

    /**
     * Performs migration
     *
     */
    public static function commit()
    {
        RawSQL::query(
            'CREATE TABLE `permissions` (
                `id`        INT PRIMARY KEY AUTO_INCREMENT,
                `for`       VARCHAR(255)
            )')
            ->fetchAll();
    }

    /**
     * Revert migration
     *
     */
    public static function revert()
    {
        RawSQL::query('DROP TABLE `permissions`')
            ->fetchAll();
    }

}