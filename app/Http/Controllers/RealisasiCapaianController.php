<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RealisasiCapaianModel;
use DB;

class RealisasiCapaianController extends Controller
{
    public function __construct()
    {
        $this->RealisasiCapaianModel = new RealisasiCapaianModel();
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'title' => 'Realisasi Capaian',
            'realisasi' => $this->RealisasiCapaianModel->AllData(),

        ];
        return view('admin.capaian.realisasi.index', $data);
    }

    public function add(Request $request)
    {
        $kec = DB::table('tbl_kecamatan')->pluck('n_kec', 'id_kec');
        $spald = DB::table('tbl_spald')->get();


        $data = [
            'title' => 'Tambah Realisasi Capaian',
            'kecamatan' => $kec,
            'spald' => $spald,

         ];
        return view('admin.capaian.realisasi.input', $data);
    }
    public function getDesa($id_kec)
    {
        $data = DB::table('tbl_desa')
        ->where('id_kec', $id_kec)
        ->pluck('n_desa', 'id_desa');

        return response()->json($data);
    }
    public function getKec($id_spald)
    {
        $data = DB::table('tbl_desa')
        ->where('id_spald', $id_spald)
        ->pluck('n_kec', 'id_kec');

        return response()->json($data);
    }
    public function insert()
    {
        Request()->validate([
            'id_kec' => 'required',
            'id_desa' => 'required',
            'id_spald' => 'required',
            'tanpa_akses' => 'required',
            'akses_dasar' => 'required',
            'akses_layak' => 'required',
            'aa_spalds' => 'required',
            'aa_spaldt' => 'required',
        ],
        [
            'id_kec' => 'required',
            'id_desa' => 'required',
            'id_spald' => 'required',
            'tanpa_akses' => 'required',
            'akses_dasar' => 'required',
            'akses_layak' => 'required',
            'aa_spalds' => 'required',
            'aa_spaldt' => 'required',
        ],
    );
        $data = [        
        'id_kec' => Request()->id_kec,
        'id_desa' => Request()->id_desa,
        'id_spald' => Request()->id_spald,
        'tanpa_akses' => Request()->tanpa_akses,
        'akses_dasar' => Request()->akses_dasar,
        'akses_layak' => Request()->akses_layak,
        'aa_spalds' => Request()->aa_spalds,
        'aa_spaldt' => Request()->aa_spaldt,
    ];
    
    $this->RealisasiCapaianModel->InsertData($data);
    return redirect()->route('realisasi')->with('pesan', 'Data Target Capaian Berhasil Ditambahkan');

    }

    public function edit($id_capaian)
    {
        $kec = DB::table('tbl_kecamatan')->pluck('n_kec', 'id_kec');

        $data = [
            
            'title' => 'Edit Data Target Capaian',
            'target' => $this->RealisasiCapaianModel->DetailData($id_capaian),
            'kecamatan' => $kec,
        ];
        return view('admin.capaian.target.edit', $data);
    }
    
    public function update($id_capaian)
    {
        Request()->validate([
            'id_kec' => 'required',
            'id_desa' => 'required',
            'id_spald' => 'required',
            'tanpa_akses' => 'required',
            'akses_dasar' => 'required',
            'akses_layak' => 'required',
            'aa_spalds' => 'required',
            'aa_spaldt' => 'required',
        ],
        [
            'id_kec' => 'required',
            'id_desa' => 'required',
            'id_spald' => 'required',
            'tanpa_akses' => 'required',
            'akses_dasar' => 'required',
            'akses_layak' => 'required',
            'aa_spalds' => 'required',
            'aa_spaldt' => 'required',
        ],
    );
        $data = [        
        'id_kec' => Request()->id_kec,
        'id_desa' => Request()->id_desa,
        'id_spald' => Request()->id_spald,
        'tanpa_akses' => Request()->tanpa_akses,
        'akses_dasar' => Request()->akses_dasar,
        'akses_layak' => Request()->akses_layak,
        'aa_spalds' => Request()->aa_spalds,
        'aa_spaldt' => Request()->aa_spaldt,
        ];

        $this->RealisasiCapaianModel->UpdateData($id_capaian,$data);
        return redirect()->route('realisasi')->with('pesan', 'Data Target Capaian Berhasil Diubah ');   
    }

    public function delete($id_capaian)
    {
        $this->RealisasiCapaianModel->DeleteData($id_capaian);
        return redirect()->route('realisasi')->with('pesan', 'Data Realisasi Capaian Berhasil Dihapus ');
    }
}
