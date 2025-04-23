<?php
namespace App\Services;

use App\Models\Interval;
use Illuminate\Database\Eloquent\Builder;

class IntervalQueryService
{
    public function buildQuery(int $start, ?string $endOption)
    {
        if ($endOption !== null && strtolower($endOption) !== 'null' && $start > $endOption){
            list($start, $endOption) = array($endOption, $start);
        }
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
