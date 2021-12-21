<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    public function redirectTo () {
        if (auth::user()->role == 'admin') {
            return $this -> redirectTo = route ('siswa.index');
            // return $this -> redirectTo;
        } else {
            return $this -> redirectTo = route ('siswa.show', auth::user()-> siswa_id);
            // return $this -> redirectTo;
        }
    }
    
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
