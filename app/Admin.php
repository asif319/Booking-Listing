<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $guarded=[];

    public function listing()
    {
        return $this->hasMany(Listing::class);
    }
}
