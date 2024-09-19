<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;


class StoreController extends Controller
{
    //
    //public function store()
    //{
    //$Product = new Product();
    //$Product->nama = "Laptop";
    //$Product->harga = "10000";
    //$Product->stok = "10";
    //$Product->deskripsi = "Laptop Murah";
    //$Product->save();

    //return ("data sukses dikirim");
    //    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric|min:2',
            'stok' => 'required|integer|min:50',
            'deskripsi' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $Product = new Product();
        $Product->nama = $request->nama;
        $Product->harga = $request->harga;
        $Product->stok = $request->stok;
        $Product->deskripsi = $request->deskripsi;
        $Product->save();

        return redirect()->back();
    }
}
