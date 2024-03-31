<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'number',
        'date',
        'status',
        'custumer_id'
    ];

    //relation avec client
    public function customers(){
        return $this->belongsTo(Customer::class);
    }
    //relation avec ligne de commende
    public function order_line(){
        return $this->hasMany(Order_line::class);
    }
    //relation avec payement
    public function payment(){
        return $this->hasMany(Payment::class);
    }
}

