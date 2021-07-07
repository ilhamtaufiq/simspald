<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WelcomeModel;
use DB;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->WelcomeModel = new WelcomeModel();

    }
    public function index()
    {
        $spald = DB::table('tbl_spald')->count();
        $akses = DB::table('tbl_spald')->sum('akses_tersedia');
        $pagu = DB::table('tbl_spald')
        ->selectRaw("REPLACE(REPLACE(REPLACE(REPLACE(pagu, 'R', '') , 'p', '') , '.', '') , ',00', '') as total ")
        ->get();
        $p = $pagu->sum('total');
        $jiwa = DB::table('tbl_rumah')->sum('j_anggota');


        $data = [
            'title' => 'SIMSPALD',
            'koordinat' => $this->WelcomeModel->KoordinatData(),
            'spald' => $spald,
            'jiwa' => $jiwa,
            'akses_tersedia' => $akses,
            'pagu' => $p,



        ];
        return view('welcome', $data);
    }
}
