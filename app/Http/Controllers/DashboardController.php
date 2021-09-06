<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outcome;
use App\Models\Output;
use App\Models\Ipald;
use DB;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pagu2020 = Ipald::selectRaw("REPLACE(REPLACE(REPLACE(REPLACE(pagu, 'R', '') , 'p', '') , '.', '') , ',00', '') as total ")
        ->where('tahun_anggaran', '=', 2020)
        ->get();

        $pagu2021 = Ipald::selectRaw("REPLACE(REPLACE(REPLACE(REPLACE(pagu, 'R', '') , 'p', '') , '.', '') , ',00', '') as total ")
        ->where('tahun_anggaran', '=', 2021)
        ->get();

        $p2020 = $pagu2020->sum('total');
        $p2021 = $pagu2021->sum('total');

        $jiwa2020 = Ipald::selectRaw("jiwa as total ")
        ->where('tahun_anggaran', '=', 2020)
        ->get();

        $jiwa2021 = Ipald::selectRaw("jiwa as total ")
        ->where('tahun_anggaran', '=', 2021)
        ->get();

        $j2020 = $jiwa2020->sum('total');
        $j2021 = $jiwa2021->sum('total');

        $kec = DB::table('kecamatans')->get();
        $kecamatan = $kec;

        $realisasi2021 = Ipald::join('outcome', 'outcome.id_spald', '=', 'ipalds.id_spald')
        ->where('tahun_anggaran','=',2021)
        ->sum('kuantitas');

        $realisasi2020 = Ipald::join('outcome', 'outcome.id_spald', '=', 'ipalds.id_spald')
        ->where('tahun_anggaran','=',2020)
        ->sum('kuantitas');

        $pagu = Ipald::selectRaw("REPLACE(REPLACE(REPLACE(REPLACE(pagu, 'R', '') , 'p', '') , '.', '') , ',00', '') as total ")
        ->get();
        $number = $pagu->sum('total');
        if ($number < 1000000) {
            // Kurang dari sejuta
            $format = number_format($number);
        } else if ($number < 1000000000) {
            // Kurang dari semiliar
            $format = number_format($number / 1000000, 1, ',', '') . ' Juta';
        } else {
            // Sama dengan atau lebih satu miliar
            $format = number_format($number / 1000000000, 1, ',', '') . ' Miliar';
        };

        $data = [
            $title = 'Data Capaian SPM',
            $layout = 'layouts.sidebar_fixed.master',
            $jiwa = Outcome::sum('kuantitas'),
            $sr = Output::sum('sr'),
            $ipal = Output::sum('ipal'),
            $spald = Ipald::count(),
            $total_ipal = Ipald::where('id_rincian_kegiatan',1)->count(),
            $total_ts = Ipald::where('id_rincian_kegiatan',6)->count(),
            $total_ts_komunal = Ipald::where('id_rincian_kegiatan',4)->count(),
            $total_ipal_mck = Ipald::where('id_rincian_kegiatan',2)->count(),
            $pagu = $pagu,
            

        ];
        return view('dashboard.index', [
            'title' => $title,
            'layout' => $layout,
            'jiwa' => $jiwa,
            'sr' => $sr,
            'ipal' => $ipal,
            'pagu' => $format,
            'spald' => $spald,
            'total_ipal' => $total_ipal,
            'total_ts' => $total_ts,
            'total_ts_komunal' => $total_ts_komunal,
            'total_ipal_mck' => $total_ipal_mck,
            'p2020' => $p2020,
            'p2021' => $p2021,
            'j2020' => $j2020,
            'j2021' => $j2021,
            'kecamatan' => $kecamatan,
            'realisasi2021' => $realisasi2021,
            'realisasi2020' => $realisasi2020,

            
        ]);
    }
}
