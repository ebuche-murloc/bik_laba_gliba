<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    public function ittype()
    {
        return $this->belongsTo( 'App\Models\Entities\ITType', 'it_type_id');
    }
}
