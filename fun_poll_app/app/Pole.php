<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Option;

class Pole extends Model
{
    //
    public function options()
    {
        return $this->hasMany(Option::class);
    }


}
