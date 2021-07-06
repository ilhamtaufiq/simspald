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
        $chart_akses = DB::table('tbl_spald')->get();
        $p = $pagu->sum('total');

        $jiwa = DB::table('tbl_rumah')->sum('j_anggota');
        $data = [
            'title' => 'Dashboard',
            'spald' => $spald,
            'jiwa' => $jiwa,
            'akses_tersedia' => $akses,
            'pagu' => $p,
            'chart_akses' => $chart_akses,

        ];
        return view('admin.dashboard', $data);

    }
}
