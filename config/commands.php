<?php

use Tool\Engine\Packages\Console\Command;
use Tool\Engine\Packages\Migration\Handler as Migration;
use Tool\Engine\Packages\Seed\Handler as Seed;
use Engine\Config;

Config::set('commands', [

    # Migrations & seeds
    new Command('migrations.create', [Migration::class, 'create']),
    new Command('migrations.do', [Migration::class, 'do']),
    new Command('migrations.undo', [Migration::class, 'undo']),
    new Command('migrations.reset', [Migration::class, 'reset']),
    new Command('seeds.create', [Seed::class, 'create']),
    new Command('seeds.do', [Seed::class, 'do'])

]);
