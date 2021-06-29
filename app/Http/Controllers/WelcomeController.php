<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WelcomeModel;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->WelcomeModel = new WelcomeModel();
    }
    public function index()
    {
        $data = [
            'title' => 'SIMSPALD',
            'koordinat' => $this->WelcomeModel->KoordinatData(),

        ];
        return view('welcome', $data);
    }
}
