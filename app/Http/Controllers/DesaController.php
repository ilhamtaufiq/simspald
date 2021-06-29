<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesaModel;

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
}
