<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudyRelationshipRequest;
use App\Models\StudyProgram;
use App\Models\StudyRelationship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudyRelationshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort(404);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($study_program_id)
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudyRelationshipRequest $request)
    {
        $user = Auth::user();

        if($user->usertype != 1){
            abort(403);
        }

        $request->validated();

        $studyProgram = StudyProgram::find($request['study_program_id']);

        if($studyProgram->studyRelationships()->where('user_id', $user->id)->count() == 1){
            abort(403);
        }

        $studyRelationship = StudyRelationship::create([
            'start' => $request['start'],
            'finish' => $request['finish'],
            'study_program_id' => $request['study_program_id'],
            'user_id' => Auth::user()->id,
        ]);

        $user1 = $user;
        $user2 = $studyProgram->user;
        $message = $user1->username.' sent you a study program request.';

        NotificationController::store($user2, $message);

        return redirect()->route('users.show', $studyProgram->user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudyRelationship  $studyRelationship
     * @return \Illuminate\Http\Response
     */
    public function show(StudyRelationship $studyRelationship)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudyRelationship  $studyRelationship
     * @return \Illuminate\Http\Response
     */
    public function edit(StudyRelationship $studyRelationship)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudyRelationship  $studyRelationship
     * @return \Illuminate\Http\Response
     */
    public function update(StudyRelationshipRequest $request, StudyRelationship $studyRelationship)
    {
        $user = Auth::user();
        $educational = $studyRelationship->studyProgram->user;

        if($user->id != $educational->id){
            abort(403);
        }

        $request->validated();

        $studyRelationship->update([
            'start' => $request['start'],
            'finish' => $request['finish'],
            'approved' => $request['approved'],
            'rating' => $request['rating'],
            'comment' => $request['comment'],
        ]);

        $user1 = $studyRelationship->user;
        $user2 = $educational;
        $message = $user2->username.' replied to your study program request.';

        NotificationController::store($user1, $message);

        return redirect()->route('users.show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudyRelationship  $studyRelationship
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudyRelationship $studyRelationship)
    {
        $user = Auth::user();
        $educational = $studyRelationship->studyProgram->user;
        $student = $studyRelationship->user;

        if(($user->id != $educational->id) and ($user->id != $student->id)){
            abort(403);
        }

        $studyRelationship->delete();

        return redirect()->route('users.show', $studyRelationship->studyProgram->user->id);
    }
}
