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
        'Description',
        'Category'
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

    public function getCategoryNameAttribute()
    {
        $category = $this->Category;
        // if($category == 1){
        //     return "Dania główne";
        // }
        // if($category == 2){
        //     return "Przystawki";
        // }
        // if($category == 3){
        //     return "Napoje";
        // }
        // if($category == 4){
        //     return "Zupy";
        // }
        // if($category == 5){
        //     return "Zestawy";
        // }
        // if($category == 6){
        //     return "Desery";
        // }
        // else {
        //     return 'Nie podano';
        // }
    }
}
