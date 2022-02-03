<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('meals', function (Blueprint $table) {
        //     $table->id('MealId');
        //     $table->string('Name');
        //     $table->string('Description');
        //     $table->string('password');
        //     $table->string('password');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('meals');
    }
}
