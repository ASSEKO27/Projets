<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=[
        'date',
        'amount',
        'payment method',
        'order_id'
    ];



    // relation avec commende
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
