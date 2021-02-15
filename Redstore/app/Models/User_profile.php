<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_profile extends Model
{
    // table name
    protected $table = 'user_profiles';
    // primary key
    public $primaryKey = 'id';
    // timestamps
    public $timestamps = true;

    //Relationships
    public function user(){
        return $this->belongsTo('App\User');
    }
}
