<?php

use Tool\Engine\Packages\Console\Command;
use Tool\Engine\Packages\Migration\Facade as Migration;
use Tool\Engine\Packages\Seed\Facade as Seed;
use Engine\Config;

Config::set('commands', [

    # Migrations & seeds
    new Command('migrations.create', [Migration::class, 'create']),
    new Command('migrations.do', [Migration::class, 'do']),
    new Command('migrations.undo', [Migration::class, 'undo']),
    new Command('seeds.create', [Seed::class, 'create']),
    new Command('seeds.do', [Seed::class, 'do'])

]);
