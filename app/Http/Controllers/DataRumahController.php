<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataRumahModel;
use DB;

class DataRumahController extends Controller
{
    public function __construct()
    {
        $this->DataRumahModel = new DataRumahModel();
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'title' => 'Data Rumah',
            'rumah' => $this->DataRumahModel->AllData(),

        ];
        return view('admin.rumah.index', $data);
    }
    
    public function add(Request $request)
    {
        $kec = DB::table('tbl_kecamatan')->pluck('n_kec', 'id_kec');

        $data = [
            'title' => 'Tambah Daftar Rumah',
            'kecamatan' => $kec,

         ];
        return view('admin.rumah.input', $data);
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
            'id_desa' => 'required',
            'id_kec' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'n_kk' => 'required',
            'n_nik' => 'required',
            'j_anggota' => 'required',
            'klasifikasi' => 'required',
            'risiko_sanitasi' => 'required',
            'mbr' => 'required',
            'non_mbr' => 'required',
            'babs' => 'required',
            'cubluk_perkotaan' => 'required',
            'cubluk_perdesaan' => 'required',
        ],
        [
            'id_desa' => 'required',
            'id_kec' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'n_kk' => 'required',
            'n_nik' => 'required',
            'j_anggota' => 'required',
            'klasifikasi' => 'required',
            'risiko_sanitasi' => 'required',
            'mbr' => 'required',
            'non_mbr' => 'required',
            'babs' => 'required',
            'cubluk_perkotaan' => 'required',
            'cubluk_perdesaan' => 'required',
        ],
    );
    $data = [        
        'id_desa' => Request()->id_desa,
        'id_kec' => Request()->id_kec,
        'rw' => Request()->rw,
        'rt' => Request()->rt,
        'n_kk' => Request()->n_kk,
        'n_nik' => Request()->n_nik,
        'j_anggota' => Request()->j_anggota,
        'klasifikasi' => Request()->klasifikasi,
        'risiko_sanitasi' => Request()->risiko_sanitasi,
        'mbr' => Request()->mbr,
        'non_mbr' => Request()->non_mbr,
        'babs' => Request()->babs,
        'cubluk_perkotaan' => Request()->cubluk_perkotaan,
        'cubluk_perdesaan' => Request()->cubluk_perdesaan,
    ];
    
    $this->DataRumahModel->InsertData($data);
    return redirect()->route('rumah')->with('pesan', 'Data Rumah Berhasil Ditambahkan');

    }

    public function edit($id_rumah)
    {
        $kec = DB::table('tbl_kecamatan')->pluck('n_kec', 'id_kec');

        $data = [
            
            'title' => 'Edit Data Rumah',
            'rumah' => $this->DataRumahModel->DetailData($id_rumah),
            'kecamatan' => $kec,
        ];
        return view('admin.rumah.edit', $data);
    }
    
    public function update($id_rumah )
    {
        Request()->validate([
            'id_desa' => 'required',
            'id_kec' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'n_kk' => 'required',
            'n_nik' => 'required',
            'j_anggota' => 'required',
            'klasifikasi' => 'required',
            'risiko_sanitasi' => 'required',
            'mbr' => 'required',
            'non_mbr' => 'required',
            'babs' => 'required',
            'cubluk_perkotaan' => 'required',
            'cubluk_perdesaan' => 'required',
        ],
        [
            'id_desa' => 'required',
            'id_kec' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'n_kk' => 'required',
            'n_nik' => 'required',
            'j_anggota' => 'required',
            'klasifikasi' => 'required',
            'risiko_sanitasi' => 'required',
            'mbr' => 'required',
            'non_mbr' => 'required',
            'babs' => 'required',
            'cubluk_perkotaan' => 'required',
            'cubluk_perdesaan' => 'required',
        ],
    );
    $data = [        
        'id_desa' => Request()->id_desa,
        'id_kec' => Request()->id_kec,
        'rw' => Request()->rw,
        'rt' => Request()->rt,
        'n_kk' => Request()->n_kk,
        'n_nik' => Request()->n_nik,
        'j_anggota' => Request()->j_anggota,
        'klasifikasi' => Request()->klasifikasi,
        'risiko_sanitasi' => Request()->risiko_sanitasi,
        'mbr' => Request()->mbr,
        'non_mbr' => Request()->non_mbr,
        'babs' => Request()->babs,
        'cubluk_perkotaan' => Request()->cubluk_perkotaan,
        'cubluk_perdesaan' => Request()->cubluk_perdesaan,
        ];
        $this->DataRumahModel->UpdateData($id_rumah,$data);
        return redirect()->route('rumah')->with('pesan', 'Data Rumah Berhasil Diubah ');   
    }

    public function delete($id_rumah)
    {
        $this->DataRumahModel->DeleteData($id_rumah);
        return redirect()->route('rumah')->with('pesan', 'Data Rumah Berhasil Dihapus ');
    }
}
