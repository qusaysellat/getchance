<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudyProgramRequest;
use App\Models\StudyProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudyProgramController extends Controller
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
        if(Auth::user()->usertype != 3){
            abort(403);
        }

        return view('studyprogram.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudyProgramRequest $request)
    {
        if(Auth::user()->usertype != 3){
            abort(403);
        }

        $request->validated();

        $studyProgram = StudyProgram::create([
            'progname' => $request['progname'],
            'level' => $request['level'],
            'duration' => $request['duration'],
            'description' => $request['description'],
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('users.show', Auth::user()->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudyProgram  $studyProgram
     * @return \Illuminate\Http\Response
     */
    public function show(StudyProgram $studyProgram)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudyProgram  $studyProgram
     * @return \Illuminate\Http\Response
     */
    public function edit(StudyProgram $studyProgram)
    {
        if(Auth::user()->id != $studyProgram->user->id){
            abort(403);
        }

        return view('studyprogram.edit')->with('studyProgram', $studyProgram);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudyProgram  $studyProgram
     * @return \Illuminate\Http\Response
     */
    public function update(StudyProgramRequest $request, StudyProgram $studyProgram)
    {
        if(Auth::user()->id != $studyProgram->user->id){
            abort(403);
        }

        $request->validated();

        $studyProgram->update([
            'progname' => $request['progname'],
            'level' => $request['level'],
            'duration' => $request['duration'],
            'description' => $request['description'],
        ]);

        return redirect()->route('users.show', Auth::user()->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudyProgram  $studyProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudyProgram $studyProgram)
    {
        if(Auth::user()->id != $studyProgram->user->id){
            abort(403);
        }

        $studyProgram->delete();

        return redirect()->route('users.show', Auth::user()->id);
    }
}
