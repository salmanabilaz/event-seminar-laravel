<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use App\Models\Peserta;
use App\Models\Pendaftaran;

class DashboardController extends Controller
{

    public function index()
    {

        $totalSeminar = Seminar::count();

        $totalPeserta = Peserta::count();

        $totalPendaftaran = Pendaftaran::count();


        return view('dashboard', compact(
            'totalSeminar',
            'totalPeserta',
            'totalPendaftaran'
        ));

    }

}