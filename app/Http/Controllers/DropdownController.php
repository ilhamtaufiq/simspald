<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DropdownController extends Controller
{
    public function index()
	{
		$kec = DB::table("tbl_kecamatan")->pluck("name","id");
        return view('admin.spald.input', [
            'kec' => $kec,
        ]);	}

	public function getState(Request $request)
	{
		$desa = DB::table("tbl_desa")
		->where("id_kec",$request->id_kec)
		->pluck("n_desa","id_desa");
		return response()->json($desa);
	} 
}
