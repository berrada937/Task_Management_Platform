<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
// Related models
use App\Models\User;
use App\Models\Task;

class Comment extends Model
{
    use HasUuids;

    protected $fillable = [
        "body",
        "user_id",
        "task_id",
    ];

    // Comment belongs to one user
    public function user(){
        return $this->belongsTo(User::class);
    }

    // Comment belongs to one task
    public function task(){
        return $this->belongsTo(Task::class);
    }
}
