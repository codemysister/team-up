<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskFile extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'task_has_file';

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
