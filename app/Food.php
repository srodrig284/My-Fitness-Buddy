<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    // things you can do
    // Table name
    protected $table = 'foods';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    public function meal(){
        return $this->belongsTo('App\Meal');
    }
}
