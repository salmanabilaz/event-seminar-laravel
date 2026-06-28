<?php

namespace App\Http\Controllers;

use App\Models\KategoriSeminar;
use Illuminate\Http\Request;

class KategoriSeminarController extends Controller
{
    public function index()
    {
        $kategoriseminars = KategoriSeminar::all();

        return view('kategori.index', compact('kategoriseminars'));
    }


    public function create()
    {
        return view('kategori.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'deskripsi' => 'required'
        ]);


        KategoriSeminar::create([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi
        ]);


        return redirect()->route('kategori.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $kategoriseminar = KategoriSeminar::find($id);

        return view('kategori.edit', compact('kategoriseminar'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'deskripsi' => 'required'
        ]);


        $kategoriseminar = KategoriSeminar::find($id);


        $kategoriseminar->update([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi
        ]);


        return redirect()->route('kategori.index');
    }


    public function destroy(string $id)
    {
        $kategoriseminar = KategoriSeminar::find($id);

        $kategoriseminar->delete();


        return redirect()->route('kategori.index');
    }
}