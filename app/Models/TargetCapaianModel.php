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
}
