<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($category, $product = null) {
        return view('product', ['product' => $product]);
    }
}
