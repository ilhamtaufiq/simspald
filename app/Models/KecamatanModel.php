<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class KecamatanModel extends Model
{
    public function AllData()
    {
       return DB::table('tbl_kecamatan')->get();
    }

    public function DeleteData($id_kec)
    {
        return DB::table('tbl_kecamatan')
        ->where('id_kec', $id_kec)
        ->delete();
    }
    public function InsertData($data)
    {
        DB::table('tbl_kecamatan')
        ->insert($data);
    }

    public function DetailData($id_kec)
    {
        return DB::table('tbl_kecamatan')
        ->where('id_kec', $id_kec)->first();
    }

    public function UpdateData($id_kec, $data)
    {
        return DB::table('tbl_kecamatan')
        ->where('id_kec', $id_kec)
        ->update($data);
    }

}
