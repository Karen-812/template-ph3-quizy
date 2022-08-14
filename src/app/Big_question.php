<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Big_question extends Model
{
    public function choices()
    {
        return $this->hasMany('App\Choice');
    }
}
