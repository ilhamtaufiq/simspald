<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpaldModel;

class SpaldController extends Controller
{
    public function __construct()
    {
        $this->SpaldModel = new SpaldModel();
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
    public function delete($id_spald)
    {
        $this->SpaldModel->DeleteData($id_spald);
        return redirect()->route('spald')->with('pesan', 'Data SPALD Berhasil Dihapus ');
    }
}
