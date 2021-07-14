<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use notifications;

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

        $tanpa_akses = DB::table('tbl_r_capaian')->sum('tanpa_akses');
        $realisasi_akses_dasar = DB::table('tbl_r_capaian')->sum('akses_dasar');
        $akses_layak = DB::table('tbl_r_capaian')->sum('akses_layak');
        $r_aa_spalds = DB::table('tbl_r_capaian')->sum('aa_spalds');
        $r_aa_spaldt = DB::table('tbl_r_capaian')->sum('aa_spaldt');





        $akses_dasar = DB::table('tbl_t_capaian')->sum('akses_dasar');
        $aa_spaldt = DB::table('tbl_t_capaian')->sum('aa_spaldt');
        $aa_spalds = DB::table('tbl_t_capaian')->sum('aa_spalds');

        $total_rumah = $akses_dasar+$aa_spalds+$aa_spaldt;



        $notifications = auth()->user()->unreadNotifications;
        $cn = auth()->user()->unreadNotifications->count();



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
            'tanpa_akses' => $tanpa_akses,
            'r_akses_dasar' =>$realisasi_akses_dasar,
            'r_aa_spalds' => $r_aa_spalds,
            'r_aa_spaldt' => $r_aa_spaldt,
            'akses_layak' => $akses_layak,

            'capaian_spm' => number_format($tanpa_akses/$total_rumah)+($akses_layak/$total_rumah)+($realisasi_akses_dasar/$total_rumah)+($r_aa_spalds/$total_rumah)+($r_aa_spaldt/$total_rumah),
            
            'akses_dasar'=> $akses_dasar,
            'aa_spalds' => $aa_spalds,
            'aa_spaldt' => $aa_spaldt,

            'total_rumah' => $total_rumah,
            'notifications' => $notifications,
            'cn' => $cn,

        ];
        return view('admin.dashboard', $data);

    }
    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }
}
