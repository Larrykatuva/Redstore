<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // table name
    protected $table = 'products';
    // primary key
    public $primaryKey = 'id';
    // timestamps
    public $timestamps = true;
 
 
    // Adding relationships
    public function site(){
        return $this->belongsTo('App\Models\Redstore');
    }

    public function shop(){
        return $this->belongsTo('App\Models\User_shop');
    }
}
