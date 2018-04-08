<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lectivas extends Model
{
   protected $table = 'lectivas';
    protected $fillable = ['nombre','descripcion','profesor','cupos'];
}
