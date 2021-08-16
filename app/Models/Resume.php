<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dob',
        'gender',
        'nationality',
        'address',
        'phone',
        'email',
        'website',
        'summary',
        'education',
        'experience',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
