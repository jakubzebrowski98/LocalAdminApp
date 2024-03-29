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
         Schema::create('meals', function (Blueprint $table) {
             $table->id('MealId');
             $table->text('Name');
             $table->text('Description')->nullable();
             $table->decimal('Price');
             $table->integer('Status');
             $table->integer('Category');
             $table->text('Photo')->nullable();

         });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meals');
    }
}
