<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function members()
    {
        return $this->hasMany(TaskMember::class);
    }

    public function files()
    {
        return $this->hasMany(TaskFile::class);
    }

    public function roles()
    {
        return $this->hasMany(TaskRole::class);
    }
}
