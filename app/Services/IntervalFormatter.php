<?php
namespace App\Services;

use Illuminate\Support\Collection;

class IntervalFormatter
{
    public function formatForConsole(Collection $intervals): array
    {
        return $intervals->map(fn ($i) => [$i->start, $i->end ?? '∞'])->toArray();
    }
}
