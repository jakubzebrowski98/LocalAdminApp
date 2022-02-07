<?php

namespace App\Models\Orders\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMeals extends Model
{
    protected $connection = 'mysql';
    protected $table = 'order_meals';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'MealId',
        'OrderDate',
        'Status',
        'OrderId',
        'Quantity',
    ];
}
