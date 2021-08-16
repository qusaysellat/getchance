<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobRelationshipRequest;
use App\Models\JobPosition;
use App\Models\JobRelationship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobRelationshipController extends Controller
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
    public function store(JobRelationshipRequest $request)
    {
        $user = Auth::user();

        if($user->usertype != 1){
            abort(403);
        }

        $request->validated();

        $jobPosition = JobPosition::find($request['job_position_id']);

        if($jobPosition->jobRelationships()->where('user_id', $user->id)->count() == 1){
            abort(403);
        }

        $jobRelationship = JobRelationship::create([
            'start' => $request['start'],
            'finish' => $request['finish'],
            'job_position_id' => $request['job_position_id'],
            'user_id' => Auth::user()->id,
        ]);

        $user1 = $user;
        $user2 = $jobPosition->user;
        $message = $user1->username.' sent you a job position request.';

        NotificationController::store($user2, $message);

        return redirect()->route('users.show', $jobPosition->user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobRelationship  $jobRelationship
     * @return \Illuminate\Http\Response
     */
    public function show(JobRelationship $jobRelationship)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobRelationship  $jobRelationship
     * @return \Illuminate\Http\Response
     */
    public function edit(JobRelationship $jobRelationship)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobRelationship  $jobRelationship
     * @return \Illuminate\Http\Response
     */
    public function update(JobRelationshipRequest $request, JobRelationship $jobRelationship)
    {
        $user = Auth::user();
        $company = $jobRelationship->jobPosition->user;

        if($user->id != $company->id){
            abort(403);
        }

        $request->validated();

        $jobRelationship->update([
            'start' => $request['start'],
            'finish' => $request['finish'],
            'approved' => $request['approved'],
            'rating' => $request['rating'],
            'comment' => $request['comment'],
        ]);

        $user1 = $jobRelationship->user;
        $user2 = $company;
        $message = $user2->username.' replied to your job position request.';

        NotificationController::store($user1, $message);

        return redirect()->route('users.show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobRelationship  $jobRelationship
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobRelationship $jobRelationship)
    {
        $user = Auth::user();
        $company = $jobRelationship->jobPosition->user;
        $worker = $jobRelationship->user;

        if(($user->id != $company->id) and ($user->id != $worker->id)){
            abort(403);
        }

        $jobRelationship->delete();

        return redirect()->route('users.show', $jobRelationship->jobPosition->user->id);
    }
}
