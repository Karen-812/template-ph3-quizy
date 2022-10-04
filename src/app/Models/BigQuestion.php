<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BigQuestion extends Model
{
    public function choices()
    {
        return $this->hasMany('App\Models\Choice');
    }
    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }
    public $timestamps = false;
    // Unknown column 'updated_at' というエラーが出たため追加
    protected $fillable = ['name', 'order']; 
 
}
