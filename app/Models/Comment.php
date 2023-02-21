<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    
    

    protected $table = "comments";

    protected $fillable = [
        'user_id','ads_id','created_at','updated_at','comments',
    ];

    protected $hidden = [
        'updated_at',
    ];
    public function ads(){
        return $this->belongsTo($related='App\Models\Ads', $foreignKey = 'ads_id'	, $localKey = 'id');

    }

    public function user(){
        return $this->belongsTo($related='App\User', $foreignKey = 'user_id'	, $localKey = 'id');

    }
    

  
    
}
