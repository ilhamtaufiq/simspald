<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outcome;
use App\Models\Ipald;

class OutcomeController extends Controller
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
        $outcome = Outcome::has('ipald')->get();
 
        return view('halaman.outcome.index', [
            'title' => 'Data Outcome',
            'layout' => 'layouts.sidebar_fixed.master',
            'outcome' => $outcome,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $outcome = Ipald::has('ksm')->get();
        //  dd($outcome);
        return view('halaman.outcome.input', [
            'title' => 'Tambah data Outcome',
            'layout' => 'layouts.sidebar_fixed.master',
            'outcome' => $outcome,
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
            'id_spald' => 'required|unique:outcome,id_spald',
            'kuantitas' => 'required',
            'satuan' => 'required',
        ],
        [
            'id_spald.required' => 'Duplikasi Data Outcome!',
            'kuantitas' => 'required',
            'satuan' => 'required',
        ]
        );

        $input = $request->all();
        $store = Outcome::create($input);
    return redirect()->route('outcome.index')->with('pesan', 'Data Outcome Ditambahkan');
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
    public function edit(Outcome $outcome)
    {
        $pengelola = Outcome::with('ipald')->get();
        $title = 'Edit';
        $layout = 'layouts.sidebar_fixed.master';

        return view('halaman.outcome.edit', compact('outcome','title','layout','pengelola'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outcome $outcome)
    {
        $request->validate([
            'id_spald' => 'required',
            'kuantitas' => 'required',
            'satuan' => 'required',
        ],
        [
            'id_spald.required' => 'Duplikasi Data Outcome!',
            'kuantitas' => 'required',
            'satuan' => 'required',
        ]
        );

        $outcome->update($request->all());
    return redirect()->route('outcome.index')->with('pesan', 'Data Outcome Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outcome $outcome)
    {
        //
        $outcome->delete();
        return redirect()->route('outcome.index')->with('pesan', 'Data Outcome Berhasil Dihapus ');
    }
}
