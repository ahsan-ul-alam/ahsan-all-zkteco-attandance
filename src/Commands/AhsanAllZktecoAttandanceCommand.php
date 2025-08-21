<?php

namespace Ahsan\AllZktecoAttandance\Commands;

use Illuminate\Console\Command;

class AhsanAllZktecoAttandanceCommand extends Command
{
    public $signature = 'ahsan-all-zkteco-attandance';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
