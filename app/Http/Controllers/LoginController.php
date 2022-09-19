<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
      if($user = Auth::user()){
        if($user->level == '1'){
          return redirect()->intended('owner@yogaprindavan.com');  
        }elseif($user->level == '2'){
            return redirect()->intenteded('admin');
        }
      }
      return view('login.login');
    
    }

    public function proses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email tidak boleh kosong!',
        ]
    );

    $kredensial = $request->only('email','password');

    if(Auth::attempt($kredensial)){
        $request->session()->regenerate();
            if ($user = Auth::user()) {
                if ($user->level == '1') {
                    return redirect()->intended('owner@yogaprindavan.com');
                } elseif ($user->level == '2') {
                    return redirect()->intenteded('admin');
                }
            }

            return redirect()->intended('/');
    }

        return back()->withErrors([
            'email' => 'Maaf Email atau Password anda Salah'
        ])->onlyInput('Email');
    }
}
