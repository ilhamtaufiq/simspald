<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $spald = DB::table('tbl_spald')->count();
        $akses = DB::table('tbl_spald')->sum('akses_tersedia');
        $pagu = DB::table('tbl_spald')
        ->selectRaw("REPLACE(REPLACE(REPLACE(REPLACE(pagu, 'R', '') , 'p', '') , '.', '') , ',00', '') as total ")
        ->get();
        $p = $pagu->sum('total');
        $chart_akses = DB::table('tbl_spald')->get();

        $pagu2020 = DB::table('tbl_spald')
        ->selectRaw("REPLACE(REPLACE(REPLACE(REPLACE(pagu, 'R', '') , 'p', '') , '.', '') , ',00', '') as total ")
        ->where('tahun', '=', 2020)
        ->get();
        $p2020 = $pagu2020->sum('total');
        
        $pagu2021 = DB::table('tbl_spald')
        ->selectRaw("REPLACE(REPLACE(REPLACE(REPLACE(pagu, 'R', '') , 'p', '') , '.', '') , ',00', '') as total ")
        ->where('tahun', '=', 2021)
        ->get();
        $p2021 = $pagu2021->sum('total');


        $jiwa = DB::table('tbl_rumah')->sum('j_anggota');
        $data = [
            'title' => 'Dashboard',
            'spald' => $spald,
            'jiwa' => $jiwa,
            'akses_tersedia' => $akses,
            'pagu' => $p,
            'chart_akses' => $chart_akses,
            'pagu_2020' => $p2020,
            'pagu_2021' => $p2021,


        ];
        return view('admin.dashboard', $data);

    }
}
