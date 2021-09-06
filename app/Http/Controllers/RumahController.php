<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rumah;
use App\Models\Ipald;
use Crypt;

class RumahController extends Controller
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
        $data = Rumah::has('ipald')->get();
        return view('halaman.rumah.index', [
            'rumah' => $data,
            'title' => 'Rumah',
            'layout' => 'layouts.sidebar_fixed.master',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spald = Ipald::has('ksm')->get();
        // dd($spald);
        return view('halaman.rumah.input', [
            'title' => 'Tambah data rumah',
            'layout' => 'layouts.sidebar_fixed.master',
            'spald' => $spald,
        ]);
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
            'id_spald' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'nama_kepala_keluarga' => 'required|unique:rumah,nama_kepala_keluarga',
            'nomor_nik' => ['required','unique:rumah,nomor_nik', 'regex:/^\\d{6}([04][1-9]|[1256][0-9]|[37][01])(0[1-9]|1[0-2])\d{2}\d{4}$/'],
            'jumlah_anggota_keluarga' => 'required',
            'kepadatan_penduduk' => 'required',
            'klasifikasi' => 'required',
            'risiko_sanitasi' => 'required',
            'pendapatan' => 'required',
        ],
        [
            'id_spald' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'nama_kepala_keluarga' => 'required',
            'nomor_nik.required' => 'Format NIK Salah atau Duplikasi',
            'jumlah_anggota_keluarga' => 'required',
            'kepadatan_penduduk' => 'required',
            'klasifikasi' => 'required',
            'risiko_sanitasi' => 'required',
            'pendapatan' => 'required',
        ]
        );

        $input = $request->all();
        $store = Rumah::create($input);
    return redirect()->route('rumah.index')->with('pesan', 'Data Rumah Ditambahkan');
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
    public function edit(Rumah $rumah)
    {
        $spald = Rumah::with('ipald')->get();
        $title = 'Edit';
        $layout = 'layouts.sidebar_fixed.master';


        return view('halaman.rumah.edit', compact('rumah','title','layout','spald'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rumah $rumah)
    {

        $request->validate([
            'id_spald' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'nama_kepala_keluarga' => 'required|unique:rumah,nama_kepala_keluarga',
            'nomor_nik' => ['required','unique:rumah,nomor_nik', 'regex:/^\\d{6}([04][1-9]|[1256][0-9]|[37][01])(0[1-9]|1[0-2])\d{2}\d{4}$/'],
            'jumlah_anggota_keluarga' => 'required',
            'kepadatan_penduduk' => 'required',
            'klasifikasi' => 'required',
            'risiko_sanitasi' => 'required',
            'pendapatan' => 'required',
        ],
        [
            'id_spald' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'nama_kepala_keluarga' => 'required',
            'nomor_nik.required' => 'Format NIK Salah atau Duplikasi',
            'jumlah_anggota_keluarga' => 'required',
            'kepadatan_penduduk' => 'required',
            'klasifikasi' => 'required',
            'risiko_sanitasi' => 'required',
            'pendapatan' => 'required',
        ]
        );
        $rumah->update($request->all());
        return redirect()->route('rumah.index')->with('pesan', 'Data Rumah Diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rumah $rumah)
    {
      
        $rumah->delete();
        return redirect()->route('rumah.index')->with('pesan', 'Data Rumah Berhasil Dihapus ');
        
    }
}
