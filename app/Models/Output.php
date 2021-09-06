<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ipald;

class Output extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'output';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function ipald()
    {
        return $this->hasOne(Pengelola::class, 'id_spald', 'id_spald');
    }

    protected $casts = [
        'komponen' => 'array'
    ];

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
    public function setTangkiseptikAttribute($value)
    {
        return $this->attributes['tangki_septik'] = $value ?? 0;

    }
}
