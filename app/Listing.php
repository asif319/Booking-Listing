<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $guarded=[];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function amenities()
    {
        return $this->hasMany(Amenities::class);
    }

    public function hours()
    {
        return $this->hasMany(Hour::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function reviewPosts()
    {
        return $this->hasMany(ReviewPost::class);
    }
}
