<?php

namespace App\Models\Meals\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealsIngredients extends Model
{
    protected $connection = 'mysql';
    protected $table = 'mealsingredients';
    protected $primaryKey = 'MealIngId';
    public $timestamps = false;

    protected $fillable = [
        'MealId',
        'IngId',
        'Status',
    ];
}