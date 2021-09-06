<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
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
    protected $table = 'desas';

    /**
     * Get all of the comments for the Desa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ipald()
    {
        return $this->hasMany(Ipald::class, 'id_desa', 'id_desa');
    }
}
