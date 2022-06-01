<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetPassword extends Controller
{
    public function index()
    {
        return view('pengguna.Forget_password');
    }

    public function password(Request $request)
    {
        dd($request->all());
    }
}
