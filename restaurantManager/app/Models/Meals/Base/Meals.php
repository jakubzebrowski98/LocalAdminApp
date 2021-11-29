<?php

namespace App\Models\Meals\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{
    protected $connection = 'mysql';
    protected $table = 'Meals';
    protected $primaryKey = 'MealId';
    public $timestamps = false;
    
    protected $fillable = [
        'MealId',
        'Name',
        'Price',
        'Status',
    ];

    public function getStatusAttribute($value)
    {
        if($value == 1){
            return $value = "Aktywny";
        }else{
            return $value = "Nieaktywny";
        }
    }
}