<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpaldModel;
use App\Models\KecamatanModel;
use Illuminate\Support\Facades\DB;


class SpaldController extends Controller
{
    public function __construct()
    {
        $this->SpaldModel = new SpaldModel();
        $this->KecamatanModel = new KecamatanModel();
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'title' => 'Sistem Pengolahan Air Limbah',
            'spald' => $this->SpaldModel->AllData(),

        ];
        return view('admin.spald.index', $data);
    }

    public function add(Request $request)
    {
        $kec = DB::table('tbl_kecamatan')->pluck('n_kec', 'id_kec');

        $data = [
            'title' => 'Tambah Daftar SPALD',
            'kecamatan' => $kec,

         ];
        return view('admin.spald.input', $data);
    }
    public function getDesa($id_kec)
    {
        $data = DB::table('tbl_desa')
        ->where('id_kec', $id_kec)
        ->pluck('n_desa', 'id_desa');

        return response()->json($data);
    }
    public function insert()
    {
        Request()->validate([
            'tipe' => 'required',
            'nama_ksm' => 'required',
            'id_desa' => 'required',
            'id_kec' => 'required',
            'komponen_ipal' => 'required',
            'komponen_sr' => 'required',


        ],
        [
            'tipe' => 'required',
            'nama_ksm' => 'required',
            'id_desa' => 'required',
            'id_kec' => 'required',
            'komponen_ipal' => 'required',
            'komponen_sr' => 'required',

        ],
    );


    $data = [        
        'tipe' => Request()->tipe,
        'nama_ksm' => Request()->nama_ksm,
        'id_desa' => Request()->id_desa,
        'id_kec' => Request()->id_kec,
        'komponen_ipal' => Request()->komponen_ipal,
        'komponen_sr' => Request()->komponen_sr,

    ];
    
    $this->SpaldModel->InsertData($data);
    return redirect()->route('spald')->with('pesan', 'Data SPALD Berhasil Ditambahkan');

    }

    public function delete($id_spald)
    {
        $this->SpaldModel->DeleteData($id_spald);
        return redirect()->route('spald')->with('pesan', 'Data SPALD Berhasil Dihapus ');
    }
}
