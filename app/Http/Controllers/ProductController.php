<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function allProducts()
    {
        // SELECT * FROM `products`
        $paste = Product::all();

        return view('products', ["paste" => $paste]);
    }

    public function singleProduct($id)
    {
        // SELECT * FROM `products` WHERE `id` = $id
        // $pasta = Product::where('id', $id)->get();

        $pasta = Product::find($id);

        return view("prodotto", compact("pasta"));
    }
}