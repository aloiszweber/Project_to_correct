<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function checklogin()

    {

        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes)){
            session()->regenerate();
            session(['email' => $attributes['email']]);
            return redirect('/')->with('success', 'Welcome Back' );
        }

        throw ValidationException::withMessages([
            'email' => 'An account with this email doesn\'t exist'
        ]);
    }

    function logout()
    {
        Auth()->logout();
        return redirect('login');
    }
}
