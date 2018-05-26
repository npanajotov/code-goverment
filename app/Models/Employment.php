<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    protected $table = 'NSZ';

    public $timestamps = false;


    public function getStatusAttribute($val)
    {
        return clean_utf($val);
    }

    public function getOJEvidencijeAttribute($val)
    {
        return clean_utf($val);
    }

    public function getObrazovniProfilAttribute($val)
    {
        return clean_utf($val);
    }
}
