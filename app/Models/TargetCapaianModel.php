<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class TargetCapaianModel extends Model
{
    public function AllData()
    {
       return DB::table('tbl_t_capaian')
       ->join('tbl_kecamatan', 'tbl_kecamatan.id_kec', '=', 'tbl_t_capaian.id_kec')
       ->join('tbl_desa', 'tbl_desa.id_desa', '=', 'tbl_t_capaian.id_desa')
       ->get();
    }

    public function InsertData($data)
    {
        DB::table('tbl_t_capaian')
        ->insert($data);
    }

    public function DetailData($id_capaian)
    {
        return DB::table('tbl_t_capaian')
        ->join('tbl_kecamatan', 'tbl_kecamatan.id_kec', '=', 'tbl_t_capaian.id_kec')
        ->join('tbl_desa', 'tbl_desa.id_desa', '=', 'tbl_t_capaian.id_desa')
        ->where('id_capaian', $id_capaian)->first();
    }

    public function UpdateData($id_capaian, $data)
    {
        return DB::table('tbl_t_capaian')
        ->where('id_capaian', $id_capaian)
        ->update($data);
    }

    public function DeleteData($id_capaian)
    {
        return DB::table('tbl_t_capaian')
        ->where('id_capaian', $id_capaian)
        ->delete();
    }

}
