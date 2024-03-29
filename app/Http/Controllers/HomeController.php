<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function listUser() {
        $users = User::orderBy('id', 'desc')->paginate(40);
        return view('user.index')->withUsers($users);
    }
    public function showUser($id) {
        $user = User::find($id);
        return view('user.show')->withUser($user);
    }

    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('profile.index', compact('user'));
    }

}
