<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectPhoto extends Model
{
    protected $table = 'projects_photos';

    public function project() {
        return $this->belongsTo('App\Project');
    }
}
