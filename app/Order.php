<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class);
    }


    public static function invoiceNumber()
    {
        $lastOrder = self::orderBy('created_at', 'desc')->first();
        if (!$lastOrder) {
            $number = 0;
        } else {
            $number = explode('IMS-', $lastOrder->invoice_no)[1];
        }
        return sprintf('IMS-%010d', (int)$number + 1);
    }

}
