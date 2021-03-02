<?php

namespace Database\Migrations;

use Engine\Packages\RawSQL\Facade as RawSQL;
use Tool\Engine\ITransaction;
use PDO;


class group_user_05_05_2020_02_00_43 implements ITransaction
{

    /**
     * Performs migration
     *
     */
    public static function commit()
    {
        RawSQL::query(
            'CREATE TABLE `group_user` (
                `id`        INT PRIMARY KEY AUTO_INCREMENT,
                `group_id`  INT,
                `user_id`   INT,
                FOREIGN KEY (`group_id`)    REFERENCES `groups`(`id`),
                FOREIGN KEY (`user_id`)     REFERENCES `users`(`id`)
            )')
            ->fetchAll();
    }

    /**
     * Revert migration
     *
     */
    public static function revert()
    {
        RawSQL::query('DROP TABLE `group_user`')
            ->fetchAll();
    }

}