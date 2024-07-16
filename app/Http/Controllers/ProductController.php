<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Index Function
    public function index() {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    
}
