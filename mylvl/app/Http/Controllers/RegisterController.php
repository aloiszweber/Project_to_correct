<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    public function create()
    {
        return view('createaccount');
    }

    public function store(Request $request)
    {

        $request->validate([

            'firstname' => 'required',
            'lastname' => 'required',
            'password' => 'required', 'min:8',
            'email' => 'required', 'email', 'unique:users'
    
            ]);

            User::create([
                'firstname' => $request->firstname,
                'lastname'=> $request->lastname,
                'password' => $request->password,
                'email' => $request->email,
                
            ]);
     
            return redirect()->route('welcome');
    }
}
