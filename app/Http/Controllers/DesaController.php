<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesaModel;
use App\Models\KecamatanModel;
use DB;

class DesaController extends Controller
{
    public function __construct()
    {
        $this->DesaModel = new DesaModel();
        $this->KecamatanModel = new KecamatanModel();

        $this->middleware('auth');
    }
    public function index($id_kec)
    {
        $data = [
            'title' => 'Desa',
            'desa' => $this->DesaModel->AllData($id_kec),

        ];
        return view('admin.desa.index', $data);
    }
    public function add($id_kec)
    {
        $data = [
            'title' => 'Desa',
            'kec' => $this->DesaModel->AllData($id_kec),

        ];
        return view('admin.desa.input', $data);
    }

    public function insert()
    {
        Request()->validate([
            'id_kec' => 'required',
            'n_desa' => 'required',
        ],
        [
            'id_kec.required' => "Pilih Pekerjaan SPALD",
            'n_desa.required' => "Format Tidak Sesuai",
        ],
    );
    $data = [        
        'id_kec' => Request()->id_kec,
        'n_desa' => Request()->n_desa,
    ];
    
    $this->DesaModel->InsertData($data);
    return redirect()->route('kecamatan')->with('pesan', 'Data Koordinat SPALD Berhasil Ditambahkan');

    }
}
