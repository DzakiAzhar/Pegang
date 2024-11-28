<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    function login(){
        return view(view: 'auth.login');
    }

    function logout(){
        return view(view: 'welcome');
    }

    public function register(){
        return view(view: 'auth.register');
    }

    public function loginPost(Request $request){
        if (Auth::attempt($request->only('email','password'))){
            return redirect('dashboard');
        }
        return redirect('login');
    }

    public function registerPost(Request $request){
        $request->validate([
            'name'  => 'required',
            'level' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'

        ]);

        $data['name'] = $request->name;
        $data['level'] = $request->level;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->passsword);

        User::create($data);

        $login = [
            'email'     => $request->email,
            'password'  => $request->password
        ];

        if(Auth::attempt($login)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('register');
        }
    }


}



