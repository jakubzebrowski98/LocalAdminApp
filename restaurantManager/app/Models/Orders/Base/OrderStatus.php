<?php

namespace App\Models\Orders\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    protected $connection = 'mysql';
    protected $table = 'order_statuses';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public static function getArray(){
        return self::pluck('Name', 'id');
    }
}
