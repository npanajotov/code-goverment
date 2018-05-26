<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BirthBook extends Model
{
    protected $table = 'MKR';
    public $timestamps = false;

    public function getImeAttribute($val)
    {
        return clean_utf($val);
    }

    public function getPrezimeAttribute($val)
    {
        return clean_utf($val);
    }

    public function getPolAttribute($val)
    {
        return clean_utf($val);
    }

    public function getDrzavljanstvoAttribute($val)
    {
        return clean_utf($val);
    }

    public function getImeOcaAttribute($val)
    {
        return clean_utf($val);
    }

    public function getImeMajkeAttribute($val)
    {
        return clean_utf($val);
    }

    public function getMestoRodjenjaAttribute($val)
    {
        return clean_utf($val);
    }

    public function getOpstinaRodjenjaAttribute($val)
    {
        return clean_utf($val);
    }
}
