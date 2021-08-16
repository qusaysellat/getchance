<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{

    public function index(){
        $user = Auth::user();

        // if (Gate::denies('admin', $user))
        //     abort(403);

        return view('admin.dashboard');
    }
}
