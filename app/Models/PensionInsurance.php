<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PensionInsurance extends Model
{
    protected $table = 'PIO';
    public $timestamps = false;


    public function getVrstaAttribute($val)
    {
        return clean_utf($val);
    }

    public function getFilijalaAttribute($val)
    {
        return clean_utf($val);
    }
}
