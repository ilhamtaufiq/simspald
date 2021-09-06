<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'map';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the user associated with the Map
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ipald()
    {
        return $this->hasOne(Pengelola::class, 'id_spald', 'id_spald');
    }
    public function spald()
    {
        return $this->hasOne(Ipald::class, 'id_spald', 'id_spald')
        ->join('rincian_kegiatan','id_spald','=','ipalds.id_spald');
    }
}
