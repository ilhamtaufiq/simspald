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

    public function add(Request $request)
    {
        $kec = DB::table('tbl_kecamatan')->pluck('id_kec');

        $data = [
            'title' => 'Tambah Desa',
            'kec' => $kec,

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
            'id_kec.required' => "Pilih Kecamatan",
            'n_desa.required' => "Desa Harus Diisi!",
        ],
    );
    $data = [        
        'id_kec' => Request()->id_kec,
        'n_desa' => Request()->n_desa,
    ];
    
    $this->DesaModel->InsertData($data);
    return redirect()->route('desa')->with('pesan', 'Data Desa Berhasil Ditambahkan');

    }

    public function edit($id_desa)
    {
        $kec = DB::table('tbl_kecamatan')->get();

        $data = [
            
            'title' => 'Edit Data Desa',
            'kec' => $kec,
        ];
        return view('admin.koordinat.edit', $data);
    }

    public function update($id_desa )
    {
        Request()->validate([
            'id_kec' => 'required',
            'n_desa' => 'required',
        ],
        [
            'id_kec.required' => "Pilih Kecamatan",
            'n_desa.required' => "Desa Harus Diisi!",
        ],
    );
    $data = [        
        'id_kec' => Request()->id_kec,
        'n_desa' => Request()->n_desa,
    ];
        $this->DesaModel->UpdateData($id_desa,$data);
        return redirect()->route('desa')->with('pesan', 'Data Desa Berhasil Diubah ');   
    }
}
