<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo()
    {
        if (Auth::user()->user_type == 'teacher') {
            return RouteServiceProvider::TEACHER;
        } else if (Auth::user()->user_type == 'student') {
            return RouteServiceProvider::STUDENT;
        } else {
            return RouteServiceProvider::ADMIN;
        }
    }

    // public function redirectTo() {
    //     $role = Auth::user()->user_type;
    //     switch ($role) {
    //       case 'admin':
    //         return '/admin';
    //         break;
    //       case 'teacher':
    //         return '/teacher';
    //         break;

    //       default:
    //         return '/student';
    //       break;
    //     }
    //   }

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
