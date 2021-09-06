<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Week;
use Illuminate\Database\Seeder;

class WeekSeeder extends Seeder
{
    const WEEKS_IN_YEAR = 52;

    public function run()
    {
        $date = Carbon::parse('5th Oct 2021');

        for ($i = 0; $i < self::WEEKS_IN_YEAR; ++$i) {
            Week::factory()->create(['start_date' => $date]);
            $date = $date->addWeeks(1);
        }
    }
}
