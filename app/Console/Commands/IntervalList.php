<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class IntervalList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'intervals:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'select all interval which between --left and --right borders';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
