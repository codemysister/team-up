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

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function requirements()
    {
        return $this->hasMany('App\Models\Requirement');
    }

    public function members()
    {
        return $this->hasMany('App\Models\Member');
    }

    public function roles()
    {
        return $this->hasMany('App\Models\Role');
    }
}
