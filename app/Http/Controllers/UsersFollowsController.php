<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Follower;
use Auth;


class UsersFollowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $loggedInUser = Auth::user();
        $followings = $loggedInUser->followings;
        $followees = $loggedInUser->followers;
        $otherUsers = User::whereNotIn('id', $followings->lists('id'))->get();
        return view('users.follows', compact('followings', 'otherUsers', 'followees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newFollower = new Follower;
        $newFollower->following_id = $request->input('yet_to_follow');
        $newFollower->follower_id = Auth::user()->id;
        $newFollower->save();
        return back();
    }

}
