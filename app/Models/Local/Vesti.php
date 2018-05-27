<?php

namespace App\Models\Local;

use Illuminate\Database\Eloquent\Model;

class Vesti extends Model
{
    protected $table = 'vesti';
    public $timestamps = false;
    protected $fillable = ['message', 'title', ' type'];

}
