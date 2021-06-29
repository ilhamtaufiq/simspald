<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class RealisasiCapaianModel extends Model
{
    public function AllData()
    {
       return DB::table('tbl_r_capaian')
       ->join('tbl_kecamatan', 'tbl_kecamatan.id_kec', '=', 'tbl_r_capaian.id_kec')
       ->join('tbl_desa', 'tbl_desa.id_desa', '=', 'tbl_r_capaian.id_desa')
       ->get();
    }
}
