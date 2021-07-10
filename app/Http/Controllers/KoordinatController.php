<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KoordinatModel;
use App\Models\SpaldModel;
use DB;

class KoordinatController extends Controller
{
    public function __construct()
    {
        $this->KoordinatModel = new KoordinatModel();
        $this->SpaldModel = new SpaldModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'title' => 'Koordinat',
            'koordinat' => $this->KoordinatModel->AllData(),

        ];
        return view('admin.koordinat.index', $data);
    }
    
    public function add(Request $request)
    {

        $data = [
            'title' => 'Tambah Data Koordinat SPALD',
            'spald' => $this->SpaldModel->AllData(),

         ];
        return view('admin.koordinat.input', $data);
    }

    public function insert()
    {
        Request()->validate([
            'id_spald' => 'required',
            'lat_' => 'required',
            'long_' => 'required',
        ],
        [
            'id_spald.required' => "Pilih Pekerjaan SPALD",
            'lat_.required' => "Format Tidak Sesuai",
            'long_.required' => "Format Tidak Sesuai",
        ],
    );
    $data = [        
        'id_spald' => Request()->id_spald,
        'lat_' => Request()->lat_,
        'long_' => Request()->long_,
    ];
    
    $this->KoordinatModel->InsertData($data);
    return redirect()->route('koordinat')->with('pesan', 'Data Koordinat SPALD Berhasil Ditambahkan');

    }

    public function edit($id_koordinat)
    {
        $spald = DB::table('tbl_spald')->get();

        $data = [
            
            'title' => 'Edit Data Koordinat SPALD',
            'koordinat' => $this->KoordinatModel->DetailData($id_koordinat),
            'spald' => $spald,
        ];
        return view('admin.koordinat.edit', $data);
    }

    public function update($id_koordinat )
    {
        Request()->validate([
            'id_spald' => 'required',
            'lat_' => 'required',
            'long_' => 'required',
        ],
        [
            'id_spald' => 'required',
            'lat_' => 'required',
            'long_' => 'required',
        ],
    );
    $data = [        
        'id_spald' => Request()->id_spald,
        'lat_' => Request()->lat_,
        'long_' => Request()->long_,
    ];
        $this->KoordinatModel->UpdateData($id_koordinat,$data);
        return redirect()->route('koordinat')->with('pesan', 'Data Koordinat SPALD Berhasil Diubah ');   
    }

    public function delete($id_koordinat)
    {
        $this->KoordinatModel->DeleteData($id_koordinat);
        return redirect()->route('koordinat')->with('pesan', 'Data Koordinat SPALD Berhasil Dihapus ');
    }
}
