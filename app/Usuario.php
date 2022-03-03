<?php

namespace App;

use App\Libro;

use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

//implements JWTSubject
class Usuario extends Authenticatable implements JWTSubject 
{
    //
    use Notifiable;

    protected $fillable = [
        'nombre', 'email', 'password',
    ];

    public function libros()
    {
        return $this->belongsToMany(Libro::class)->withTimestamps();
    }
 
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }


    public function getJWTCustomClaims()
    {
        return [];
    }
}
