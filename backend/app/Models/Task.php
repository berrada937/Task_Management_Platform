<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
// Related models
use App\Models\Project;
use App\Models\Comment;

class Task extends Model
{
    use HasUuids;

    protected $fillable = [
        "title",
        "description",
        "status",
        "project_id",
    ];

    // Task belongs to one project
    public function project(){
        return $this->belongsTo(Project::class);
    }

    // Task has many comments
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
