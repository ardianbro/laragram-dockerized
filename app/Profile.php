<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profileImage()
    {
        return ($this->image) ? '/storage/' .  $this->image : '/img/instagram.jpg';
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
