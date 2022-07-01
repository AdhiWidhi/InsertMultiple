<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Penulis;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function store(Request $request)
    {
        $attr = $request->all();
        // dd($attr);
        Buku::create([
            'judul' => $attr['judul'],
        ]);
        Penulis::create([
            'nama' => $attr['nama'],
        ]);
    }
}