<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user1 = Auth::user();
        $user2 = User::find($id);

        if(is_null($user1) or is_null($user2)){
            abort(404);
        }

        // $code = $this->get_code($user1, $user2);
        $code = $user2->usertype;

        return view('user.show_'.$code)->with('user', $user2);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort(404);
    }

    public function get_code(User $user1, User $user2)
    {
        $t1 = $user1->usertype;
        $t2 = $user2->usertype;
        $code = 0;

        // if($user1->id == $user2->id){
        //     return $code = 0;
        // }

        if($t1 == 1){
            if($t2 == 1){
                $code = 1;
            }elseif($t2 == 2){
                $code = 2;
            }else{
                $code = 3;
            }
        }
        if($t1 == 2){
            if($t2 == 1){
                $code = 4;
            }elseif($t2 == 2){
                $code = 5;
            }else{
                $code = 6;
            }
        }
        if($t1 == 3){
            if($t2 == 1){
                $code = 7;
            }elseif($t2 == 2){
                $code = 5;
            }else{
                $code = 6;
            }
        }

        return $code;
    }

    public function verify(User $user)
    {
        if(is_null($user)){
            abort(404);
        }

        if($user->status == 1){
            abort(403);
        }

        $user->status = 1;

        $user->save();

        return redirect()->back();
    }

    public function unverify(User $user)
    {
        if(is_null($user)){
            abort(404);
        }

        if($user->status == 0){
            abort(403);
        }

        $user->status = 0;

        $user->save();

        return redirect()->back();
    }
}
