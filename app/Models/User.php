<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'usertype',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    public function resume()
    {
        return $this->hasOne(Resume::class);
    }

    public function studyPrograms()
    {
        return $this->hasMany(StudyProgram::class);
    }

    public function jobPositions()
    {
        return $this->hasMany(JobPosition::class);
    }

    public function jobRelationshipsOfPerson()
    {
        return $this->hasMany(JobRelationship::class);
    }

    public function jobRelationshipsOfCompany()
    {
        return $this->hasManyThrough(JobRelationship::class, JobPosition::class);
    }

    public function studyRelationshipsOfPerson()
    {
        return $this->hasMany(StudyRelationship::class);
    }

    public function studyRelationshipsOfEducational()
    {
        return $this->hasManyThrough(StudyRelationship::class, StudyProgram::class);
    }

    public function toFriendships()
    {
        return $this->hasMany(Friendship::class, 'user1_id');
    }

    public function fromFriendships()
    {
        return $this->hasMany(Friendship::class, 'user2_id');
    }

    public function areFriends(User $user){
        $id1 = $this->id;
        $id2 = $user->id;
        $count = DB::table('friendships')->where('user1_id', $id1)->where('user2_id', $id2)->orWhere('user1_id', $id2)->where('user2_id', $id1)->count();
        return $count>0;
    }

    public function needsApprove(User $user){
        $id1 = $this->id;
        $id2 = $user->id;
        if($this->areFriends($user)){
            if(DB::table('friendships')->where('user1_id', $id2)->where('user2_id', $id1)->where('approved', 0)->count() > 0 ){
                return true;
            }
        }
        return false;
    }

    public function interacted(){
        return $this->belongsToMany(Post::class, 'interactions', 'user_id', 'post_id');
    }

    public function hasInteracted(Post $post)
    {
        if(DB::table('interactions')->where('user_id', $this->id)->where('post_id', $post->id)->count() > 0 ){
            return true;
        }

        return false;

    }

    public function toMessages()
    {
        return $this->hasMany(Message::class, 'user1_id');
    }

    public function fromMessages()
    {
        return $this->hasMany(Message::class, 'user2_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

}
