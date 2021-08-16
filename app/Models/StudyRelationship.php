<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyRelationship extends Model
{
    use HasFactory;

    protected $fillable = [
        'start',
        'finish',
        'approved',
        'rating',
        'comment',
        'user_id',
        'study_program_id',
    ];

    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
