<?php

namespace AlexManase\AlexManase\Utils\Commands;

use Illuminate\Console\Command;

class AlexManase\UtilsCommand extends Command
{
    public $signature = 'utils';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
