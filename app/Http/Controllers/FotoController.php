<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FotoModel;
use DB;

class FotoController extends Controller
{
    public function __construct()
    {
        $this->FotoModel = new FotoModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'title' => 'foto',
            'foto' => $this->FotoModel->AllData(),

        ];
        return view('admin.foto.index', $data);
    }

    public function detail($id_spald)
    {
        $data = [
            'title' => 'foto',
            'nama' => $this->FotoModel->DetailKSM($id_spald),
            'ksm' => $this->FotoModel->DetailSPALD($id_spald),

        ];
        return view('admin.foto.detail', $data);
    }

    public function add(Request $request)
    {
        $spald = DB::table('tbl_spald')->get();

        $data = [
            'title' => 'Tambah Data Foto SPALD',
            'spald' => $spald,

         ];
        return view('admin.foto.input', $data);
    }

    public function insert()
    {
        Request()->validate([
            'id_spald' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
        ],
        [
            'id_spald.required' => "Pilih Pekerjaan SPALD",
            'deskripsi.required' => "Deskripsi Wajib Diisi!",
            'foto.required' => "Format Tidak Sesuai",
        ]
    );
    $file = Request()->foto;
    $getfile = $file->getClientOriginalName();
    $md5 = md5_file($file);
    $ext = $file->guessExtension();
    $foto = 'foto_'.$md5.'.'.$ext;
    $file->move(public_path('foto'), $foto); 
    

    $data = [        
        'id_spald' => Request()->id_spald,
        'deskripsi' => Request()->deskripsi,
        'foto' => $foto,
    ];
    
    $this->FotoModel->InsertData($data);
    return redirect()->route('foto')->with('pesan', 'Data Foto SPALD Berhasil Ditambahkan');

    }

    public function edit($id_foto)
    {
        $spald = DB::table('tbl_spald')->get();

        $data = [
            
            'title' => 'Edit Data Koordinat SPALD',
            'foto' => $this->FotoModel->DetailData($id_foto),
            'spald' => $spald,
        ];
        return view('admin.foto.edit', $data);
    }

    public function update($id_foto)
    {
        Request()->validate([
            'id_spald' => 'required',
        ],[
            'id_spald.required' => 'Wajib Diisi!',
        ]);
        if (Request()->all() <> "") {
            //Hapus icon lama
            $foto = $this->FotoModel->DetailData($id_foto);
            if (Request()->foto <> "") {
                # code...
                unlink (public_path('foto').'/'.$foto->foto);
            }
            # Jika ingin ganti data icon
            $file = Request()->foto;
            $getfile = $file->getClientOriginalName();
            $md5 = md5_file($file);
            $ext = $file->guessExtension();
            $foto = 'foto_'.$md5.'.'.$ext;
            $file->move(public_path('foto'), $foto); 
        

            $data = [
                'id_spald' => Request()->id_spald,
                'deskripsi' => Request()->deskripsi,
                'foto' => $foto,
                
            ];
            $this->FotoModel->UpdateData($id_foto,$data);
        }else{
            //Jika tidak ganti icon
            $data = [
                'id_spald' => Request()->id_spald,
                'deskripsi' => Request()->id_spald,
            ];
            $this->FotoModel->UpdateData($id_foto,$data);
        }
        return redirect()->route('foto')->with('pesan', 'Data Foto Berhasil Diubah');  

    }

    public function delete($id_foto)
    {
        //Hapus icon lama
        $foto = $this->FotoModel->DetailData($id_foto);
        if ($foto->foto <> "") {
                # code...
            unlink (public_path('foto').'/'.$foto->foto);

        }        
        $this->FotoModel->DeleteData($id_foto);        
        return redirect()->route('foto')->with('pesan', 'Data Foto SPALD Berhasil Dihapus ');
    }
}
