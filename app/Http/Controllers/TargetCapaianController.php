<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TargetCapaianModel;

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
    public function delete($id_capaian)
    {
        $this->TargetCapaianModel->DeleteData($id_spald);
        return redirect()->route('target')->with('pesan', 'Data Target Capaian Berhasil Dihapus ');
    }
}
