<?php

namespace App\Http\Controllers\Auth;

use App\Plan;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RefersController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
//    public function showRegistrationForm()
//    {
//        $plans = Plan::all();
//        return view('auth.register')->with('plans',$plans);
//    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'account_type' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'jazz_cash_no' => ['required', 'string', 'max:255'],
            'cinic_no' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }
    public function showRegistrationForm($id)
    {
        $referees = User::find($id);
        $plans = Plan::all();
        //$referees = User::all()->where('id', '=', $id);
//        return view('auth.refers_register')->with('id',$id);
        return view('auth.refers_register')->with('refrees',$referees)->with('plans', $plans);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        dd($data);
        return User::create([
            'account_type' => $data['account_type'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'user_name' => $data['user_name'],
            'no_of_refers' => $data['refers_id'],
            'user_earning' => $data['user_earning'],
            'earning_of_refers' => $data['earning_of_refers'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'cinic_no' => $data['cinic_no'],
            'jazz_cash_no' => $data['jazz_cash_no'],
            'country' => $data['country'],
            'state' => $data['state'],
            'city' => $data['city'],
        ]);
    }
}
