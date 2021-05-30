<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('welcome', ['fruits' => ['Mango', 'Banana', 'Orange', 'Apple', 'Pineapple']]);
    }

    public function search()
    {
        return view('products.search');
    }

    public function autoComplete(Request $request)
    {
        $products = Product::select('name')->where("name", "LIKE", "%{$request->search}%")->get();
        return response()->json($products);
    }
}
