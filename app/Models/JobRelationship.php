<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRelationship extends Model
{
    use HasFactory;

    protected $fillable = [
        'start',
        'finish',
        'approved',
        'rating',
        'comment',
        'user_id',
        'job_position_id',
    ];

    public function jobPosition()
    {
        return $this->belongsTo(JobPosition::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
