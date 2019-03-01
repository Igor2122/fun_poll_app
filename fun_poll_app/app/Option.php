<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pole;

class Option extends Model
{
    //
    public function poles()
    {
        return $this->belongsTo('Pole');
    }
}
