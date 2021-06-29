<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataRumahModel;

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
    public function delete($id_rumah)
    {
        $this->DataRumahModel->DeleteData($id_rumah);
        return redirect()->route('rumah')->with('pesan', 'Data Rumah Berhasil Dihapus ');
    }
}
