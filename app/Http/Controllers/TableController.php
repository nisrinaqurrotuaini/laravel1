<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function show()
    {

        $Products = Product::all();
        return view("tableProduct", compact("Products"));
    }

    public function edit($id)
    {

        $Product = Product::findOrFail($id);

        return view("editProduct", compact("Product"));
    }

    public function update(Request $request, $id)
    {

        $Product = Product::findOrFail($id);

        $Product->nama = $request->nama;
        $Product->harga = $request->harga;
        $Product->stok = $request->stok;
        $Product->deskripsi = $request->deskripsi;
        $Product->save();

        return redirect('/show');
    }

    public function destroy($id)
    {

        $Product = Product::findOrFail($id);
        $Product->delete();

        return redirect('/show');
    }

    public function input()
    {
        return view("inputProduct");
    }

    
}
