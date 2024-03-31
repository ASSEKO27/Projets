<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_line extends Model
{
    use HasFactory;
    protected $fillable=[
       'quantity',
       'price',
       'order_id',
       'product_id'

    ];


    //relation avec produit
    public function product(){
        return $this->belongsTo(Product::class);
    }
    //relation avec commende
    public function Order(){
        return $this->belongsTo(Order::class);
    }
}
