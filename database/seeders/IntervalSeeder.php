<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Interval;

class IntervalSeeder extends Seeder
{
    public function run(): void
    {
        Interval::factory()->count(10000)->create();
    }
}

