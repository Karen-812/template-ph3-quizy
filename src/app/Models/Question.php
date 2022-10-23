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
    protected $guarded = ['id']; 
    // ↓書いたらエラー直るのですが、これ書いちゃいけなかったような...前も教えて頂いたのに内容忘れましたすみません...
    public $timestamps = false;
}
