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
        
        if(auth()->user()->role == 'admin')
        {
            return view('admin.home');
        }
        elseif(auth()->user()->role == 'author')
        {
            return view('author.home');
        }
        else
        {
            return view('home');
        }
    }
}
