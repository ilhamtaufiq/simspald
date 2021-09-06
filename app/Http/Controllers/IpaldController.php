<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ipald;
use App\Models\Outcome;
use App\Models\Output;
use DB;

class IpaldController extends Controller
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
        $data = Ipald::with('outcome','output','ksm','rumah','desa','kec','kegiatan','rincianKegiatan')->get();
        return view('halaman.ipald.index', [
            'data' => $data,
            'title' => 'Pengelolaan Air Limbah Domestik',
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
        $kecamatan = DB::table('kecamatans')->pluck('n_kec', 'id_kec');
        $kegiatan = DB::table('kegiatan')->pluck('kegiatan', 'id_kegiatan');

        return view('halaman.ipald.input', [
            'title' => 'Tambah SPALD',
            'kecamatan' => $kecamatan,
            'kegiatan' => $kegiatan,
            'layout' => 'layouts.sidebar_fixed.master',

        ]);
    }

    public function getDesa($id_kec)
    {
        $data = DB::table('desas')
        ->where('id_kec', $id_kec)
        ->pluck('n_desa', 'id_desa');

        return response()->json($data);
    }

    public function getSpald($id_spald)
    {
        $data = DB::table('ipalds')
        ->where('id_spald', $id_spald)
        ->pluck('id_kegiatan', 'id_spald');

        return response()->json($data);
    }


    public function getRincianKegiatan($id_kegiatan)
    {
        $data = DB::table('rincian_kegiatan')
        ->where('id_kegiatan', $id_kegiatan)
        ->pluck('rincian_kegiatan', 'id_rincian_kegiatan');

        return response()->json($data);
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
            'id_kec' => 'required',
            'id_desa' => 'required',
            'id_kegiatan' => 'required',
            'id_rincian_kegiatan' => 'required',
            'sumber_dana' => 'required',
            'pagu' => 'required',
            'tahun_anggaran' => 'required'
        ],
        [
            'required.id_kec' => 'Wajib Diisi',
            'required.id_desa' => 'Wajib Diisi',
            'required.id_kegiatan' => 'Wajib Diisi',
            'required.id_rincian_kegiatan' => 'Wajib Diisi',
            'required.sumber_dana' => 'Wajib Diisi',
            'required.pagu' => 'Wajib Diisi',
            'required.tahun_anggaran' => 'Wajib Diisi,'
        ]
        );

        $input = $request->all();
        $store = Ipald::create($input);       
        return redirect()->route('spald.index')->with('pesan', 'Data Berhasil Ditambahkan');

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
    public function edit(Ipald $spald)
    {

        $kecamatan = DB::table('kecamatans')->pluck('n_kec', 'id_kec');
        $kegiatan = DB::table('kegiatan')->pluck('kegiatan', 'id_kegiatan');

        // $data = Ipald::with('ksm')->get();
        // dd($spald->ksm->nama_ksm);
        $title = "Ubah Data SPALD";
        $layout = 'layouts.sidebar_fixed.master';
        return view('halaman.ipald.edit', compact('spald', 'title', 'layout','kecamatan','kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ipald $spald)
    {
        $request->validate([
            'id_kec' => 'required',
            'id_desa' => 'required',
            'id_kegiatan' => 'required',
            'id_rincian_kegiatan' => 'required',
            'sumber_dana' => 'required',
            'pagu' => 'required',
            'tahun_anggaran' => 'required'
        ],
        [
            'required.id_kec' => 'Wajib Diisi',
            'required.id_desa' => 'Wajib Diisi',
            'required.id_kegiatan' => 'Wajib Diisi',
            'required.id_rincian_kegiatan' => 'Wajib Diisi',
            'required.sumber_dana' => 'Wajib Diisi',
            'required.pagu' => 'Wajib Diisi',
            'required.tahun_anggaran' => 'Wajib Diisi,'
        ]
        );
        $spald->update($request->all());
        return redirect()->route('spald.index')->with('pesan', 'Data SPALD Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ipald $spald)
    {
        $spald->delete();
        return redirect()->route('spald.index')->with('pesan', 'Data SPALD Berhasil Dihapus ');
    }
}
