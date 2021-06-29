<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
}