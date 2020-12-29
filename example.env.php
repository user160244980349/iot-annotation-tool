<?php

define('ENV', [

    # Database credentials
    'db_driver'   => 'mysql',
    'db_address'  => 'localhost',
    'db_name'     => 'php_engine',
    'db_user'     => 'php_engine',
    'db_password' => 'secret',
    
    'migrations'      => __DIR__ . '/database/migrations',
    'migrations_list' => __DIR__ . '/database/migrations.php',
    'seeds'           => __DIR__ . '/database/seeds',
    'seeds_list'      => __DIR__ . '/database/seeds.php',

    'services' => __DIR__ . '/config/services.php',
    'commands' => __DIR__ . '/config/commands.php',

]);
