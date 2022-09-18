<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobPositionRequest;
use App\Models\JobPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;

class JobPositionController extends Controller
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
        if(Auth::user()->usertype != 2){
            abort(403);
        }

        $categories = Category::all();
        $skills = Skill::all();
        return view('jobposition.create')->with('categories', $categories)->with('skills', $skills);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobPositionRequest $request)
    {
        if(Auth::user()->usertype != 2){
            abort(403);
        }

        $request->validated();

        $jobPosition = JobPosition::create([
            'depname' => $request['depname'],
            'position' => $request['position'],
            'description' => $request['description'],
            'category_id' => $request['category_id'],
            'user_id' => Auth::user()->id,
        ]);

        for($i=1;$i<=3;$i++){
            $skill_id = $request['skill_'.$i];

            $skill = Skill::firstWhere('id', $skill_id);

            if(!is_null($skill)){

                DB::table('job_position_skill')->insert([
                    'job_position_id' => $jobPosition->id,
                    'skill_id' => $skill->id,
                ]);

            }
        }

        return redirect()->route('users.show', Auth::user()->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobPosition  $jobPosition
     * @return \Illuminate\Http\Response
     */
    public function show(JobPosition $jobPosition)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobPosition  $jobPosition
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPosition $jobPosition)
    {
        if(Auth::user()->id != $jobPosition->user->id){
            abort(403);
        }

        $categories = Category::all();
        $skills = Skill::all();
        $JobPositionSkills = $jobPosition->skills;
        $JobPositionSkillsData = [];
        $idx = 0;
        if(!is_null($JobPositionSkills)){
            // dd($PostSkills);
            foreach($JobPositionSkills as $skill){
                // dd($skill);
                $idx++;
                $JobPositionSkillsData[$idx] = $skill->id;
            }
        }
        return view('jobposition.edit')->with('categories', $categories)->with('skills', $skills)->with('jobPosition', $jobPosition)->with('data', $JobPositionSkillsData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobPosition  $jobPosition
     * @return \Illuminate\Http\Response
     */
    public function update(JobPositionRequest $request, JobPosition $jobPosition)
    {
        if(Auth::user()->id != $jobPosition->user->id){
            abort(403);
        }

        $request->validated();

        $jobPosition->update([
            'depname' => $request['depname'],
            'position' => $request['position'],
            'description' => $request['description'],
            'category_id' => $request['category_id'],
        ]);

        DB::table('job_position_skill')->where('job_position_id', $jobPosition->id)->delete();

        for($i=1;$i<=3;$i++){
            $skill_id = $request['skill_'.$i];

            $skill = Skill::firstWhere('id', $skill_id);

            if(!is_null($skill)){

                DB::table('job_position_skill')->insert([
                    'job_position_id' => $jobPosition->id,
                    'skill_id' => $skill->id,
                ]);

            }
        }

        return redirect()->route('users.show', Auth::user()->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobPosition  $jobPosition
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPosition $jobPosition)
    {
        if(Auth::user()->id != $jobPosition->user->id){
            abort(403);
        }

        $jobPosition->delete();

        return redirect()->route('users.show', Auth::user()->id);
    }
}
