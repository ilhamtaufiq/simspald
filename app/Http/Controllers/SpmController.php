<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outcome;
use App\Models\Output;
use App\Models\Rumah;
use App\Models\Desa;
use App\Models\Ipald;

use DB;
class SpmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $data = [
            $title = 'Data Capaian SPM',
            $layout = 'layouts.sidebar_fixed.master',
            $babs = Rumah::sum('babs'),
            $cubluk_perkotaan = Rumah::sum('cubluk_perkotaan'),
            $akses_dasar = Rumah::sum('cubluk_perdesaan'),
            $al_ipald = Rumah::sum('al_ipald'),
            $al_ts_individual = Rumah::sum('al_ts_individual'),
            $al_ts_komunal = Rumah::sum('al_ts_komunal'),
            $aa_ts_individual = Rumah::sum('aa_ts_individual').
            $aa_ts_komunal = Rumah::sum('aa_ts_komunal'),
            $aa_ipald = Rumah::sum('aa_ipald'),
            $aa_spalds = $aa_ts_individual+$aa_ts_komunal,
            $akses_layak = $al_ipald+$al_ts_individual+$al_ts_komunal,
            $jumlah_penduduk = Desa::sum('jumlah_penduduk'),
            $desa = DB::table('ipalds')
            ->selectRaw('sum(kuantitas) as outcome,sum(jiwa) as jiwa,sum(jumlah_penduduk) as jumlah_penduduk,n_kec')
            ->join('desas','ipalds.id_kec','=','desas.id_kec')
            ->join('kecamatans','ipalds.id_kec','=','kecamatans.id_kec')
            ->join('outcome','ipalds.id_spald','=','outcome.id_spald')
            ->join('output','ipalds.id_spald','=','output.id_spald')
            ->groupBy(['n_kec'])
            ->get(),
        ];
        // dd($desa);
        // $desa = Ipald::query()->select(['sum(kuantitas) as jiwa','n_kec','user_name'])
        // ->letfJoin('leaderboard','user_id','=','user.id')->groupBy(['user_id','user_name'])->get();
        return view('halaman.spm.index', [
            'title' => $title,
            'layout' => $layout,
            'tanpa_akses' => $babs + $cubluk_perkotaan,
            'akses_dasar' => $akses_dasar,
            'total_rumah' => $jumlah_penduduk,
            'akses_layak' => $akses_layak,
            'akses_aman_spalds' => $aa_spalds,
            'akses_aman_spaldt' => $aa_ipald,
            'desa' => $desa
        ]);
    }
}
