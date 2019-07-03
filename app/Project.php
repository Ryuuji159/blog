<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    public function photos() 
    {
        return $this->hasMany('App\ProjectPhoto');
    }
}
