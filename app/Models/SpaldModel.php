<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class SpaldModel extends Model
{
    public function AllData()
    {
       return DB::table('tbl_spald')
       ->join('tbl_kecamatan', 'tbl_kecamatan.id_kec', '=', 'tbl_spald.id_kec')
       ->join('tbl_desa', 'tbl_desa.id_desa', '=', 'tbl_spald.id_desa')
       ->get();
    }
    public function DeleteData($id_spald)
    {
        return DB::table('tbl_spald')
        ->where('id_spald', $id_spald)
        ->delete();
    }
}
