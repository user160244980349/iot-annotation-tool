<?php

use Tool\Engine\Command;
use Tool\Engine\CommandHandlers\Migration;
use Tool\Engine\CommandHandlers\Seed;

return [

    # Migrations & seeds
    new Command('migrations.create', [Migration::class, 'create']),
    new Command('migrations.do', [Migration::class, 'do']),
    new Command('migrations.undo', [Migration::class, 'undo']),
    new Command('migrations.reset', [Migration::class, 'reset']),
    new Command('seeds.create', [Seed::class, 'create']),
    new Command('seeds.do', [Seed::class, 'do'])

];
