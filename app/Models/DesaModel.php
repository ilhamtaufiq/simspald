<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class DesaModel extends Model
{
    public function AllData($id_kec)
    {
       return DB::table('tbl_desa')
       ->join('tbl_kecamatan', 'tbl_kecamatan.id_kec', '=', 'tbl_desa.id_kec')
       ->where('tbl_desa.id_kec', $id_kec)
       ->get();
    }

    public function InsertData($data)
    {
        DB::table('tbl_desa')
        ->insert($data);
    }

    public function DetailData($id_desa)
    {
        return DB::table('tbl_desa')
        ->join('tbl_kecamatan', 'tbl_kecamatan.id_kec', '=', 'tbl_desa.id_kec')
        ->where('id_desa', $id_desa)->first();
    }

    public function UpdateData($id_desa, $data)
    {
        return DB::table('tbl_desa')
        ->where('id_desa', $id_desa)
        ->update($data);
    }

    public function DeleteData($id_desa)
    {
        return DB::table('tbl_desa')
        ->where('id_desa', $id_desa)
        ->delete();
    }
}
