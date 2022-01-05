<?php

namespace App\Models\Meals\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{
    protected $connection = 'mysql';
    protected $table = 'meals';
    protected $primaryKey = 'MealId';
    public $timestamps = false;

    const ACTIVE = 1;
    const INACTIVE = 0;

    protected $fillable = [
        'Name',
        'Price',
        'Status',
    ];

    public function getStatusNameAttribute()
    {
        $status = $this->Status;
        if($status == 1){
            return "Aktywny";
        }else{
            return "Nieaktywny";
        }
    }
}
