<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    protected $fillable = [
        'login', 'email', 'password','email_verified_at',''
    ];

    protected $hidden = [ 
        'password', 'remember_token',
    ];
}
