<?php

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
    public function run()
    {
        if (app()->environment('production')) {
            throw new Exception("You can't run this seeder in production!");
        }

        $this->call(WeekSeeder::class);
    }
}
