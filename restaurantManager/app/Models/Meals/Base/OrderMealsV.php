<?php

namespace App\Models\Meals\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMealsV extends Model
{
    protected $connection = 'mysql';
    protected $table = 'order_mealsV';
    protected $primaryKey = 'Id';
    public $timestamps = false;
}
