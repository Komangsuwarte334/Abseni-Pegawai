<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\guard;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{


    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        if (Auth()->user()->level == 1) {
            return route('HomeAdmin');
        } elseif (Auth()->user() == 2) {
            return route('HomeUser');
        }
    }


    public function index()
    {
        return view('pengguna.Login', [
            'title' => 'Login',
            'active' => 'Login'
        ]);
    }



    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('username' => $input['username'], 'password' => $input['password']))) {
            if (auth()->user()->level == 1) {
                return redirect('HomeAdmin');
            } elseif (Auth()->user()->level == 2) {
                return redirect('HomeUser');
            }
        } else {
            return back()->with('loginError', 'Login faild!');
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }
}
