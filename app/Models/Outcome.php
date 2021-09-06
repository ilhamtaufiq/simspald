<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pengelola;

class Outcome extends Model
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
    protected $table = 'outcome';

    /**
     * Get the user associated with the Outcome
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ipald()
    {
        return $this->hasOne(Pengelola::class, 'id_spald', 'id_spald');
    }
}
