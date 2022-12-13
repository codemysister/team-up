<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function qualification()
    {
        return $this->hasMany('App\Models\Qualification');
    }
}
