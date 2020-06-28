<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partie extends Model
{
    public function formation()
    {
        return $this->belongsTo('App\Formation');
    }
    public function support()
    {
        return $this->hasMany('App\Support');
    }
}
