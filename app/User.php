<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'firstname','lastname', 'email', 'password','age','mobile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ads(){
        return $this->hasMany($related='App\Models\Ads', $foreignKey = 'user_id'	, $localKey = 'id');
    }

    public function profile(){
        return $this->hasOne($related='App\Models\profile', $foreignKey = 'user_id'	, $localKey = 'id');
    }

    public function ads1(){
        return $this->belongsToMany($related='App\Models\Ads',$table='fav',$foreignPivotKey ='user_id',$relatedPivotKey ='ads_id',$relatedKey='id');
    }

    public function roles(){
        // return $this->belongsToMany(Role::class);
        return $this->belongsToMany('App\Role','role_user','user_id','role_id');
        

    }
    
}
