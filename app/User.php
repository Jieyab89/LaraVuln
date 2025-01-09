<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'pin', 'address', 'phone_number', 'email_verified_at', 'remember_token', 'created_at', 'updated_at', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    // HERE TO FIX THE IDOR OR EXPOSED DATA REQUEST WILL BE HIDE (HIDE ALL RECORD)
    //'name', 'email', 'pin', 'address', 'phone_number', 'email_verified_at', 'remember_token', 'created_at', 'updated_at', 'password',
    //
    
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
