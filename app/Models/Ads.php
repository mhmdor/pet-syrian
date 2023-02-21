<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Ads extends Model
{
    

    use SoftDeletes;
    protected $dates=['deleted_at'];

    protected $table = "ads";

    protected $fillable = [
        'user_id','title','type','created_at','updated_at','Description','city','price','photo','old','country','slug',
    ];

    protected $hidden = [
        'updated_at',
    ];
    

     public function user(){
        return $this->belongsTo($related='App\User', $foreignKey = 'user_id'	, $localKey = 'id');

    }

    public function user1(){
        return $this->belongsToMany($related='App\User',$table='fav',$foreignPivotKey ='ads_id',$relatedPivotKey ='user_id',$relatedKey='id');
    }

    public function comment(){
        return $this->hasMany($related='App\Models\Comment', $foreignKey = 'ads_id'	, $localKey = 'id');
    }
    
}
