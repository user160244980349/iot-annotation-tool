<?php

use Engine\Config;

Config::set('services', [
    
    Engine\Packages\RawSQL\RawSQLService::class,
    Tool\Engine\Packages\Console\ConsoleService::class,
    Tool\Engine\Packages\Migration\MigrationService::class,
    Tool\Engine\Packages\Seed\SeedService::class,

]);
