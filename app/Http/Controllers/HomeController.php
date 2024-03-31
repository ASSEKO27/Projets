<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Acceuil(){
        return view('website.acceuil');
    }
    public function Contact(){
        return view('website.contact');
    }
    public function Presentation(){
        return view('website.presentation');
    }
    public function Produits(){
        return view(' website.produit');
    }

}
