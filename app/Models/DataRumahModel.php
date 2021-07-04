<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class DataRumahModel extends Model
{
    public function AllData()
    {
       return DB::table('tbl_rumah')
       ->join('tbl_kecamatan', 'tbl_kecamatan.id_kec', '=', 'tbl_rumah.id_kec')
       ->join('tbl_desa', 'tbl_desa.id_desa', '=', 'tbl_rumah.id_desa')
       ->get();
    }

    public function InsertData($data)
    {
        DB::table('tbl_rumah')
        ->insert($data);
    }

    public function DetailData($id_rumah)
    {
        return DB::table('tbl_rumah')
        ->join('tbl_kecamatan', 'tbl_kecamatan.id_kec', '=', 'tbl_rumah.id_kec')
        ->join('tbl_desa', 'tbl_desa.id_desa', '=', 'tbl_rumah.id_desa')
        ->where('id_rumah', $id_rumah)->first();
    }

    public function UpdateData($id_rumah, $data)
    {
        return DB::table('tbl_rumah')
        ->where('id_rumah', $id_rumah)
        ->update($data);
    }

    public function DeleteData($id_rumah)
    {
        return DB::table('tbl_rumah')
        ->where('id_rumah', $id_rumah)
        ->delete();
    }
}
