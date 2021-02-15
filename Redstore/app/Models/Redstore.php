<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redstore extends Model
{
    // table name
    protected $table = 'redstores';
    // primary key
    public $primaryKey = 'id';
    // timestamps
    public $timestamps = true;


    // Adding relationships
    public function users(){
        return $this->hasMany('App\User');
    }

    public function catalog(){
        return $this->hasMany('App\Models\Product');
    }

    public function shops(){
        return $this->hasMany('App\Models\User_shop');
    }
}
