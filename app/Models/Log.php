<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $guarded = [
        'task_id',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
}
