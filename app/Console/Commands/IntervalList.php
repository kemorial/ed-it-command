<?php

namespace App\Console\Commands;

use App\Services\IntervalQueryService;
use App\Services\IntervalFormatter;
use Illuminate\Console\Command;

class IntervalList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
protected $signature = 'intervals:list {--start=} {--end=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'select all intervals which between --left and --right borders';

    /**
     * Execute the console command.
     */
    public function __construct(
        protected IntervalQueryService $queryService,
        protected IntervalFormatter $formatter
    ) {
        parent::__construct();
    }

    public function handle()
    {
        $start = $this->option('start');
        $end = $this->option('end');

        if ($start === null) {
            $this->error('The --start option is required.');
            return 1;
        }

        $intervals = $this->queryService->buildQuery($start, $end)->get();

        if ($intervals->isEmpty()) {
            $this->info('No intervals found.');
            return 0;
        }

        $this->info("Matching intervals:");
        $this->table(['Start', 'End'], $this->formatter->formatForConsole($intervals));
        return 0;
    }
}
