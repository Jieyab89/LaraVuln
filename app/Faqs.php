<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'user_id', 'subject', 'message', 'file', 'created_at', 'updated_at'
    ];

    //relation
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    // HERE TO FIX THE IDOR OR EXPOSED DATA REQUEST WILL BE HIDE (HIDE ALL RECORD)
    //'name', 'email', 'pin', 'address', 'phone_number', 'email_verified_at', 'remember_token', 'created_at', 'updated_at', 'password',
    //
    
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
}
