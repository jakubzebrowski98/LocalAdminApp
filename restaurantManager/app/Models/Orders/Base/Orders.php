<?php

namespace App\Models\Orders\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $connection = 'mysql';
    protected $table = 'Orders';
    protected $primaryKey = 'OrderId';
    public $timestamps = false;
    
    protected $fillable = [
        'OrderId',
        'OrderNo',
        'User',
        'Phone',
        'Name',
        'Address',
        'Postal',
        'City',
        'Details',
        'OrderPrice',
        'Status',
        'OrderDate',
        'EndDate',
    ];
}