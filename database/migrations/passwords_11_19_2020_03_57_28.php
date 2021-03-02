<?php

namespace Database\Migrations;

use Engine\Packages\RawSQL\Facade as RawSQL;
use Tool\Engine\ITransaction;
use PDO;


/**
 * passwords_11_19_2020_03_57_28.php
 *
 * Migration for ...
 */
class passwords_11_19_2020_03_57_28 implements ITransaction
{
    
    /**
     * Performs migration
     *
     */
    public static function commit() {
        RawSQL::query(
            'CREATE TABLE `passwords` (
                `id`     INT PRIMARY KEY DEFAULT 0,
                `value`  VARCHAR(255) NOT NULL,
                FOREIGN KEY (`id`) REFERENCES `users`(`id`)
            )')
            ->fetchAll();
    }
    
    /**
     * Revert migration
     *
     */
    public static function revert() {
        RawSQL::query('DROP TABLE `passwords`')
            ->fetchAll();
    }
}