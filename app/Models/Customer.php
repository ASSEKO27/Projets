<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=[
        'firstname',
        'lastname',
        'tel',
        'email',
        'password',
        'adress'
    ];
    // relation avec commende
    public function orders(){
        return $this->hasMany(Order::class);
    }
}

