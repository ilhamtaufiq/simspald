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
}
