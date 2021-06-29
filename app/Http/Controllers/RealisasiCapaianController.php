<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RealisasiCapaianModel;

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
    public function delete($id_capaian)
    {
        $this->RealisasiCapaianModel->DeleteData($id_spald);
        return redirect()->route('target')->with('pesan', 'Data Realisasi Capaian Berhasil Dihapus ');
    }
}
