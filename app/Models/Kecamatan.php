<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['kecamatans'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kecamatans';

    /**
     * Get all of the comments for the Kecamatan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ipald()
    {
        return $this->hasMany(Ipald::class, 'id_kec', 'id_kec');
    }
}
