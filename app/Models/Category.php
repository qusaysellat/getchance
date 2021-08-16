<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'importance'
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function jobPositions(){
        return $this->hasMany(JobPosition::class);
    }
}
