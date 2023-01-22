<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskRole extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'task_has_role';

    public function role()
    {
        return $this->belongsTo(TeamRole::class);
    }
}
