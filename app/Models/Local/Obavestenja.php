<?php

namespace App\Models\Local;

use Illuminate\Database\Eloquent\Model;

class Obavestenja extends Model
{
    protected $table = 'obavestenje';
    public $timestamps = false;
    protected $fillable = ['address', 'city', 'message', 'title', ' type'];

}
