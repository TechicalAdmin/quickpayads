<?php

namespace App\Http\Controllers;

use App\Earnings;
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
        $refer = User::all()->where('refer_id', '=', auth()->id());
        $lastEarning = Earnings::where('user_id', auth()->id())->orderBy('created_at', 'desc')->first();
//        dump($user['id']);
//        dd($lastEarning['total']);
        $no_of_refers = count($refer);
        return view('home')->with('user',$user)->with('no_of_refers', $no_of_refers)->with('total',$lastEarning);
    }
    public function upgradeAccount()
    {
        return view('paymentMenu');
    }
}
