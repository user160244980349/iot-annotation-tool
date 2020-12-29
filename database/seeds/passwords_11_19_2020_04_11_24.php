<?php

namespace Database\Seeds;

use Engine\ITransaction;
use Engine\Decorators\RawSQL;

/**
 * passwords_11_19_2020_04_11_24.php
 *
 * Seeding for ...
 */
class passwords_11_19_2020_04_11_24 implements ITransaction
{
    
    /**
     * Performs seeding
     *
     */
    public static function commit() {
        $password = md5(md5('123'));
        RawSQL::fetch(
            "INSERT INTO `passwords` (
                `id`, `value`
            ) VALUES
            (1, '$password'),
            (2, '$password'),
            (3, '$password'),
            (4, '$password')"
        );
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