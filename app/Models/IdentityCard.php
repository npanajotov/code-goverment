<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdentityCard extends Model
{
    protected $table = 'LicnaKarta';
    public $timestamps = false;


    public function getDokumentIzdajeAttribute($val)
    {
        return clean_utf($val);
    }
}
