<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developers extends Model
{
    use HasFactory;

    public $user_id = 'userId';

    public function getUser()
    {
        return User::where('id', $this->user_id)->first();
    }

    public function courses()
    {
        return $this->hasMany('App\Models\Entities\Course', 'id');
    }
}
