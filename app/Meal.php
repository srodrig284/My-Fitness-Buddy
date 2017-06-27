<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    // things you can do
    // Table name
    protected $table = 'meals';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function food()
    {
        return $this->hasMany('App\Food');
    }
}
