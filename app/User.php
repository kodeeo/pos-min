<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $guarded=[];

    public function setting()
    {
        return $this->belongsTo(Setting::class);
    }

    public function employee()
    {
        return $this->hasMany(User::class,'user_id','id');
    }

}
