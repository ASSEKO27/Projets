<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'price',
        'photos1',
        'photos2',
        'category_id'

    ];

    //methode de relationn avec categories
    public function category(){
        return $this->belongsTo(category::class);
    }
    //relation avec ligne de commende
    public function order_line(){
        return $this->hasMany(Order_line::class);
    }
}
