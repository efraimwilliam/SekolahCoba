<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use App\Models\Admin;

class LoginController extends Controller
{
    //login pages
    public function LoginPage(){
        return view('LoginView');
    }

    //login logic
    public function login(Request $request){

        $credentials = $request->only(['username', 'password']);
        if(Auth::attempt($credentials)){
            return redirect('/');
        }
        return redirect('/logins');
    }
}
