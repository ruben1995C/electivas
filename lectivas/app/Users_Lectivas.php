<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_Lectivas extends Model
{
      protected $table = 'users-lectivas';
    protected $fillable = ['id_users','id_lectiva'];
}
