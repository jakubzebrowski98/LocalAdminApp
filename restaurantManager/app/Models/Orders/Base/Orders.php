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

    const ORDERTYPES = [        
        '1' => 'Na miejscu',
        '2' => 'Na wynos'
    ];
    
    protected $fillable = [
        'OrderNo',
        'OrderPrice',
        'Status',
        'OrderType',
        'OrderDate',
        'EndDate',
        'UserId',
    ];

    public function getStatusNameAttribute()
    {
        $statuses = OrderStatus::pluck('Name','id');

        return $statuses[$this->Status];
    }

    public function getOrderTypeNameAttribute()
    {
        return self::ORDERTYPES[$this->OrderType];
    }

}