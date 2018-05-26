<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'Prebivaliste';
    public $timestamps = false;

    public function getOpstinaAttribute($val)
    {
        return clean_utf($val);
    }
    public function getMestoAttribute($val)
    {
        return clean_utf($val);
    }
    public function getUlicaAttribute($val)
    {
        return clean_utf($val);
    }
}
