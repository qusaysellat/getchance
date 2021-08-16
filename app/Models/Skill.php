<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'importance'
    ];

    public function posts(){
        return $this->belongsToMany(Post::class, 'post_skill', 'skill_id', 'post_id');
    }

    public function jobPositions(){
        return $this->belongsToMany(JobPosition::class, 'job_position_skill', 'skill_id', 'job_id');
    }
}
