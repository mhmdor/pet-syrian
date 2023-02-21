<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = "profile_users";

    protected $fillable = [
       'user_id','mobile','gender','created_at','updated_at','city',
    ];

    protected $hidden = [
        'created_at','updated_at'
    ]; 

    public function user(){
        return $this->belongsTo($related='App\User', $foreignKey = 'user_id'	, $localKey = 'id');
    }

}
