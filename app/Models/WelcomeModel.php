<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class WelcomeModel extends Model
{
    public function KoordinatData()
    {
       return DB::table('tbl_koordinat')
       ->join('tbl_spald', 'tbl_spald.id_spald', '=', 'tbl_koordinat.id_spald')
       ->get();
    }
}
