<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function show(){

        $Products = Product::all();
        return view("tableProduct",compact("Products"));
    }
}
