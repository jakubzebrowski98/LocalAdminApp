<?php

namespace App\Models\Orders\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $connection = 'mysql';
    protected $table = 'orders';
    protected $primaryKey = 'OrderId';
    public $timestamps = false;
    
    protected $fillable = [
        'OrderNo',
        'OrderPrice',
        'Status',
        'OrderDate',
        'EndDate',
        'UserId',
    ];

    public function getStatusNameAttribute()
    {
        $statuses = OrderStatus::pluck('Name','id');

        return $statuses[$this->Status];
    }
}