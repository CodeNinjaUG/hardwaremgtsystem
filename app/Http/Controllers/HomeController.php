<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
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

    public function crud(){
        return view('crud');
    }

    public function users(){
        return view('users');
    }

    public function profile(){
        return view('profile');
    }
    public function pointofsale(){
        return view('pointofsale');
    }

    public function post(){
        return view('post');
    }
    public function chat(){
        return view('chat');
    }
}
