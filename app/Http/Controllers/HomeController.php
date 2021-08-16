<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = User::get()->where('usertype', 1);

        $companies = User::get()->where('usertype', 2);

        $educationals = User::get()->where('usertype', 3);

        $posts = Post::all();


        return view('home', [
            'people' => $people,
            'companies' => $companies,
            'educationals' => $educationals,
            'posts' => $posts,
        ]);
    }
}
