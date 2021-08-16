<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function index()
    {
        $data = [
            'number_of_users' => User::count(),
            'number_of_posts' => Post::count(),
        ];

        return view('admin.stats', [
            'data' => $data,
        ]);
    }
}
