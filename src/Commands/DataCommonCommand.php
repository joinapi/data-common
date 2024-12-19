<?php

namespace Commands;

use Illuminate\Console\Command;

class DataCommonCommand extends Command
{
    public $signature = 'data-common';

    public $description = 'DataCommonCommand command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
