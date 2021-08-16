<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'posttype',
        'status',
        'user_id',
        'category_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function skills(){
        return $this->belongsToMany(Skill::class, 'post_skill', 'post_id', 'skill_id');
    }

    public function interactions(){
        return $this->belongsToMany(User::class, 'interactions', 'post_id', 'user_id');
    }

}
