<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function choices()
    {
        return $this->hasMany('App\Models\Choice');
        return $this->belongsTo('App\Models\BigQuestion');
    }
}
