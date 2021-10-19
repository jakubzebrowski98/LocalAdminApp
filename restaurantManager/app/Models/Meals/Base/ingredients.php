<?php

namespace App\Models\Meals\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredients extends Model
{    
    protected $connection = 'mysql';
    protected $table = 'ingredients';
    protected $primaryKey = 'IngId';

    protected $fillable = [
        'IngId',
        'IngName',
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
