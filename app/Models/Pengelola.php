<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ipald;

class Pengelola extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pengelola';

    /**
     * Get the ipald ad with the Pengelola
     *
     * @return \IlluminaIpaldatabase\Eloquent\Relations\HasOne
     */
    public function ipald()
    {
        return $this->hasOne(Ipald::class, 'id_spald', 'id_spald')
        ->join('rincian_kegiatan','id_spald','=','ipalds.id_spald')
        ->join('desas', 'desas.id_desa', '=', 'ipalds.id_desa')
        ->join('kecamatans', 'kecamatans.id_kec', '=', 'ipalds.id_kec');

    }
}
