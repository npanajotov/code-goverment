<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarriageBook extends Model
{
    protected $table = 'MKV';
    public $timestamps = false;


    public function getOpstinaAttribute($val)
    {
        return clean_utf($val);
    }

    public function getMaticnoPodrucjeAttribute($val)
    {
        return clean_utf($val);
    }

    public function getMestoZakljucenjaBrakaAttribute($val)
    {
        return clean_utf($val);
    }

    public function getZenikOdabranoPrezimeAttribute($val)
    {
        return clean_utf($val);
    }

    public function getNevestaOdabranoPrezimeAttribute($val)
    {
        return clean_utf($val);
    }
}
