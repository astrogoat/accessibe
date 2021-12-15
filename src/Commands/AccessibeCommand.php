<?php

namespace Astrogoat\Accessibe\Commands;

use Illuminate\Console\Command;

class AccessibeCommand extends Command
{
    public $signature = 'accessibe';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
