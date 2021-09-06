<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\Ipald;

class MapController extends Controller
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
        $map = Map::with('ipald','spald')->get();
        $title =  'Titik Koordinat SPALD';
        $layout = 'layouts.sidebar_fixed.master';
        // dd($map);

        return view('halaman.map.index', compact('map', 'title', 'layout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $map = Ipald::has('ksm')->get();
        $title =  'Titik Koordinat SPALD';
        $layout = 'layouts.sidebar_fixed.master';
        return view('halaman.map.input', compact('map', 'title', 'layout'));
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
            'id_spald' => 'required|unique:map,id_spald',
            'lat' => 'required',
            'long' => 'required',
        ],
        [
            'id_spald.required' => 'Duplikasi Data!',
            'lat' => 'required',
            'long' => 'required',
        ]
        );

        $input = $request->all();
        $store = Map::create($input);
        return redirect()->route('map.index')->with('pesan', 'Data Telah Ditambahkan');
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
    public function edit(Map $map)
    {
        $ksm = Map::has('ipald')->get();
        $title = 'Edit Titik Koordinat';
        $layout = 'layouts.sidebar_fixed.master';
        // dd($map);


        return view('halaman.map.edit', compact('ksm','title','layout','map'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            // 'id_spald' => 'required|unique:map,id_spald',
            'lat' => 'required',
            'long' => 'required',
        ],
        [
            // 'id_spald.required' => 'Duplikasi Data!',
            'lat' => 'required',
            'long' => 'required',
        ]
        );

        $input = $request->all();
        $store = Map::create($input);
        return redirect()->route('map.index')->with('pesan', 'Data Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
