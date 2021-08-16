<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumeRequest;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
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
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function show(Resume $resume)
    {
        return view('resume.show')->with('resume', $resume);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function edit(Resume $resume)
    {
        if($resume->user->id != Auth::user()->id)
            abort(403);

        return view('resume.edit')->with('resume', $resume);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function update(ResumeRequest $request, Resume $resume)
    {
        if($resume->user->id != Auth::user()->id)
            abort(403);

        $request->validated();

        $resume->update([
            'name' => $request['name'],
            'dob' => $request['dob'],
            'gender' => $request['gender'],
            'nationality' => $request['nationality'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'website' => $request['website'],
            'summary' => $request['summary'],
            'education' => $request['education'],
            'experience' => $request['experience'],
        ]);

        return redirect()->route('resumes.show', $resume);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resume $resume)
    {
        abort(404);
    }
}
