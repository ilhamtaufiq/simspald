<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengelola;
use App\Models\Ipald;
use DB;

class PengelolaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengelola = Pengelola::with('ipald')->get();
        //  dd($pengelola);
        $title = 'Kelompok Penerima Manfaat';     
        $layout = 'layouts.sidebar_fixed.master';  
        return view('halaman.pengelola.index', compact('pengelola','title','layout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spald = Ipald::with('ksm')->get();
        // dd($spald);
        
        $title = 'Tambah Kelompok penerima Manfaat';     
        $layout = 'layouts.sidebar_fixed.master'; 
        return view('halaman.pengelola.input', compact('spald','title','layout'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_spald' => 'required|unique:pengelola,id_spald',
            'nama_ksm' => 'required',
            'nama_ketua' => 'required',
            'nik_ketua' => 'required',
            'npwp' => 'required',


        ],
        [
            'id_spald.required' => 'Duplikasi SPALD!',
            'nama_ksm' => 'required',
            'nama_ketua' => 'required',
            'nik_ketua' => 'required',
            'npwp' => 'required',


        ]
        );
        $input = $request->all();
        $store = Pengelola::create($input);
        return redirect()->route('pengelola.index')->with('pesan', 'Data Pengelola Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengelola $pengelola)
    {
        $spald = Ipald::has('ksm')->get();
        
        $title = "Ubah Data SPALD";
        $layout = 'layouts.sidebar_fixed.master';
        return view('halaman.pengelola.edit', compact('pengelola','spald','title','layout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengelola $pengelola)
    {
        $request->validate([
            'id_spald' => 'required',
            'nama_ksm' => 'required',
            'nama_ketua' => 'required',
            'nik_ketua' => 'required',
            'npwp' => 'required',


        ],
        [
            'id_spald.required' => 'Duplikasi SPALD!',
            'nama_ksm' => 'required',
            'nama_ketua' => 'required',
            'nik_ketua' => 'required',
            'npwp' => 'required',


        ]
        );
        $pengelola->update($request->all());
        return redirect()->route('pengelola.index')->with('pesan', 'Data Pengelola Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengelola $pengelola)
    {
        $pengelola->delete();
        return redirect()->route('pengelola.index')->with('pesan', 'Data Pengelola Berhasil Dihapus ');
    }
}
