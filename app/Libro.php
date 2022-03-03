<?php

namespace App;

use App\Usuario;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
  //  public $transformer = LibroTransformer::Class;

    protected $fillable = ['titulo', 'description'];

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class)->withTimestamps();
    }

}
