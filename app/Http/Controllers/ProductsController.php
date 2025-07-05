<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductsController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Laptop', 'price' => 1000], 
            ['name' => 'Smartphone', 'price' => 700], 
            ['name' => 'Tablet', 'price' => 300], 
        ];

        $productsObject = [
            (object) ['name' => 'Laptop', 'price' => 1000], 
            (object) ['name' => 'Smartphone', 'price' => 700], 
            (object) ['name' => 'Tablet', 'price' => 300], 
            (object) ['name' => 'Keyboard', 'price' => 50],     
            (object) ['name' => 'Mouse', 'price' => 30]
        ];


        $product11 = DB::table('products')->get();


        return view('products.index', compact('product11', 'products', 'productsObject'));
    }

    public function show($product_id)
    {
        return view('products.show', ['id' => $product_id]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Logic to store the product
        return redirect()->route('products.index');
    }
}
