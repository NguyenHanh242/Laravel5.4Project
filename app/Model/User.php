<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    
    public function post()
    {
        return $this->hasMany('App\Model\Post');
    }

}
