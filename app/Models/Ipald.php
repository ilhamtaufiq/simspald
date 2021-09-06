<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Outcome;
use App\Models\Pengelola;

class Ipald extends Model
{
    use HasFactory;

    public function totalOutcome($id_spald)
    {
        return DB::table('outcome')
        ->select('kuantitas')
        ->where('id_spald', '=', $id_spald)
        ->get();
    }

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_spald';

    public function outcome()
    {
        return $this->hasOne(Outcome::class, 'id_spald');
    }

    public function map()
    {
        return $this->hasOne(Map::class, 'id_spald', 'id_spald');
    }

    public function output()
    {
        return $this->hasOne(Output::class,'id_spald');
    }

    /**
     * Get the user associated with the Ipald
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ksm()
    {
        return $this->belongsTo(Pengelola::class, 'id_spald', 'id_spald');
    }

    /**
     * Get all of the comments for the Ipald
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rumah()
    {
        return $this->hasMany(Rumah::class, 'id_spald', 'id_spald');
    }

    /**
     * Get the user associated with the Ipald
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function desa()
    {
        return $this->hasOne(Desa::class, 'id_desa', 'id_desa');
    }

    /**
     * Get the user associated with the Ipald
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kec()
    {
        return $this->hasOne(Kecamatan::class, 'id_kec', 'id_kec')->select('id_kec', 'n_kec');
    }

    /**
     * Get the user associated with the Ipald
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kegiatan()
    {
        return $this->hasOne(Program::class, 'id_kegiatan', 'id_kegiatan');
    }

    /**
     * Get the user associated with the Ipald
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rincianKegiatan()
    {
        return $this->hasOne(Rincian::class, 'id_rincian_kegiatan', 'id_rincian_kegiatan');
    }

    /**
     * Set the 
     *
     * @param  string  $value
     * @return void
     */
    public function setSrAttribute($value)
    {
        return $this->attributes['sr'] = $value ?? 0;
    }

    /**
     * Set the 
     *
     * @param  string  $value
     * @return void
     */
    public function setIpalAttribute($value)
    {
        return $this->attributes['ipal'] = $value ?? 0;
    }

    /**
     * Set the 
     *
     * @param  string  $value
     * @return void
     */
    public function setJiwaAttribute($value)
    {
        return $this->attributes['jiwa'] = $value ?? 0;
    }


    /**
     * Set the 
     *
     * @param  string  $value
     * @return void
     */
    public function setTsAttribute($value)
    {
        return $this->attributes['ts'] = $value ?? 0;
    }


}
