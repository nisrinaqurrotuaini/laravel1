<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Daftar data buku dalam array
        $books = [
            ['title' => 'Belajar Laravel', 'author' => 'John Doe', 'year' => 2021],
            ['title' => 'Laut Bercerita', 'author' => 'Leila S. Chudori', 'year' => 2020],
            ['title' => 'Framework Web', 'author' => 'Robert Brown', 'year' => 2020],
            ['title' => 'Santri Pilihan Bunda', 'author' => 'Syalsyabila Falensia', 'year' => 2021],
            ['title' => 'Pemrograman Dasar', 'author' => 'Michael Scott', 'year' => 2018],
        ];

        // Mengirimkan data buku ke view
        return view('book', ['books' => $books]);
    }
}
