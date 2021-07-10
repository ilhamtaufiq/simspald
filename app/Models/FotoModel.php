<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class FotoModel extends Model
{
    public function AllData()
    {
       return DB::table('tbl_foto')
       ->join('tbl_spald', 'tbl_spald.id_spald', '=', 'tbl_foto.id_spald')
       ->get();
    }
    public function InsertData($data)
    {
        DB::table('tbl_foto')
        ->insert($data);
    }

    public function DetailData($id_foto)
    {
        return DB::table('tbl_foto')
        ->join('tbl_spald', 'tbl_spald.id_spald', '=', 'tbl_foto.id_spald')
        ->where('id_foto', $id_foto)->first();
    }

    public function DetailSPALD($id_spald)
    {
        return DB::table('tbl_foto')
        ->join('tbl_spald', 'tbl_spald.id_spald', '=', 'tbl_foto.id_spald')
        ->where('tbl_foto.id_spald', $id_spald)->get();
    }

    public function DetailKSM($id_spald)
    {
        return DB::table('tbl_foto')
        ->join('tbl_spald', 'tbl_spald.id_spald', '=', 'tbl_foto.id_spald')
        ->where('tbl_foto.id_spald', $id_spald)->first();
    }

    public function UpdateData($id_foto, $data)
    {
        return DB::table('tbl_foto')
        ->where('id_foto', $id_foto)
        ->update($data);
    }

    public function DeleteData($id_foto)
    {
        return DB::table('tbl_foto')
        ->where('id_foto', $id_foto)
        ->delete();
    }
}
