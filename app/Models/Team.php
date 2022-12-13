<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User')->withPivot('status', 'role', 'message', 'cv');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function requirements()
    {
        return $this->hasMany('App\Models\Requirement');
    }
}
