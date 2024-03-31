<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    //methode de relation avec produits
    public function produits(){
        return $this->hasMany(Product::class);
    }
}
