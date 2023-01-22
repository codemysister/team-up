<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function requirement()
    {
        return $this->hasMany('App\Models\Requirement');
    }
}
