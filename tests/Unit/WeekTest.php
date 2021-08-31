<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WeekTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_weeks_table_has_the_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('weeks', [
                'id', 'start_date', 'created_at', 'updated_at',
            ])
        );
    }
}
