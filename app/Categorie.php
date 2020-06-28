<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function formation()
    {
        return $this->hasMany('App\Formation');
    }
}
