<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class KoordinatModel extends Model
{
    public function AllData()
    {
       return DB::table('tbl_koordinat')
       ->join('tbl_spald', 'tbl_spald.id_spald', '=', 'tbl_koordinat.id_spald')
       ->get();
    }
    public function InsertData($data)
    {
        DB::table('tbl_koordinat')
        ->insert($data);
    }

    public function DetailData($id_koordinat)
    {
        return DB::table('tbl_koordinat')
        ->join('tbl_spald', 'tbl_spald.id_spald', '=', 'tbl_koordinat.id_spald')
        ->where('id_koordinat', $id_koordinat)->first();
    }

    public function UpdateData($id_koordinat, $data)
    {
        return DB::table('tbl_koordinat')
        ->where('id_koordinat', $id_koordinat)
        ->update($data);
    }

    public function DeleteData($id_koordinat)
    {
        return DB::table('tbl_koordinat')
        ->where('id_koordinat', $id_koordinat)
        ->delete();
    }
}
