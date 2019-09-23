<?php

namespace CodeQr\Http\Controllers\Auth;

use CodeQr\Http\Controllers\Controller;
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
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * sobreescribiendo funcion redirecto
     */
    protected function redirectTo(){
        // rol de usuario
        if (auth()->user()->hasRole('editor')) {
            # se redirecciona a 
            return '/home';
        } elseif (auth()->user()->hasRole('administrador')) {
            # code...
            return '/administrador';
        }
    }

}
