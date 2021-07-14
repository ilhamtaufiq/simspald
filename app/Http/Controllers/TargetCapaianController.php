<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TargetCapaianModel;
use DB;

class TargetCapaianController extends Controller
{
    public function __construct()
    {
        $this->TargetCapaianModel = new TargetCapaianModel();
        $this->middleware('auth');
    }
    public function index()
    {

        $data = [
            'title' => 'Target Capaian',
            'target' => $this->TargetCapaianModel->AllData(),

        ];
        return view('admin.capaian.target.index', $data);
    }

    public function add(Request $request)
    {
        $kec = DB::table('tbl_kecamatan')->pluck('n_kec', 'id_kec');

        $data = [
            'title' => 'Tambah Target Capaian',
            'kecamatan' => $kec,

         ];
        return view('admin.capaian.target.input', $data);
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
            'id_kec' => 'required',
            'id_desa' => 'required',
            'akses_dasar' => 'required',
            'aa_spalds' => 'required',
            'aa_spaldt' => 'required',
        ],
        [
            'id_kec' => 'required',
            'id_desa' => 'required',
            'akses_dasar' => 'required',
            'aa_spalds' => 'required',
            'aa_spaldt' => 'required',
        ]
    );
    $data = [        
        'id_kec' => Request()->id_kec,
        'id_desa' => Request()->id_desa,
        'akses_dasar' => Request()->akses_dasar,
        'aa_spalds' => Request()->aa_spalds,
        'aa_spaldt' => Request()->aa_spaldt,
    ];
    
    $this->TargetCapaianModel->InsertData($data);
    return redirect()->route('target')->with('pesan', 'Data Target Capaian Berhasil Ditambahkan');

    }

    public function edit($id_capaian)
    {
        $kec = DB::table('tbl_kecamatan')->pluck('n_kec', 'id_kec');

        $data = [
            
            'title' => 'Edit Data Target Capaian',
            'target' => $this->TargetCapaianModel->DetailData($id_capaian),
            'kecamatan' => $kec,
        ];
        return view('admin.capaian.target.edit', $data);
    }
    
    public function update($id_capaian)
    {
        Request()->validate([
            'id_kec' => 'required',
            'id_desa' => 'required',
            'akses_dasar' => 'required',
            'aa_spalds' => 'required',
            'aa_spaldt' => 'required',
        ],
        [
            'id_kec' => 'required',
            'id_desa' => 'required',
            'akses_dasar' => 'required',
            'aa_spalds' => 'required',
            'aa_spaldt' => 'required',
        ]
    );
        $data = [        
        'id_kec' => Request()->id_kec,
        'id_desa' => Request()->id_desa,
        'akses_dasar' => Request()->akses_dasar,
        'aa_spalds' => Request()->aa_spalds,
        'aa_spaldt' => Request()->aa_spaldt,
        ];

        $this->TargetCapaianModel->UpdateData($id_capaian,$data);
        return redirect()->route('target')->with('pesan', 'Data Target Capaian Berhasil Diubah ');   
    }

    public function delete($id_capaian)
    {
        $this->TargetCapaianModel->DeleteData($id_capaian);
        return redirect()->route('target')->with('pesan', 'Data Target Capaian Berhasil Dihapus ');
    }
}
