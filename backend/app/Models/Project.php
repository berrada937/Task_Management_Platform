<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
// Related models
use App\Models\User;
use App\Models\Task;

class Project extends Model
{
    use HasUuids;

    protected $fillable = [
        "name",
        "description",
        "status",
        "user_id",
    ];

    // Project belongs to one user
    public function user(){
        return $this->belongsTo(User::class);
    }

    // Project has many tasks
    public function tasks(){
        return $this->hasMany(Task::class);
    }
}
