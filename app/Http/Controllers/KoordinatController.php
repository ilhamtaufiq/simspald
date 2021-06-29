<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KoordinatModel;

class KoordinatController extends Controller
{
    public function __construct()
    {
        $this->KoordinatModel = new KoordinatModel();
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
}
