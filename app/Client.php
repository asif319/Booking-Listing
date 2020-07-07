<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    protected $guarded=[];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function reviewPosts()
    {
        return $this->hasMany(ReviewPost::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
