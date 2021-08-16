<?php

namespace App\Http\Controllers;

use App\Http\Requests\FriendshipRequest;
use App\Models\Friendship;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort(403);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user2_id)
    {
        abort(403);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FriendshipRequest $request)
    {
        $user = User::find(Auth::user()->id);

        if($user->usertype != 1){
            abort(403);
        }

        $request->validated();

        if($user->id != $request['user1_id']){
            abort(403);
        }

        if($user->areFriends(User::find($request['user2_id']))){
            abort(403);
        }

        $friendship = Friendship::create([
            'approved' => 0,
            'user1_id' => $user->id,
            'user2_id' => $request['user2_id'],
        ]);

        $user1 = User::find($request['user1_id']);
        $user2 = User::find($request['user2_id']);
        $message = $user1->username.' sent you a friend request.';

        NotificationController::store($user2, $message);

        return redirect()->route('users.show', User::find($request['user2_id'])->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Friendship  $friendship
     * @return \Illuminate\Http\Response
     */
    public function show(Friendship $friendship)
    {
        abort(403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Friendship  $friendship
     * @return \Illuminate\Http\Response
     */
    public function edit(Friendship $friendship)
    {
        abort(403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Friendship  $friendship
     * @return \Illuminate\Http\Response
     */
    public function update(FriendshipRequest $request, Friendship $friendship)
    {
        $user = Auth::user();

        if($user->id != $friendship->user2->id){
            abort(403);
        }

        $request->validated();

        if($friendship->user1->id != $request['user1_id']){
            abort(403);
        }

        $friendship->update([
            'approved' => 1,
        ]);

        $user1 = User::find($request['user1_id']);
        $user2 = User::find($request['user2_id']);
        $message = $user2->username.' accepted your friend request.';

        NotificationController::store($user1, $message);

        return redirect()->route('users.show', User::find($request['user1_id'])->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Friendship  $friendship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Friendship $friendship)
    {
        $user = Auth::user();

        if(($user->id != $friendship->user1->id) and ($user->id != $friendship->user2->id) ){
            abort(403);
        }

        $friendship->delete();

        return redirect()->back();

    }
}
