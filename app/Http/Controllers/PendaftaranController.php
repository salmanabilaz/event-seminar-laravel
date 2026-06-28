<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Peserta;
use App\Models\Seminar;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{


    public function index()
    {
        $pendaftarans = Pendaftaran::with([
            'peserta',
            'seminar'
        ])->paginate(10);


        return view('pendaftaran.index',
        compact('pendaftarans'));
    }



    public function create()
    {

        $pesertas = Peserta::all();

        $seminars = Seminar::all();


        return view('pendaftaran.create',
        compact('pesertas','seminars'));

    }



    public function store(Request $request)
    {

        $request->validate([

            'peserta_id'=>'required',
            'seminar_id'=>'required'

        ]);



        Pendaftaran::create([

            'peserta_id'=>$request->peserta_id,

            'seminar_id'=>$request->seminar_id,

            'tanggal_daftar'=>now()

        ]);



        return redirect()->route('pendaftaran.index');

    }




    public function destroy($id)
    {

        Pendaftaran::findOrFail($id)->delete();


        return redirect()->route('pendaftaran.index');

    }


}