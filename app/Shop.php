<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function owner()
    {
        return $this->hasOne(User::class);
    }

    public function deals()
    {
        return $this->hasMany(Deal::class);
    }
}
