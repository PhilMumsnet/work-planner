<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeeksTable extends Migration
{
    public function up()
    {
        Schema::create('weeks', function (Blueprint $table) {
            // ID
            $table->id();

            // Relationships
            // ...

            // Data
            $table->date('start_date')->unique();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('weeks');
    }
}
