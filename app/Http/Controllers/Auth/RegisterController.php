<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Country;
use Mail;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
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

    protected function showRegistrationForm() {
        return view('auth/register', [
            'countries' => Country::all(),
           // 'countries' => ['1' => 'india']
        ]);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'city' => $data['city'],
            'country_id' => $data['country'],
            'state_id' => $data['state'],
            'admin' => 0,
            'verified' => 0,
            'remember_token' => str_random(70),
            'token' => str_random(70),
            'password' => Hash::make($data['password']),
        ]);

        $usersDetails = User::findOrfail($user->id);
        $this->sendEmail($usersDetails);
        return $user;
    }

    public function sendEmail($user) {
        Mail::to($user->email)->send(new VerifyEmail($user));
    }

    public function verify($token) {
        
        if(!empty($token)) {
            $user = User::where(['token' => $token])->first();
            if(!empty($user)) {
               User::where(['token' => $token])->update(['verified' => 1, 'token' => null]);
               return redirect('login')->with('status', 'Your account is verified successfully, please login...');
            }
        }
    }
}
