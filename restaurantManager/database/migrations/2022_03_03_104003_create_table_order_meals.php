<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrderMeals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('order_meals', function (Blueprint $table) {
             $table->id('Id');
             $table->integer('OrderId');
             $table->integer('MealId');
             $table->dateTime('OrderDate');
             $table->integer('Status');
             $table->integer('Quantity');

         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('order_meals');
    }
}