<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function login(Request $request)
    {
        if (Auth::attempt(array(
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ))) {
            session([
                'username' => $request->get('username')
            ]);
            return redirect()->back();
        } else {
            Session::flash('message-login', "Invalid Username or Password , Please try again.");
      /*       dd($request->get ( 'password' )); */
            return redirect()->back();
        }
    }



    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
