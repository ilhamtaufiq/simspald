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
    public function delete($id_kec)
    {
        $this->KecamatanModel->DeleteData($id_kec);
        return redirect()->route('kecamatan')->with('pesan', 'Data Kecamatan Berhasil Dihapus ');
    }
}
