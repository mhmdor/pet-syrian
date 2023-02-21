<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable 
{
   

   
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password',
    ];

    
    protected $hidden = [
        'password', 
    ];

    protected $guard = "admin";

  
}
