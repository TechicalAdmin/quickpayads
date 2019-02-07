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
        $user = auth()->user();
        $refer = User::all()->where('refers_id', '=', $user['id']);
        $no_of_refers = count($refer);
        return view('home')->with('user',$user)->with('no_of_refers', $no_of_refers);
    }
}
