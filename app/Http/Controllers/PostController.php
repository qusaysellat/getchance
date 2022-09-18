<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Auth::user()->posts;

        return view('post.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $skills = Skill::all();
        return view('post.create')->with('categories', $categories)->with('skills', $skills);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $request->validated();

        $post = Post::create([
            'title' => $request['title'],
            'content' => $request['content'],
            'posttype' => $request['posttype'],
            'user_id' => $request['user_id'],
            'category_id' => $request['category_id'],
        ]);

        $category = $post->category;
        $categoryImportance = $category->importance + 1;
        $category->update([
            'importance' => $categoryImportance
        ]);

        for($i=1;$i<=3;$i++){
            $skill_id = $request['skill_'.$i];

            $skill = Skill::firstWhere('id', $skill_id);

            if(!is_null($skill)){

                DB::table('post_skill')->insert([
                    'post_id' => $post->id,
                    'skill_id' => $skill->id,
                ]);
                $skillImportance = $skill->importance + 1;
                $skill->update([
                    'importance' => $skillImportance
                ]);


            }
        }

        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if($post->user->id != Auth::user()->id)
            abort(403);

        $categories = Category::all();
        $skills = Skill::all();
        $PostSkills = $post->skills;
        $PostSkillsData = [];
        $idx = 0;
        if(!is_null($PostSkills)){
            // dd($PostSkills);
            foreach($PostSkills as $skill){
                // dd($skill);
                $idx++;
                $PostSkillsData[$idx] = $skill->id;
            }
        }
        return view('post.edit')->with('categories', $categories)->with('skills', $skills)->with('post', $post)->with('data', $PostSkillsData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        if($post->user->id != Auth::user()->id)
            abort(403);

        $request->validated();

        $category = $post->category;
        $categoryImportance = $category->importance - 1;
        $category->update([
            'importance' => $categoryImportance
        ]);

        foreach($post->skills as $skill){
            $skillImportance = $skill->importance - 1;
                $skill->update([
                    'importance' => $skillImportance
                ]);
        }

        $post->update([
            'title' => $request['title'],
            'content' => $request['content'],
            'posttype' => $request['posttype'],
            'user_id' => $request['user_id'],
            'category_id' => $request['category_id'],
        ]);

        $category = $skill = Category::firstWhere('id', $request['category_id']);
        $categoryImportance = $category->importance + 1;
        $category->update([
            'importance' => $categoryImportance
        ]);

        DB::table('post_skill')->where('post_id', $post->id)->delete();

        for($i=1;$i<=3;$i++){
            $skill_id = $request['skill_'.$i];

            $skill = Skill::firstWhere('id', $skill_id);

            if(!is_null($skill)){

                DB::table('post_skill')->insert([
                    'post_id' => $post->id,
                    'skill_id' => $skill->id,
                ]);
                $skillImportance = $skill->importance + 1;
                $skill->update([
                    'importance' => $skillImportance
                ]);

            }
        }

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->user->id != Auth::user()->id)
            abort(403);

        $category = $post->category;
        $categoryImportance = $category->importance - 1;
        $category->update([
            'importance' => $categoryImportance
        ]);

        foreach($post->skills as $skill){
            $skillImportance = $skill->importance - 1;
                $skill->update([
                    'importance' => $skillImportance
                ]);
        }
        $post->delete();

        return redirect()->route('posts.index');
    }
}
