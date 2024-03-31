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
        "photos1"=>"image|required|max:2048",
        "photos2"=>"image|required|max:2048",
        "category_id"=>"required",


    ]);
        product::create($request->all());

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
        return view ("admin.products.edit", compact("product"));
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
            "photos1"=>"image|required|max:2048",
            "photos2"=>"image|required|max:2048",
            "category_id"=>"required",


        ]);
            $product->update($request->all());

            return redirect()->route ("products.index")->with("message","le produit est modifié avec succes !");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();

        return redirect()->route("product.index")->with("message","un produit est supprimé avec succès !");
    }

}
