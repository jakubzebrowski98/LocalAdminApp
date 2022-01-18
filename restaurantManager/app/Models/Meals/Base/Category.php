<?php

namespace App\Models\Meals\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $connection = 'mysql';
    protected $table = 'meals_category';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
