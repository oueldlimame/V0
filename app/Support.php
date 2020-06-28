<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    public function partie()
    {
        return $this->belongsTo('App\Partie');
    }
}
