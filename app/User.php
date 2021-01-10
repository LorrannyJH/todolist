<?php

namespace App;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    protected $fillable = [
        'username', 'email', 'password', 'photo'
    ];
    
    protected $hidden = [
        'password'
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function getPhotoUrl()
    {
        return url('storage/' . $this->photo);
    }

}
