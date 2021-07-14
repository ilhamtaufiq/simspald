<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KecamatanModel;

class KecamatanController extends Controller
{
    public function __construct()
    {
        $this->KecamatanModel = new KecamatanModel();
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'title' => 'Kecamatan',
            'kecamatan' => $this->KecamatanModel->AllData(),

        ];
        return view('admin.kecamatan.index', $data);
    }
    public function add(Request $request)
    {

        $data = [
            'title' => 'Tambah Data Kecamatan',

         ];
        return view('admin.kecamatan.input', $data);
    }

    public function insert()
    {
        Request()->validate([
            'id_kec' => 'required',
            'n_kec' => 'required',
        ],
        [
            'id_kec.required' => "Pilih Pekerjaan SPALD",
            'n_kec.required' => "Format Tidak Sesuai",
        ]
    );
    $data = [        
        'id_kec' => Request()->id_kec,
        'n_kec' => Request()->n_kec,
    ];
    
    $this->KecamatanModel->InsertData($data);
    return redirect()->route('kecamatan')->with('pesan', 'Data Koordinat SPALD Berhasil Ditambahkan');

    }

    public function edit($id_kec)
    {

        $data = [
            
            'title' => 'Tambah Desa',
            'kec' => $this->KecamatanModel->DetailData($id_kec),
        ];
        return view('admin.desa.input', $data);
    }

    public function update($id_kec )
    {
        Request()->validate([
            'id_kec' => 'required',
            'n_kec' => 'required',
        ],
        [
            'id_kec.required' => "Pilih Pekerjaan SPALD",
            'n_kec.required' => "Format Tidak Sesuai",
        ]
    );
    $data = [        
        'id_kec' => Request()->id_kec,
        'n_kec' => Request()->n_kec,
    ];
        $this->KecamatanModel->UpdateData($id_kec,$data);
        return redirect()->route('koordinat')->with('pesan', 'Data Koordinat SPALD Berhasil Diubah ');   
    }

    public function delete($id_kec)
    {
        $this->KecamatanModel->DeleteData($id_kec);
        return redirect()->route('kecamatan')->with('pesan', 'Data Kecamatan Berhasil Dihapus ');
    }
}
