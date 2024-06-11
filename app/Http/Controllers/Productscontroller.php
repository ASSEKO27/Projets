<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class Productscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        //la fonction compact sert a transmettre les variables dans la view
        return view("admin.products.index" , compact("products") );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view ("admin.products.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          // securite :controle sur les champs
    $request -> validate([
        "name"=> "required|max:100| unique:products",
        "description"=>"required",
        "price"=>"numeric|required",
        "photos1"=>"image|required|mimes: jpeg,png,jpg,gif|max:2048",
        "photos2"=>"image|required|mimes: jpeg,png,jpg,gif|max:2048",
        "category_id"=>"required | numeric",


    ]);
    $inputs=$request->all();
    if ($photos1=$request->file("photos1")){
        $newfile1=time().".".$photos1->getClientOriginalExtension();
        $photos1->move('images/products/',$newfile1);
        $inputs['photos1']=$newfile1;
    }
    if ($photos2=$request->file("photos2")){
        $newfile2=time().time().".".$photos1->getClientOriginalExtension();
        $photos2->move('images/products/',$newfile2);
        $inputs['photos2']=$newfile2;
    }


        product::create($inputs);

        return redirect()->route ("products.index")->with("message","un nouveau produit a été ajoutée avec succes !");

    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        $categories=Category::all();
        return view ("admin.products.edit", compact("product","categories"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $request -> validate([
            "name"=> "required|max:100|",
            "description"=>"required",
            "price"=>"numeric",
            "photos1"=>"image|mimes: jpeg,png,jpg,gif|max:2048",
            "photos2"=>"image|mimes: jpeg,png,jpg,gif|max:2048",
            "category_id"=>"required",


        ]);
        $inputs=$request->all();

        if ($photos1=$request->file("photos1")){

        $newfile1=time().".".$photos1->getClientOriginalExtension();
        //ecraser l'ancienne photo
        if(file_exists("images/products/".$product->photos1)){
        unlink("images/products/".$product->photos1);
        }

        $photos1->move('images/products/',$newfile1);
        $inputs['photos1']=$newfile1;
        }

        if ($photos2=$request->file("photos2")){
            if(file_exists("images/products/".$product->photos2)){
                unlink("images/products/".$product->photos2);
                }
        $newfile2=time().time().".".$photos2->getClientOriginalExtension();
        $photos2->move('images/products/',$newfile2);
        $inputs['photos2']=$newfile2;
        }
            $product->update($inputs);

            return redirect()->route ("products.index")->with("message","le produit est modifié avec succes !");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        if(file_exists("images/products/".$product->photos1)){
            unlink("images/products/".$product->photos1);
            }

                if(file_exists("images/products/".$product->photos2)){
                    unlink("images/products/".$product->photos2);
                    }
        $product->delete();

        return redirect()->route("products.index")->with("message","un produit est supprimé avec succès !");
    }

}
