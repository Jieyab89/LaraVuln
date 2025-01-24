<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feeds extends Model
{
    protected $fillable = [
        'title', 'user_id', 'content', 'media', 'created_at', 'updated_at'
    ];

    //relation
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
