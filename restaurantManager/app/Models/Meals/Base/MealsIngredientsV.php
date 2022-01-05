<?php

namespace App\Models\Meals\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealsIngredientsV extends Model
{
    protected $connection = 'mysql';
    protected $table = 'mealsingredientsv';
    protected $primaryKey = 'MealIngId';
    public $timestamps = false;

    protected $fillable = [
        'MealId',
        'Name',
        'IngId',
        'IngName',
        'Status',
    ];
}