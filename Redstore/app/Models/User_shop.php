<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_shop extends Model
{
    // table name
    protected $table = 'user_shops';
    // primary key
    public $primaryKey = 'id';
    // timestamps
    public $timestamps = true;
 
 
    // Adding relationships
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function site(){
        return $this->belongsTo('App\Models\Redstore');
    }

    public function catalog(){
        return $this->hasMany('App\Models\Product');
    }
}
