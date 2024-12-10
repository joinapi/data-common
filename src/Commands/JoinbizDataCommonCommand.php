<?php

namespace Joinbiz\Data\Models\Common\Commands;

use Illuminate\Console\Command;

class JoinbizDataCommonCommand extends Command
{
    public $signature = 'data-common';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
