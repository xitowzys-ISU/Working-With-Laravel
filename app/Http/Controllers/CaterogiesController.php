<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CaterogiesController extends Controller
{
    public function index() {
        $categories = Category::get();
//        dd($categories);
        return view('categories', compact('categories'));
    }
}
