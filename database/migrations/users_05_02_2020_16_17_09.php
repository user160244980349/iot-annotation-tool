<?php

namespace Database\Migrations;

use Engine\Packages\RawSQL\Facade as RawSQL;
use Tool\Engine\ITransaction;
use PDO;


class users_05_02_2020_16_17_09 implements ITransaction
{

    /**
     * Performs migration
     *
     */
    public static function commit()
    {
        RawSQL::query(
            'CREATE TABLE `users` (
                `id`        INT PRIMARY KEY AUTO_INCREMENT,
                `name`      VARCHAR(255) UNIQUE,
                `email`     VARCHAR(255) UNIQUE NOT NULL
            )')
            ->fetchAll();
    }

    /**
     * Revert migration
     *
     */
    public static function revert()
    {
        RawSQL::query('DROP TABLE `users`')
            ->fetchAll();
    }

}