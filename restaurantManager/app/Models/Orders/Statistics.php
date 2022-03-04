<?php

namespace App\Models\Orders;

use App\Models\Orders\Base\Orders;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    public static function getAll()
    {
        $last = Orders::get();
        return $last->count();
    }

    public static function getLastMounth()
    {
        $last = Orders::whereDate('OrderDate','>=', now()->subDays(30))->get();
        return $last->count();
    }

    public static function getLastWeek()
    {
        $last = Orders::whereDate('OrderDate','>=', now()->subDays(7))->get();
        return $last->count();
    }

    public static function getToday()
    {
        $last = Orders::whereDate('OrderDate', today())->get();
        return $last->count();
    }

    public static function getTotalIncome()
    {
        return Orders::sum('OrderPrice');
    }

    public static function getLastMounthIncome()
    {
        return Orders::where('OrderDate','>=', now()->subDays(30))->sum('OrderPrice');
    }

    public static function getLastWeekIncome()
    {
        return Orders::where('OrderDate','>=', now()->subDays(7))->sum('OrderPrice');
    }

    public static function getTodayIncome()
    {
        return Orders::whereDate('OrderDate', today())->sum('OrderPrice');
    }
    
}
