<?php

namespace App\Http\Controllers;

use App\Earnings;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();
        $user_id = $user->pluck('user_id');
        dd($user_id);
        $lastEarning = Earnings::where('user_id', auth()->id())->orderBy('created_at', 'desc')->first();
        return view('admin', [
            'users' => $user
        ]);
    }
}
