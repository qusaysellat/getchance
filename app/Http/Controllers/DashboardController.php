<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{

    public function index(){
        $user = Auth::user();
        $data = [
            'number_of_users' => User::count(),
            'number_of_posts' => Post::count(),
        ];

        // if (Gate::denies('admin', $user))
        //     abort(403);

        return view('admin.dashboard', [
            'data' => $data,
        ]);
    }
}
