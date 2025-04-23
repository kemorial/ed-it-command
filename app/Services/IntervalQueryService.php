<?php
namespace App\Services;

use App\Models\Interval;
use Illuminate\Database\Eloquent\Builder;

class IntervalQueryService
{
    public function buildQuery(int $start, ?string $endOption)
    {
        $query = Interval::where('start', '>=', $start);

        if ($endOption !== null) {
            if (strtolower($endOption) === 'null') {
                $query->whereNull('end');
            } else {
                $query->where(function ($q) use ($endOption) {
                    $q->whereNotNull('end')->where('end', '<=', $endOption);
                });
            }
        }

        return $query->orderBy('start');
    }
}
