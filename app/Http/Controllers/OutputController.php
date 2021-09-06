<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Output;
use App\Models\Ipald;
class OutputController extends Controller
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
        $output = Output::has('ipald')->get();
        return view('halaman.output.index', [
            'title' => 'Data Output',
            'layout' => 'layouts.sidebar_fixed.master',
            'output' => $output,
        ]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $output = Ipald::has('outcome')->get();
        //   dd($output);
        return view('halaman.output.input', [
            'title' => 'Tambah data Output',
            'layout' => 'layouts.sidebar_fixed.master',
            'output' => $output,
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
            // 'ipal' => 'required',
            // 'sr' => 'required',
            // 'tangki_septik' => 'required',
        ],
        [
            'id_spald.required' => 'required',
            // 'ipal' => 'required',
            // 'sr' => 'required',
            // 'tangki_septik' => 'required',
        ]
        );

        $input = $request->all();
        $store = Output::create($input);
        return redirect()->route('output.index')->with('pesan', 'Data Output Ditambahkan');
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
    public function edit(Output $output)
    {
        $pengelola = Output::has('ipald')->get();
        $title = 'Edit Output';
        $layout = 'layouts.sidebar_fixed.master';

        return view('halaman.output.edit', compact('output','title','layout','pengelola'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Output $output)
    {
        $request->validate([
            'id_spald' => 'required',
            // 'ipal' => 'required',
            // 'sr' => 'required',
            // 'tangki_septik' => 'required',
        ],
        [
            'id_spald.required' => 'required',
            // 'ipal' => 'required',
            // 'sr' => 'required',
            // 'tangki_septik' => 'required',
        ]
        );

        $output->update($request->all());
        return redirect()->route('output.index')->with('pesan', 'Data Output Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Output $output)
    {
        $output->delete();
        return redirect()->route('output.index')->with('pesan', 'Data Output Berhasil Dihapus ');
    }
}
