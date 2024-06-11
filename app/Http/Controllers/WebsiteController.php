<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function Acceuil(){
        return view("website.acceuil");
    }

    public function Presentation(){
        return view("website.presentation");
    }

    public function Produits (){
        $products=Product::all();
        return view("website.produit",compact("products"));
    }

    public function Contact(){
        return view("website.contact");
    }






}
