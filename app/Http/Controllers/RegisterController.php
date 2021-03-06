<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    //Register account information
    public function registerakun(){
        return view('RegisterView');
    }

    //Register logical
    public function register(Request $request){
        $registerakun = User::create([
            'name'=>$request->name, 
            'email' =>$request->email, 
            'username' =>$request->username, 
            'password'=>Hash::make($request->password),
            'nik'=>$request->nik, 
            'alamat' =>$request->alamat, 
            'no_telp' =>$request->no_telp
        ]);

        return redirect('/login');
    }
}
