<?php

namespace App\Models\Meals\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{
    protected $connection = 'mysql';
    protected $table = 'Meals';
    protected $primaryKey = 'MealsId';
}
