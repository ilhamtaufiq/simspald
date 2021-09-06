<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Crypt;

class Rumah extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rumah';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the user associated with the Rumah
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ipald()
    {
        return $this->hasOne(Pengelola::class, 'id_spald', 'id_spald');
    }

    /**
     * Set the 
     *
     * @param  string  $value
     * @return void
     */
    public function setNomorNikAttribute($value)
    {
        return $this->attributes['nomor_nik'] = Crypt::encryptString($value);
    }

    public function getNomorNikAttribute($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (\Exception $e) {
            return $value;
        }
    }

    /**
     * Set the 
     *
     * @param  string  $value
     * @return void
     */
    public function setBabsAttribute($value)
    {
        return $this->attributes['babs'] = $value ?? 0;

    }

    /**
     * Set the 
     *
     * @param  string  $value
     * @return void
     */
    public function setCublukPerkotaanAttribute($value)
    {
        return $this->attributes['cubluk_perkotaan'] = $value ?? 0;

    }

    /**
     * Set the 
     *
     * @param  string  $value
     * @return void
     */
    public function setCublukPerdesaanAttribute($value)
    {
        return $this->attributes['cubluk_perdesaan'] = $value ?? 0;
    }

    /**
     * Set the 
     *
     * @param  string  $value
     * @return void
     */
    public function setAaTsIndividualAttribute($value)
    {
        return $this->attributes['aa_ts_individual'] = $value ?? 0;
    }
    
        /**
     * Set the 
     *
     * @param  string  $value
     * @return void
     */
    public function setAaTsKomunalAttribute($value)
    {
        return $this->attributes['aa_ts_komunal'] = $value ?? 0;
    }

        /**
     * Set the 
     *
     * @param  string  $value
     * @return void
     */
    public function setAaIpaldAttribute($value)
    {
        return $this->attributes['aa_ipald'] = $value ?? 0;
    }

    //

    public function setAlTsIndividualAttribute($value)
    {
        return $this->attributes['al_ts_individual'] = $value ?? 0;
    }
    
        /**
     * Set the 
     *
     * @param  string  $value
     * @return void
     */
    public function setAlTsKomunalAttribute($value)
    {
        return $this->attributes['al_ts_komunal'] = $value ?? 0;
    }

        /**
     * Set the 
     *
     * @param  string  $value
     * @return void
     */
    public function setAlIpaldAttribute($value)
    {
        return $this->attributes['al_ipald'] = $value ?? 0;
    }
    
}
