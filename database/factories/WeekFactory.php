<?php

namespace Database\Factories;

use App\Models\Week;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeekFactory extends Factory
{
    /** @var string */
    protected $model = Week::class;

    public function definition(): array
    {
        return [
            'start_date' => now(),
        ];
    }
}
