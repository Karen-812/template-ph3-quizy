<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Big_question extends Model
{
    public function choices()
    {
        return $this->hasMany('App\Choice');
    }
    public function questions()
    {
        return $this->hasMany('App\Question');
    }
    public $timestamps = false;
    // Unknown column 'updated_at' というエラーが出たため追加
    protected $fillable = ['name']; 
}
