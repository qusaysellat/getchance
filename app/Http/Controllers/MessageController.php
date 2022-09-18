<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user1 = User::find(Auth::user()->id);
        $user2 = User::find($id);

        if($user1->id == $user2->id){
            abort(403);
        }

        Message::where('user1_id', $user2->id)->update([
            'read' => 1
        ]);

        $sent = $user1->toMessages()->where('user2_id', $user2->id)->get();

        $received = $user1->fromMessages()->where('user1_id', $user2->id)->get();

        return view('message.index', [
            'user' => $user2,
            'sent' => $sent->sortDesc(),
            'received' => $received->sortDesc(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequest $request)
    {
        $request->validated();

        Message::create([
            'content' => $request['content'],
            'user1_id' => $request['user1_id'],
            'user2_id' => $request['user2_id'],
        ]);

        $user1 = User::find($request['user1_id']);
        $user2 = User::find($request['user2_id']);
        $message = $user1->username.' sent you a new message.';

        NotificationController::store($user2, $message);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        abort(404);
    }
}
