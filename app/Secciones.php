<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secciones extends Model
{
    protected $table = 'secciones';
    protected $fillable = ['des_nombreseccion'];

    public $timestamps = false;
}
