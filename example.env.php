<?php

use Engine\Config;

Config::set('env', [

    # Debug prints
    'debug' => true,

    # Database credentials
    'db_driver'   => 'mysql',
    'db_address'  => 'localhost',
    'db_name'     => 'php_engine',
    'db_user'     => 'php_engine',
    'db_password' => 'secret',

    'migrations'      => __DIR__ . '/database/migrations',
    'seeds'           => __DIR__ . '/database/seeds'

]);
