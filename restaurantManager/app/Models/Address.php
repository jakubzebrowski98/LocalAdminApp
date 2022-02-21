<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $connection = 'mysql';
    protected $table = 'addresses';
    protected $primaryKey = 'UserId';
    public $timestamps = false;

    protected $fillable = [
        'UserId',
        'Address',
        'PostalCode',
        'City',
        'PhoneNumber',
    ];
}