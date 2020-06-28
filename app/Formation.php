<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function partie()
    {
        return $this->hasMany('App\partie');
    }
    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }
}
