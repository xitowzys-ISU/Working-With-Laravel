<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $products = Product::get();
//        dump($productName);
        return view('index', compact('products'));
//        return view('index');
    }
}
