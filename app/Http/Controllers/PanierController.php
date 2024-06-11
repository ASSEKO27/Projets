<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
   public function panier(){
    //session()->put("panier",[]);
    $products=[];
    if(session()->has('panier')){
    $products=session()->get("panier");
    }
    return view("website.panier",compact("products"));
   }

   public function delprodpanier($indice){

    $products=session()->get("panier");
    //dd($products);
    //supprimer un produit du panier
    unset($products[$indice]);
    session()->put("panier",$products);
    return view("website.panier",compact("products"));
   }

   public function viderpanier(){
    session()->put("panier",[]);
    return redirect()->back();
   }



   public function addToCart(Request $request){
    // recupérer les infos du produit
    $id=$request->ID;
    $name=$request->name;
    $photos1=$request->photos1;
    $price=$request->price;
    $qty=1;

    //verifier si la variable panier existe ou pas
    //sinon on l'initialise
    if(!session()->has("panier")){
        session()->put('panier',[]);
    }

    //ajouter un produit dans la session
    session()->push('panier',["id"=>$id,"name"=>$name,"photos1"=>$photos1,"price"=>$price,"qty"=>$qty]);

    return redirect()->back()->with('success','un nouveau produit est ajouter dans le panier');


   }
}
