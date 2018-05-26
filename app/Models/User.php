<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'Korisnik';
    protected $fillable = ['JMBG', 'Ime', 'Prezime', 'KorisnickoIme', 'StatusKorisnika'];

    public $timestamps = false;

    public function getImeAttribute($val)
    {
        return clean_utf($val);
    }

    public function getPrezimeAttribute($val)
    {
        return clean_utf($val);
    }

    public function identityCard()
    {
        return $this->belongsTo(IdentityCard::class, 'JMBG', 'JMBG');
    }

    public function birthBook()
    {
        return $this->belongsTo(BirthBook::class, 'JMBG', 'JMBG');
    }

    public function employment()
    {
        return $this->belongsTo(Employment::class, 'JMBG', 'JMBG');
    }

    public function passport()
    {
        return $this->belongsTo(Passport::class, 'JMBG', 'JMBG');
    }

    public function pension()
    {
        return $this->belongsTo(PensionInsurance::class, 'JMBG', 'JMBG');
    }

    public function address()
    {
        return $this->hasMany(Address::class, 'JMBG', 'JMBG');
    }

    public function driverLicence()
    {
        return $this->belongsTo(DriverLicence::class, 'JMBG', 'JMBG');
    }

    public function marriageBook()
    {
        $sex = $this->birthBook()->first()->Pol === 'Ж' ? 'NevestaJMBG' : 'ZenikJMBG';

        return $this->belongsTo(MarriageBook::class, 'JMBG', $sex);
    }
}
