<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ITType extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public function courses()
    {
        return $this->hasMany('App\Models\Entities\Course', 'it_type_id');
    }
}
