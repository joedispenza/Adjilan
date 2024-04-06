<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getAllProducts()
    {
        $products = Product::all();
        return  view("products.allproducts")->with("products", $products);
    }
    public function getProductById($productId)
    {
        $product = Product::find($productId);
        return view('products.oneproduct')->with("product", $product);
    }
    public function create()
    {
        return view("products.createProduct");
    }
    public function createNewProduct(Request $request)
    {

        $validated = $request->validate([

            "nom" => 'required|max:255',
            'description_du_produit' => 'required|max:255',
            'prix' => 'required|max:255',
            'categorie_du_produit' => 'required|max:255',
            "quantite_en_stock" => 'required|max:255',
            "status" => 'required|max:255',
            "date_de_livraison" => 'required|max:255',
        ]);
        Product::create(
            $validated
        );
        return redirect("/allproducts")->with("status", 'Produit ' . $request->input('nom') . "a été créé avec succes");
    }
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect("/allproducts")->with("status", "produit  Supprimé ");
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view("products.editproduct")->with("product", $product);
    }
    public function updateProduct(Request $request, $id)
    {
        $product = Product::find($id);
        $product->nom = $request->input("nom");
        $product->description_du_produit = $request->input("description_du_produit");
        $product->prix = $request->input("prix");
        $product->categorie_du_produit = $request->input("categorie_du_produit");
        $product->quantite_en_stock = $request->input("quantite_en_stock");
        $product->status = $request->input("status");
        $product->date_de_livraison = $request->input("date_de_livraison");
        $product->update();
        return redirect("/allproducts")->with("status", "Votre produit a été modifié");
    }
}
