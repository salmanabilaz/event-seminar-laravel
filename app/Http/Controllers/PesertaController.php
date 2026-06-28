<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{

    public function index()
    {
        $pesertas = Peserta::paginate(10);

        return view('peserta.index', compact('pesertas'));
    }


    public function create()
    {
        return view('peserta.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required'
        ]);


        Peserta::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp
        ]);


        return redirect()->route('peserta.index')
            ->with('success','Data peserta berhasil ditambahkan.');
    }



    public function edit($id)
    {
        $peserta = Peserta::findOrFail($id);

        return view('peserta.edit', compact('peserta'));
    }



    public function update(Request $request, $id)
    {

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required'
        ]);


        $peserta = Peserta::findOrFail($id);


        $peserta->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp
        ]);


        return redirect()->route('peserta.index')
            ->with('success','Data peserta berhasil diperbarui.');

    }



    public function destroy($id)
    {
        Peserta::findOrFail($id)->delete();


        return redirect()->route('peserta.index')
            ->with('success','Data peserta berhasil dihapus.');
    }

}